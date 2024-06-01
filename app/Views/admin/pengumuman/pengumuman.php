<?= $this->extend('template/template_admin'); ?>

<?= $this->section('konten'); ?>


  <!-- Main content -->
  <div class="content-wrapper">
  <div class="content">
      <div class="container-fluid">
          <div class="table-container">
              <a href="form_pengumuman" class="btn btn-green" onclick="addData()">Tambah</a>
              <div class="search-box">
                  <label for="search">Search: </label>
                  <input type="text" id="search">
              </div>
              <table>
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Judul Pengumuman</th>
                          <th>Tanggal Pengumuman</th>
                          <th>Deskripsi</th>
                          <th>Detail</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>Hasil Seleksi PPDB Tahun Ajaran 2023-2025</td>
                          <td>1 Juni 2023</td>
                          <td> Berdasarkan laporan akhir hasil seleksi PPDB online di website </td>
                          <td><a href="detail_hasil_pengumuman " class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a></td>
                          <td>
                              <a href="form_edit_pengumuman" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                              <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
                          </td>
                      </tr>
                    
                     
                      <!-- End of additional minimal example rows -->
                  </tbody>
              </table>

          </div>
      </div><!-- /.container-fluid -->
  </div><!-- /.content -->
  </div><!-- /.content-wrapper -->

  <!-- Content End -->

  <?= $this->endSection(); ?>