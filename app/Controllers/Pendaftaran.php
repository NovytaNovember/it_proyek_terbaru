<?php

namespace App\Controllers;

use App\Models\M_pendaftaran;

class Pendaftaran extends BaseController
{
    protected $pendaftaran;
   

    public function __construct()
    {
        $this->pendaftaran = new M_pendaftaran();        
    }

    public function index()
    {
        $data = [
            'pendaftaran' => $this->pendaftaran->getPendaftaran(),
            'judul' => 'Data Pendaftaran'
        ];

        return view('admin/pendaftaran/pendaftaran.php',$data);

    }


    public function tambah()
    {
        $data = [
            'pendaftaran' => $this->pendaftaran->getPendaftaran(),
            'judul' => 'Data Pendaftaran'
        ];

        return view('admin/pendaftaran/form_pendaftaran.php', $data);
    }

    public function simpan()
    {
        $data = [
            'pendaftaran' => $this->pendaftaran->getPendaftaran(),
            'judul' => 'Data Pendaftaran'
        ];

        return view('admin/pendaftaran/pendaftaran.php', $data);
    }

    public function edit()
    {
        $data = [
            'pendaftaran' => $this->pendaftaran->getPendaftaran(),
            'judul' => 'Data Pendaftaran'
        ];

        return view('admin/pendaftaran/form_edit_pendaftaran.php', $data);
    }

    public function update()
    {
        $data = [
            'pendaftaran' => $this->pendaftaran->getPendaftaran(),
            'judul' => 'Data Pendaftaran'
        ];

        return view('admin/pendaftaran/pendaftaran.php', $data);
    }

    public function detail()
    {
        $data = [
            'pendaftaran' => $this->pendaftaran->getPendaftaran(),
            'judul' => 'Data Pendaftaran'
        ];

        return view('admin/pendaftaran/detail_pendaftaran.php', $data);
    }

    public function hapus()
    {
       $data = [
            'pendaftaran' => $this->pendaftaran->getPendaftaran(),
            'judul' => 'Data Pendaftaran'
        ];

        return view('admin/pendaftaran/pendaftaran.php', $data);
    }
}
