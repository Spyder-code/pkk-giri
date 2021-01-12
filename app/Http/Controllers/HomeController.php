<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Bum;
use App\Hukum;
use App\Kunjung;
use App\Pertanian;
use App\Produk;
use App\Rkp;
use App\Rpjm;
use App\User;
use App\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'confirmed',
        ]);

        if ($request->password!=null) {
            User::find(1)->update([
                'name' => $request->name,
                'password' => Hash::make($request->password),
            ]);
        }
        User::find(1)->update([
            'name' => $request->name,
        ]);

        return back()->with('success','Profil akun berhasil diubah!');

    }
}
