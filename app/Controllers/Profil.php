<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function index()
    {
        return view('free_user/profil/profil_sejarah');
    }

    public function lihat_visi()
    {
        return view('free_user/profil/profil_visimisi');
    }
    
    public function lihat_struktur()
    {
        return view('free_user/profil/profil_struktur');
    }

    public function tambah()
    {
        return view('admin/profil/form_tambah_profil');
        
    }

    public function edit()
    {
        return view('admin/profil/form_edit_profil');
        
    }
}

?>