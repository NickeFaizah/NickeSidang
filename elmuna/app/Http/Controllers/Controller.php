<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\product;
use App\Models\tblCart;
use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function product(Request $request)
    {
        if ($request->has('kategory') && $request->has('type')) {
            $category = $request->input('kategory');
            $type = $request->input('type');
            $data = product::where('kategory', $category)
                ->orWhere('type', $type)->paginate(5);
        } else {
            $data = product::paginate(5);
        }
        // $countKeranjang = tblCart::where(['idUser' => Auth::user()->id, 'status' => 0])->count();
        $id_user = (Auth::user() != null) ? Auth::user()->id : 0;
        $countKeranjang = tblCart::where(['idUser' => $id_user, 'status' => 0])->count();


        return view('pelanggan.page.product', [
            'title'     => 'Product',
            'data'      => $data,
            'count'     => $countKeranjang,
        ]);
    }
    public function transaksi()
    {
        $id_user = (Auth::user() != null) ? Auth::user()->id : 0;
        $db = tblCart::with('product')->where(['idUser' => $id_user, 'status' => 0])->get();
        $countKeranjang = tblCart::where(['idUser' => $id_user, 'status' => 0])->count();

        // dd($db->product->nama_product);die;
        return view('pelanggan.page.transaksi', [
            'title'     => 'Transaksi',
            'count'     => $countKeranjang,
            'data'      => $db
        ]);
    }
    public function contact()
    {
        // $countKeranjang = tblCart::where(['idUser' => 'guest123', 'status' => 0])->count();

        return view('pelanggan.page.contact', [
            'title'     => 'Contact Us',
            // 'count'     => $countKeranjang,
        ]);
    }
    public function admin()
    {
        $dataProduct = product::count();
        $dataStock = product::sum('quantity');
        $dataTransaksi = transaksi::count();
        $dataPenghasilan = transaksi::sum('total_harga');
        return view('admin.page.dashboard' ,[
            'name'     => 'Dashboard',
            'title'    => 'Admin Dashboard',
            'totalProduct'  => $dataProduct,
            'sumStock'      => $dataStock,
            'dataTransaksi' => $dataTransaksi,
            'dataPenghasilan' => $dataPenghasilan,
        ]);
    }
    
    public function userManagement()
    {
        return view('admin.page.user' ,[
            'name'     => 'User Management',
            'title'    => 'Admin user Management',
        ]);
    }
    
    public function report()
    {
        return view('admin.page.report' ,[
            'name'     => 'Report',
            'title'    => 'Admin Report',
        ]);
    }

    public function login()
    {
        return view('admin.page.login' ,[
            'name'     => 'Login',
            'title'    => 'Admin Login',
        ]);
    }
    public function loginProses(Request $request)
    {
        Session::flash('error', $request->email);
        $dataLogin = [
            'email' => $request->email,
            'password'  => $request->password,
        ];

        $user = new User;
        $proses = $user::where('email', $request->email)->first();

        if ($proses->is_admin === 0) {
            Session::flash('error', 'Kamu bukan admin');
            return back();
        } else {
            if (Auth::attempt($dataLogin)) {
                Alert::toast('Kamu berhasil login', 'success');
                $request->session()->regenerate();
                return redirect()->intended('/admin/dashboard');
            } else {
                Alert::toast('Email dan Password salah', 'error');
                return back();
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        Alert::toast('Kamu berhasil Logout', 'success');
        return redirect('admin');
    }
}
