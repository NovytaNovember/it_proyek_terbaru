<?php

namespace App\Controllers;

class Pengumuman extends BaseController
{
    public function index()
    {
        
        return view('admin/pengumuman/pengumuman.php');

    }

    public function tambah()
    {
        $data = [
            'sidebar' => 'Pendaftaran',
        ];

        return view('admin/pengumuman/form_pengumuman.php',$data);

    }

    public function simpan()
    {


        return view('admin/pengumuman/pengumuman.php');

    }

    public function edit()
    {

        return view('admin/pengumuman/form_edit_pengumuman.php');

    }

    public function update()
    {

        
        return view('admin/pengumuman/pengumuman.php');

    }

    public function detail_hasil()
    {
        return view('admin/pengumuman/detail_hasil_pengumuman.php');

    }

    public function hapus()
    {

        return view('admin/pengumuman/pengumuman.php');

    }
    

    
}
