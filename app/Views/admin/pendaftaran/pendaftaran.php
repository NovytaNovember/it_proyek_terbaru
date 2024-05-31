<?= $this->extend('template/template_admin'); ?>

<?= $this->section('konten'); ?>

  <!-- Main content -->
  <div class="content-wrapper">
  <div class="content">
      <div class="container-fluid">
          <div class="table-container">
              <a href="form_pendaftaran" class="btn btn-green" onclick="addData()">Tambah</a>
              <div class="search-box">
                  <label for="search">Search: </label>
                  <input type="text" id="search">
              </div>
              <table>
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Calon Peserta Didik</th>
                          <th>Tempat Lahir</th>
                          <th>Tanggal Lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>Agama</th>
                          <th>Detail</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>Novyta Maharani</td>
                          <td>Tanah Laut</td>
                          <td>22-11-2003</td>
                          <td>Perempuan</td>
                          <td>Islam</td>
                          <td><a href="detail_pendaftaran " class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a></td>
                          <td>
                              <a href="form_edit_pendaftaran" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
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