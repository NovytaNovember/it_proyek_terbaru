<?php

namespace App\Controllers;

class Pendaftaran extends BaseController
{
    public function index()
    {
        return view('admin/pendaftaran/pendaftaran.php');

    }

    public function tambah()
    {
        return view('admin/pendaftaran/form_pendaftaran.php');

    }

    public function edit()
    {
        return view('admin/pendaftaran/form_edit_pendaftaran.php');

    }

    public function detail()
    {
        return view('admin/pendaftaran/detail_pendaftaran.php');

    }

    public function hapus()
    {

    }
    
  
}
