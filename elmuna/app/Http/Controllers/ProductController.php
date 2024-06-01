<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Illuminate\support\Facades\View;
use Illuminate\support\facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $data = product::paginate(5);
        return view('admin.page.product' ,[
            'name'     => 'Product',
            'title'    => 'Admin Product',
            'data'     => $data,
        ]);
    }

    public function addModal()
    {
        return view('admin/modal/addModal', [
            'title' => 'Tambah Data Product',
            'sku'   => 'BRG' . rand(10000, 99999),
        ]);
    }

    public function store(StoreproductRequest $request)
    {
        $data = new product;
        $data->sku          = $request->sku;
        $data->nama_product = $request->nama;
        $data->type         = $request->type;
        $data->kategory     = $request->kategori;
        $data->harga        = $request->harga;
        $data->quantity     = $request->quantity;
        $data->discount     = 10 / 100;
        $data->is_active    = 1;

        if ($request->hasFile('foto')) {
            $photo = $request->file('foto');
            $filename = date('Ymd') . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('storage/product'), $filename);
            $data->foto = $filename;
        }
        $data->save();
        Alert::toast('Data berhasil disimpan', 'success');
        return redirect('/product');
    }

    public function show($id)
    {
        $data = product::findOrFail($id);

        return view(
            'admin.modal.editModal',
            [
                'title' => 'Edit data product',
                'data'  => $data,
            ]
        )->render();
    }

    public function update(UpdateproductRequest $request, product $product, $id)
    {
        $data = product::findOrFail($id);

        if ($request->file('foto')) {
            $photo = $request->file('foto');
            $filename = date('Ymd') . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('storage/product'), $filename);
            $data->foto = $filename;
        } else {
            $filename = $request->foto;
        }

        $field = [
            'sku'                   => $request->sku,
            'nama_product'          => $request->nama,
            'type'                  => $request->type,
            'kategory'              => $request->kategori,
            'harga'                 => $request->harga,
            'quantity'              => $request->quantity,
            'discount'              => 10 / 100,
            'is_active'             => 1,
            'foto'                  => $filename,
        ];

        $data::where('id',$id)->update($field);
        Alert::toast('Data berhasil diupdate', 'success');
        return redirect()->route('product');
    }

    public function destroy(product $product, $id)
    {
        $product = product::findOrFail($id);
        $product->delete();

        // Jika data berhasil dihapus, maka kembalikan pesan "Data berhasil dihapus"
        
        return redirect()->route('destroy.deleteData')->with('success', 'product deleted successfully');
    }
}
