<?php

namespace App\Controllers;

class Pendaftaran_freeuser extends BaseController
{
    public function index()
    {
        return view('free_user/pendaftaran/pendaftaran.php');
    }
    
    public function tambah()
    {
        return view('free_user/pendaftaran/form_pendaftaran.php');

    }
}
