<?php

namespace App\Controllers;

class Kegiatan extends BaseController
{
    
    public function index()
    {
        

        return view('admin/kegiatan/kegiatan');
    }
    
    public function tambah()
    {
        return view('admin/kegiatan/form_tambah_kegiatan');
    }

    public function edit()
    {
        return view('admin/kegiatan/form_edit_kegiatan');
    }

    public function hapus()
    {
        return view('admin/kegiatan/form_hapus_kegiatan');
    }

}

?>