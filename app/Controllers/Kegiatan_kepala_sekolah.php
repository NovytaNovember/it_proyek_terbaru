<?php

namespace App\Controllers;

class Kegiatan_kepala_sekolah extends BaseController
{
    public function index()
    {
        return view('kepala_sekolah/kegiatan/kegiatan');
        
    }
    
    public function tambah()
    {
        return view('kepala_sekolah/kegiatan/form_tambah_kegiatan');
        
    }

    public function edit()
    {
        return view('kepala_sekolah/kegiatan/form_edit_kegiatan');
        
    }

    public function hapus()
    {
        return view('kepala_sekolah/kegiatan/form_hapus_kegiatan');
        
    }

}

?>