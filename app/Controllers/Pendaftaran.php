<?php

namespace App\Controllers;

class Pendaftaran extends BaseController
{
    public function index()
    {
        return view('admin/pendaftaran/form_pendaftaran.php');
        return view('free_user/pendaftaran/form_edit_pendaftaran.php');
    }
    
}
