<?php

namespace App\Controllers;

class Kegiatan extends BaseController
{
    public function index()
    {
        return view('admin/kegiatan/kegiatan.php');
        return view('admin/kegiatan/form_edit_kegiatan.php');
        return view('admin/kegiatan/form_tambah_kegiatan.php');
        return view('admin/kegiatan/form_hapus_kegiatan.php');
        return view('kepala_sekolah/kegiatan/kegiatan.php');
        return view('kepala_sekolah/kegiatan/form_edit_kegiatan.php');
        return view('kepala_sekolah/kegiatan/form_tambah_kegiatan.php');
        return view('kepala_sekolah/kegiatan/form_hapus_kegiatan.php');
        return view('free_user/kegiatan/kegiatan.php');
    }
    
}