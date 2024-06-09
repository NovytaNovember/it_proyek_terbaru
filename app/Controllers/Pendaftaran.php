<?php

namespace App\Controllers;

use App\Models\M_pendaftaran;

class Pendaftaran extends BaseController
{
    protected $pendaftaran;
    protected $akun;
    public $M_pendaftaran;

    public function __construct()
    {
        $this->pendaftaran = new M_pendaftaran();
        $this->M_pendaftaran = new \App\Models\M_pendaftaran();
        $this->akun = new MAkun();
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



    public function update($id)
    {
        $data = [
            'id_akun' => $this->request->getPost('id_akun'),
            'status' => $this->request->getPost('status'),
            'tahun' 	 => $this->request->getPost('tahun'),
            'nama_calon_peserta_didik'  => $this->request->getPost('nama_calon_peserta_didik'),
            'tempat_lahir'  => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir'  => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin'  => $this->request->getPost('jenis_kelamin'),
            'alamat'  => $this->request->getPost('alamat'),
            'nama_ayah'  => $this->request->getPost('nama_ayah'),
            'nama_ibu'  => $this->request->getPost('nama_ibu'),
            'pekerjaan_ayah'  => $this->request->getPost('pekerjaan_ayah'),
            'pekerjaan_ibu'  => $this->request->getPost('pekerjaan_ibu'),
            'no_telepon_ayah'  => $this->request->getPost('no_telepon_ayah'),
            'no_telepon_ibu'  => $this->request->getPost('no_telepon_ibu'),
            'agama'  => $this->request->getPost('agama'),
        
        ];

        $this->M_pendaftaran->where('id_pendaftaran', $id)->set($data)->update();
        return redirect()->to(base_url('pendaftaran'))->with('pesan', 'Data Berhasil Diedit !');
        die;
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
