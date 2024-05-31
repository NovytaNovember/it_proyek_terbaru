<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/template/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/template/AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <style>
        .table-container {
            margin: 20px;
        }
        .table-container table {
            width: 100%;
            border-collapse: collapse;
        }
        .table-container th, .table-container td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .table-container th {
            background-color: #f2f2f2;
            text-align: left;
        }
        .table-container td .btn {
            margin-right: 5px;
        }
        .table-container .search-box {
            float: right;
            margin-bottom: 10px;
        }
        .btn-green {
            background-color: #28a745;
            color: white;
        }
        .btn-green:hover {
            background-color: #218838;
        }
        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .form-table {
            width: 100%;
            border: 1px solid #ddd;
            border-collapse: collapse;
        }
        .form-table th, .form-table td {
            border: 1px solid #ddd;
            padding: 15px;
            vertical-align: top;
        }
        .form-header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            font-size: 18px;
            border-radius: 5px 5px 0 0;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 0 0 5px 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }
        .form-container form {
            flex: 1;
        }
        .form-container form .btn-primary {
            align-self: flex-end;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            margin-right: 10px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">
                        <i class="fas fa-list"></i>
                        <span class="font-weight-bold" style="font-size: 1.2em;">Tambah Data Pendaftaran</span>
                    </a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Info -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-info-circle"></i>
                        <span class="ml-1">Info</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">Info Pengguna</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-key mr-2"></i> Level: Admin
                        </a>
                        <a href="./index2.html" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> Daftar Akun
                        </a>
                        <a href="./index3.html" class="dropdown-item">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="/template/AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/template/AdminLTE-3.2.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="fas fa-home"></i>
                                <p>Beranda</p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="fas fa-user"></i>
                                <p>
                                    Profil
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link active">
                                        <p>Sejarah Sekolah</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index2.html" class="nav-link">
                                        <p>Visi Misi & Tujuan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                    <p>Struktur Organisasi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <p>Tenaga Pendidik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="fas fa-calendar"></i>
                                <p>Kegiatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="form_pendaftaran" class="nav-link">
                                <i class="fas fa-clipboard-list"></i>
                                <p>Pendaftaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="fas fa-bullhorn"></i>
                                <p>Pengumuman</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="table-container">
                        <div class="form-header">
                            Form Tambah Data Pendaftaran
                        </div>
                        <div class="form-container">
                            <form>
                                <div class="form-group">
                                    <label for="nama">Nama Calon Peserta Didik: (sesuaikan akta lahir)</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="Masukkan Nama Calon Peserta Dididik" required>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir: (sesuaikan akta lahir)</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="Masukkan Tempat Lahir" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir: (sesuaikan akta lahir)</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="2003-11-22" required>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan" selected>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Calon Peserta Didik: (Alamat lengkap sesuai domisili tempat tinggal)</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="Masukkan Alamat Lengkap" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_ayah">Nama Ayah:</label>
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="Masukkan Nama Ayah" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_ibu">Nama Ibu:</label>
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="Masukkan Nama Ibu" required>
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan_ayah">Pekerjaan Ayah:</label>
                                    <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="Masukkan Pekerjaan Ayah" required>
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan_ibu">Pekerjaan Ibu:</label>
                                    <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="Masukkan Pekerjaan Ibu" required>
                                </div>
                                <div class="form-group">
                                    <label for="telepon_ayah">No Telepon Ayah:</label>
                                    <input type="tel" class="form-control" id="telepon_ayah" name="telepon_ayah" value="Masukkan Nomor Telepon Ayah" required>
                                </div>
                                <div class="form-group">
                                    <label for="telepon_ibu">No Telepon Ibu:</label>
                                    <input type="tel" class="form-control" id="telepon_ibu" name="telepon_ibu" value="Masukkan Nomor Telepon Ibu" required>
                                </div>
                                <button type="submit" class="btn btn-primary" style="float: right;">Simpan</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.2.0
                </div>
                <strong>Contact</strong> 0822-5004-4551 | tk.kompi623@gmail.com
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
        </div><!-- ./wrapper -->

        <!-- jQuery -->
        <script src="/template/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="/template/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/template/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="/template/AdminLTE-3.2.0/dist/js/demo.js"></script>
    </body>
</html>

