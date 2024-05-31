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
$routes->get('form_edit_pendaftaran', 'Pendaftaran::edit');
$routes->get('detail_pendaftaran', 'Pendaftaran::detail');
$routes->get('hapus_pendaftaran', 'Pendaftaran::hapus');


$routes->get('pendaftaran_free_user', 'Pendaftaran_free_user::index');

$routes->get('pengumuman', 'Pengumuman::index');

$routes->get('kegiatans', 'Kegiatan::index');
$routes->get('form_edit_kegiatan', 'Kegiatan::edit');
$routes->get('form_tambah_kegiatan', 'Kegiatan::tambah');
$routes->get('form_hapus_kegiatan', 'Kegiatan::hapus');

$routes->get('profil', 'Profil::index');
$routes->get('visi_misi', 'Profil::lihat_visi');
$routes->get('struktur', 'Profil::lihat_struktur');