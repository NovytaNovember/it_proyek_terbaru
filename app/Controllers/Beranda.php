<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function index(): string
    {
        // return view('admin/beranda/beranda');
        // return view('kepala_sekolah/beranda/beranda');
        return view('free_user/beranda/beranda');
    }

    public function profil(): string
    {
        return view('free_user/profil/profil');
    }
}