<?php

namespace App\Controllers;

class Profil_kepala_sekolah extends BaseController
{
    public function lihat_sejarah()
    {
        return view('kepala_sekolah/profil/profil_sejarah_kepsek');
    }

    public function lihat_visi()
    {
        return view('kepala_sekolah/profil/profil_visimisi_kepsek');
    }

    public function lihat_struktur()
    {
        return view('kepala_sekolah/profil/profil_struktur_kepsek');
    }
    
}

?>