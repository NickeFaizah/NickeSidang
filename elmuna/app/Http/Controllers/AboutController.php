<?php

namespace App\Http\Controllers;

use App\Models\tblCart;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $countKeranjang = tblCart::where(['idUser' => 'guest123', 'status' => 0])->count();
        return view('pelanggan.page.about' ,[
            'title'    => 'about',
            'count'     => $countKeranjang,
        ]);
    }
}
