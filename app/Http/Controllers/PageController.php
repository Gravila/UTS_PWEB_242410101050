<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        if ($request->isMethod('post')) {
            $username = $request->input('username');

            session(['username' => $username]);
        }

        $username = session('username');

        return view('dashboard', [
            'username' => $username
        ]);
    }

    public function profile()
    {
        $username = session('username');

        return view('profile', [
            'username' => $username
        ]);
    }

    public function pengelolaan()
    {
        $members = [
            ['nama' => 'Budi', 'paket' => 'Basic','durasi'=>'1 Bulan', 'dimulai' => '01/10/2026', 'diakhiri' =>'31/10/2026'],
            ['nama' => 'Siti', 'paket' => 'Premium','durasi'=>'3 Bulan', 'dimulai'=>'04/03/2026', 'diakhiri' =>'03/06/2026'],
            ['nama' => 'Aldin', 'paket' => 'VIP', 'durasi'=>'1 bulan', 'dimulai'=>'17/05/2026', 'diakhiri'=>'16/06/2026'],
            ['nama' => 'Aldin', 'paket' => 'Premium', 'durasi'=>'1 Tahun', 'dimulai'=>'01/01/2026', 'diakhiri'=>'31/12/2026'],
        ];

        return view('pengelolaan', compact('members'));
    }
}