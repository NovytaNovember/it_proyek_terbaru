<?php

namespace App\Controllers;

class Pendaftaran extends BaseController
{
    public function index()
    {
        $data = [
            'sidebar' => 'Pendaftaran',
        ];
        
        return view('admin/pendaftaran/pendaftaran.php',$data);

    }

    public function tambah()
    {
        $data = [
            'sidebar' => 'Pendaftaran',
        ];

        return view('admin/pendaftaran/form_pendaftaran.php',$data);

    }

    public function simpan()
    {
        $data = [
            'sidebar' => 'Pendaftaran',
        ];

        return view('admin/pendaftaran/pendaftaran.php',$data);

    }

    public function edit()
    {
        $data = [
            'sidebar' => 'Pendaftaran',
        ];
        return view('admin/pendaftaran/form_edit_pendaftaran.php',$data);

    }

    public function update()
    {
        $data = [
            'sidebar' => 'Pendaftaran',
        ];
        
        return view('admin/pendaftaran/pendaftaran.php',$data);

    }

    public function detail()
    {
        $data = [
            'sidebar' => 'Pendaftaran',
        ];
        return view('admin/pendaftaran/detail_pendaftaran.php',$data);

    }

    public function hapus()
    {
        $data = [
            'sidebar' => 'Pendaftaran',
        ];

        return view('admin/pendaftaran/pendaftaran.php',$data);

    }
    
  
}
