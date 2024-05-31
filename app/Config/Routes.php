<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('beranda', 'Beranda::index');
$routes->get('tenaga_pendidik', 'Tenaga_Pendidik::index');

$routes->get('pendaftaran', 'Pendaftaran::index');
$routes->get('form_pendaftaran', 'Pendaftaran::tambah');
$routes->post('simpan_pendaftaran', 'Pendaftaran::simpan');
$routes->get('form_edit_pendaftaran', 'Pendaftaran::edit');
$routes->post('update_pendaftaran', 'Pendaftaran::update');
$routes->get('detail_pendaftaran', 'Pendaftaran::detail');
$routes->get('hapus_pendaftaran', 'Pendaftaran::hapus');


$routes->get('pengumuman', 'Pengumuman::index');
$routes->get('form_pengumuman', 'Pengumuman::tambah');
$routes->post('simpan_pengumuman', 'Pendaftaran::simpan');
$routes->get('form_edit_pengumuman', 'Pengumuman::edit');
$routes->post('update_pengumuman', 'Pengumuman::update');
$routes->get('detail_hasil_pengumuman', 'Pengumuman::detail_hasil');
$routes->get('hapus_pengumuman', 'Pengumuman::hapus');


$routes->get('pendaftaran_freeuser', 'Pendaftaran_freeuser::index');
$routes->get('form_pendaftaran_freeuser', 'Pendaftaran_freeuser::tambah');
$routes->get('pengumuman_freeuser', 'Pengumuman_freeuser::index');




$routes->get('kegiatan', 'Kegiatan::index');
$routes->get('form_edit_kegiatan', 'Kegiatan::edit');
$routes->get('form_tambah_kegiatan', 'Kegiatan::tambah');
$routes->get('form_hapus_kegiatan', 'Kegiatan::hapus');

$routes->get('profil', 'Profil::index');
$routes->get('visi_misi', 'Profil::lihat_visi');
$routes->get('struktur', 'Profil::lihat_struktur');