<?php

namespace App\Controllers;

class Profil_admin extends BaseController
{
    public function lihat_sejarah()
    {
        return view('admin/profil/profil_sejarah_admin');
    }

    public function lihat_visi()
    {
        return view('admin/profil/profil_visimisi_admin');
    }

    public function lihat_struktur()
    {
        return view('admin/profil/profil_struktur_admin');
    }
    
}

?>