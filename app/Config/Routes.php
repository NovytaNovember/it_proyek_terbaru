<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('beranda', 'Beranda::index');
$routes->get('profil', 'Profil::index');
$routes->get('tenaga_pendidik', 'Tenaga_Pendidik::index');
$routes->get('pendaftaran', 'Pendaftaran::index');
$routes->get('pengumuman', 'Pengumuman::index');
$routes->get('kegiatan', 'Kegiatan::index');
