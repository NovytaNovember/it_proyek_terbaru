<?php

namespace App\Controllers;

use App\Models\M_pengumuman;

class Pengumuman extends BaseController
{
    protected $pengumuman;
   

    public function __construct()
    {
        $this->pengumuman = new M_pengumuman();        
    }

    public function index()
    {
        $data = [
            'pengumuman' => $this->pengumuman->getPengumuman(),
            'judul' => 'Data Pengumuman'
        ];

        return view('admin/pengumuman/pengumuman.php',$data);

    }

    public function tambah()
    {
        $data = [
            'pengumuman' => $this->pengumuman->getPengumuman(),
            'judul' => 'Data Pengumuman'
        ];

        return view('admin/pengumuman/form_pengumuman.php',$data);

    }

    public function simpan()
    {
        $data = [
            'pengumuman' => $this->pengumuman->getPengumuman(),
            'judul' => 'Data Pengumuman'
        ];

        return view('admin/pengumuman/pengumuman.php', $data);

    }

    public function edit()
    {
        $data = [
            'pengumuman' => $this->pengumuman->getPengumuman(),
            'judul' => 'Data Pengumuman'
        ];
        return view('admin/pengumuman/form_edit_pengumuman.php',$data);

    }

    public function update()
    {
        $data = [
            'pengumuman' => $this->pengumuman->getPengumuman(),
            'judul' => 'Data Pengumuman'
        ];
        
        return view('admin/pengumuman/pengumuman.php',$data);

    }

    public function detail_hasil()
    {
        $data = [
            'pengumuman' => $this->pengumuman->getPengumuman(),
            'judul' => 'Data Pengumuman'
        ];
        return view('admin/pengumuman/detail_hasil_pengumuman.php',$data);

    }

    public function hapus()
    {
        $data = [
            'pengumuman' => $this->pengumuman->getPengumuman(),
            'judul' => 'Data Pengumuman'
        ];
        return view('admin/pengumuman/pengumuman.php',$data);

    }
    

    
}