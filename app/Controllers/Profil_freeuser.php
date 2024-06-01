<?php

namespace App\Controllers;

class Profil_freeuser extends BaseController
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
    
}

?>