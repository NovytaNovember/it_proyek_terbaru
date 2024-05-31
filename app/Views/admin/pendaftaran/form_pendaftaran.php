<?= $this->extend('template/template_admin'); ?>

  <?= $this->section('konten'); ?>

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
                        <form action="simpan_pendaftaran" method="post">
                                <div class="form-group">
                                    <label for="nama">Nama Calon Peserta Didik: (sesuaikan akta lahir)</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Calon Peserta Didik" required>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir: (sesuaikan akta lahir)</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir: (sesuaikan akta lahir)</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="2003-11-22" required>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Pilih Jenis Kelamin" required>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan" selected>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Calon Peserta Didik: (Alamat lengkap sesuai domisili tempat tinggal)</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Lengkap" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_ayah">Nama Ayah:</label>
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Masukkan Nama Ayah" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_ibu">Nama Ibu:</label>
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Masukkan Nama Ibu" required>
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan_ayah">Pekerjaan Ayah:</label>
                                    <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah" required>
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan_ibu">Pekerjaan Ibu:</label>
                                    <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu" required>
                                </div>
                                <div class="form-group">
                                    <label for="telepon_ayah">No Telepon Ayah:</label>
                                    <input type="tel" class="form-control" id="telepon_ayah" name="telepon_ayah" placeholder="Masukkan Nomor Telepon Ayah" required>
                                </div>
                                <div class="form-group">
                                    <label for="telepon_ibu">No Telepon Ibu:</label>
                                    <input type="tel" class="form-control" id="telepon_ibu" name="telepon_ibu" placeholder="Masukkan Nomor Telepon Ibu" required>
                                </div>
                                <button type="submit" class="btn btn-primary" style="float: right;">Simpan</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.content-wrapper -->

            <?= $this->endSection(); ?>          