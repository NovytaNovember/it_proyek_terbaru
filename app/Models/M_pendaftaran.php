<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Pendaftaran</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('template/satner-master/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('template/satner-master/vendors/linericon/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('template/satner-master/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('template/satner-master/vendors/owl-carousel/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('template/satner-master/css/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('template/satner-master/vendors/nice-select/css/nice-select.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('template/satner-master/css/style.css'); ?>">
</head>

<body>
    <?php $this->load->view('komponen/header'); ?>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <h1>Data Pendaftaran</h1>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabel Data Pendaftaran</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div>
                            <?php if (session()->get('level') == 'admin') : ?>
                                <a href="<?= base_url('pendaftaran/form_tambah_data'); ?>">
                                    <button class="btn btn-primary btn-sm" id="tambahDataButton">
                                        <i class="fas fa-user-plus"></i> Tambah Data Pendaftaran
                                    </button>
                                </a>
                            <?php endif; ?>
                        </div>
                        <table id="example2" class="table table-bordered table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Anak</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Detail</th>
                                    <?php if (session()->get('level') == 'admin') : ?>
                                        <th>Aksi</th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data_pendaftaran as $key) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $key['nama']; ?></td>
                                        <td><?= $key['email']; ?></td>
                                        <td><?= $key['telepon']; ?></td>
                                        <td><?= $key['alamat']; ?></td>
                                        <?php if (session()->get('level') == 'admin') : ?>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="<?= base_url('pendaftaran/detail_edit_data/' . $key['id']); ?>">
                                                    <i class="fas fa-pencil-alt"></i> Edit
                                                </a>
                                                <a href="#" id="btn-hapus" onclick="konfirmasi('Apakah anda yakin menghapus data ini?' ,<?= $key['id'] ?>);" data-href="<?= base_url('pendaftaran/hapus_data?id=') ?>">
                                                    <button type="button" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> Delete</button>
                                                </a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php $this->load->view('komponen/footer'); ?>
    <?php $this->load->view('komponen/script'); ?>
</body>

</html>
