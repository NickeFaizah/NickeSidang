<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiAdminController extends Controller
{
    public function index()
    {
        $data = transaksi::paginate(10);
        return view('admin.page.transaksi', ['title' => "Transaksi", 'name' => 'Transaksi', 'data' => $data]);
    }

    function detail($code_transaksi)
    {
        $tf = transaksi::where(['code_transaksi' => $code_transaksi])->first();
        return response()->json([
            'transaksi' => [
                'nama_customer' => $tf->nama_customer,
                'alamat' => $tf->alamat,
                'no_tlp' => $tf->no_tlp,
                'ekspedisi' => $tf->ekspedisi,
                'total_harga' => $tf->total_harga,
                'status' => $tf->status,
                'bukti_bayar' => $tf->bukti_bayar,
            ],
            'products' => DB::table('detail_transaksi')
                ->join('products', 'products.id', '=', 'detail_transaksi.id_barang')
                ->select('detail_transaksi.*', 'products.nama_product as nama_product')
                ->where(['id_transaksi' => $code_transaksi])
                ->get(),
        ]);
    }

    function proses(Request $request)
    {
        transaksi::where(['code_transaksi' => $request->code_transaksi])->update(['status' => 'Proses']);
        return back()->with('success', 'Transaksi berhasil diproses.');
    }

    function tolak(Request $request)
    {
        transaksi::where(['code_transaksi' => $request->code_transaksi])->update(['status' => 'Rejected']);
        return back()->with('success', 'Transaksi berhasil ditolak.');
    }

    function kirim(Request $request)
    {
        transaksi::where(['code_transaksi' => $request->code_transaksi])->update(['status' => 'InTransit', 'resi' => $request->resi]);
        return back()->with('success', 'Transaksi berhasil dikirim.');
    }
}
