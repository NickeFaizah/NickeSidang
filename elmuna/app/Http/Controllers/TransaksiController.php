<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Http\Requests\StoretransaksiRequest;
use App\Http\Requests\UpdatetransaksiRequest;
use App\Models\product;
use App\Models\tblCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $best = product::where('quantity_out', '>=', 5)->get();
        $data = product::paginate(15);
        $id_user = (Auth::user() != null) ? Auth::user()->id : 0;
        $countKeranjang = tblCart::where(['idUser' => $id_user, 'status' => 0])->count();
        // $countKeranjang = tblCart::where(['idUser' => Auth::user()->id, 'status' => 0])->count();
        return view('pelanggan.page.home', [
            'title'     => 'Home',
            'data'      => $data,
            'best'      => $best,
            'count'     => $countKeranjang,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function addTocart(Request $request)
    {
        //Periksa apakah pengguna sudah login
        if (!Auth::check()) {
            //jika pengguna belum login, arahkan ke halaman login
            return redirect()->route('loginproses.pelanggan')->with('error', 'anda harus login atau register untuk menambahkan item ke keranjang');
        } else {
            //jika pengguna sudah login, lanjutkan proses menambahkan item ke keranjang
            $idProduct = $request->input('idProduct');

            $db = new tblCart;
            $product = product::find($idProduct);
            $field = [
                'idUser'    => Auth::id(), //Gunakan ID pengguna yang sudah login
                'id_barang' => $idProduct,
                'qty'       => 1,
                'price'     => $product->harga,
            ];

            $db::create($field);
            session()->flash('success_message', 'Berhasil menambahkan barang ke keranjang.');
            return redirect()->route('product.pelanggan');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretransaksiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetransaksiRequest $request, transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, transaksi $transaksi, $id)
    {
        $product = Product::where('id', $request->id)->firstOrFail($id)->delete();

        return redirect()->route('destroy.product')->with('success', 'Product deleted successfully');

        //    
        // $product = product::findOrFail($id);
        //     $product->delete();

        //     $json = [
        //         'success' => "Data berhasil dihapus"
        //     ];

        //     echo json_encode($json);
        // }
    }

    public function destroyCart(tblCart $product, $id)
    {
        $cart = tblCart::findOrFail($id);
        $cart->delete();

        // Jika data berhasil dihapus, maka kembalikan pesan "Data berhasil dihapus"
        
        return redirect()->route('transaksi')->with('success', 'Produk berhasil dihapus dari keranjang');
    }
}
