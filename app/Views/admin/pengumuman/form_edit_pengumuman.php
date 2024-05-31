<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Pekerjaan</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/template/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/template/AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <style>
        body {
            background-color: #f4f6f9;
        }
        .content-wrapper {
            padding: 20px;
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
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: center;
            border-top: 1px solid #dee2e6;
            position: absolute;
            bottom: 0;
            width: 100%;
            color: #6c757d;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Tambah Data Pekerjaan</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" role="button">
                        <i class="fas fa-user"></i>
                        <span>Nama Pengguna</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="form-header">
                Form Tambah Data
            </div>
            <div class="form-container">
                <form>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukan Nama Pekerjaan" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <p>Copyright Kelompok 2 - Politala. All rights reserved</p>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="/template/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/template/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/template/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>

</html>
