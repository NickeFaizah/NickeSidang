<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\tblCart;
use App\Models\transaksi;
use Illuminate\Http\Request;
use App\Models\modelDetailTransaksi;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class checkoutController extends Controller
{

    use AuthorizesRequests, ValidatesRequests;
    public function checkout()
    {
        $countKeranjang = tblCart::where(['idUser' => Auth::user()->id, 'status' => 0])->count();
        $code = transaksi::count();
        $codeTransaksi = date('Ymd') . $code + 1;
        $detailBelanja = modelDetailTransaksi::where(['id_transaksi' => $codeTransaksi, 'status' => 0])
            ->sum('price');
        $jumlahBarang = modelDetailTransaksi::where(['id_transaksi' => $codeTransaksi, 'status' => 0])
            ->count('id_barang');
        $qtyBarang = modelDetailTransaksi::where(['id_transaksi' => $codeTransaksi, 'status' => 0])
            ->sum('qty');
        return view('pelanggan.page.checkOut', [
            'title'     => 'Check Out',
            'count'     => $countKeranjang,
            'detailBelanja' => $detailBelanja,
            'jumlahbarang' => $jumlahBarang,
            'qtyOrder'  => $qtyBarang,
            'codeTransaksi' => $codeTransaksi
        ]);
    }

    public function prosesCheckout(Request $request)
    {
        $data = $request->all();
        // $findId = tblCart::where('id',$id)->get();
        $code = transaksi::count();
        $codeTransaksi = date('Ymd') . $code + 1;
        // dd($data);

        // simpan detail barang
        $detailTransaksi = new modelDetailTransaksi();
        $total_harga = 0;
        $total_qty = 0;
        foreach (json_decode($data['product']) as $key => $v) {
            $cart = tblCart::where(['id' => $v->id])->first();
            $product = product::where(['id' => $cart->id_barang])->first();

            // insert detail transaksi
            $detailTransaksi::create([
                'id_transaksi' => $codeTransaksi,
                'id_barang' => $product->id,
                'qty' => $v->qty,
                'price' => $product->harga,
                'status' => 0
            ]);

            // update cart 
            $fieldCart = [
                'qty'          => $v->qty,
                'price'        => $product->harga * $v->qty,
                'status'       => 1,
            ];
            tblCart::where('id', $v->id)->update($fieldCart);

            $total_harga += $product->harga * $v->qty;
            $total_qty += $v->qty;
        }

        $data_user = [
            'code_transaksi' => $codeTransaksi,
            'alamat' => $data['alamatPenerima'],
            'no_tlp' => $data['tlp'],
            'ekspedisi' => $data['ekspedisi'],
            'nama_customer' => $data['namaPenerima'],
            'idCustomer' => Auth::user()->id,
            'status' => 'Unpaid',
            'total_qty' => $total_qty,
            'total_harga' => $total_harga + $data['ongkir']
        ];
        transaksi::create($data_user);

        return redirect()->to('checkOut/'.$codeTransaksi)->with('success', 'Checkout Berhasil');
    }

    public function prosesPembayaran(Request $request)
    {
        $data = $request->all();
        $dbTransaksi = new transaksi();
        // dd($data);die;

        $dbTransaksi->code_transaksi    = $data['code'];
        $dbTransaksi->total_qty         = $data['totalQty'];
        $dbTransaksi->total_harga       = $data['dibayarkan'];
        $dbTransaksi->nama_customer     = $data['namaPenerima'];
        $dbTransaksi->alamat            = $data['alamatPenerima'];
        $dbTransaksi->no_tlp            = $data['tlp'];
        $dbTransaksi->ekspedisi         = $data['ekspedisi'];

        $dbTransaksi->save();

        $dataCart = modelDetailTransaksi::where('id_transaksi', $data['code'])->get();
        foreach ($dataCart as $x) {
            $dataUp = modelDetailTransaksi::where('id', $x->id)->first();
            $dataUp->status    = 1;
            $dataUp->save();

            $idProduct = product::where('id', $x->id_barang)->first();
            $idProduct->quantity = $idProduct->quantity - $x->qty;
            $idProduct->quantity_out = $x->qty;
            $idProduct->save();
        }

        Alert::alert()->success('Transaksi berhasil', 'Ditunggu barangnya');
        return redirect()->route('home');
    }

    public function keranjang()
    {
        $countKeranjang = tblCart::where(['idUser' => Auth::user()->id, 'status' => 0])->count();
        $all_trx = transaksi::where(['idCustomer' => Auth::user()->id])->get();
        return view('pelanggan.page.keranjang', [
            'name' => 'Payment',
            'title' => 'Payment Process',
            'count' => $countKeranjang,
            'data'  => $all_trx
        ]);
    }

    public function bayar($code_transaksi)
    {

        return view('pelanggan.page.bayar', [
            'title'     => 'Bayar Transaksi',
            'count'     => 0,
            'product'   => DB::table('detail_transaksi')
                ->join('products', 'products.id', '=', 'detail_transaksi.id_barang')
                ->select('detail_transaksi.*', 'products.nama_product as nama_product')
                ->where(['id_transaksi' => $code_transaksi])
                ->get(),
            'transaksi' => DB::table('transaksi')
                ->where(['code_transaksi' => $code_transaksi])
                ->first()
        ]);
    }

    function prosesBayar(Request $request) {
        $request->validate([
            'bukti_bayar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $file = $request->file('bukti_bayar');
        $uniqueName = $file->hashName();
        $file->move('bukti_bayar',$file->hashName());

        // $path = $request->file('bukti_bayar')->store('bukti_bayar');
        // $originalName = $request->file('bukti_bayar')->getClientOriginalName();
        // $uniqueName = $request->file('bukti_bayar')->hashName();

        transaksi::where(['code_transaksi' => $request->code_transaksi])->update([
            'status' => 'Paid',
            'bukti_bayar' => $uniqueName
        ]);

        return redirect()->to('checkOut/'.$request->code_transaksi)->with('success', 'Berhasil dibayar, silakan tunggu konfirmasi admin.');
    }

    function selesaikan($code_transaksi) {
        transaksi::where(['code_transaksi' => $code_transaksi])->update([
            'status' => 'Selesai'
        ]);

        return back()->with('success', 'Transaksi selesai.');
    }
}
