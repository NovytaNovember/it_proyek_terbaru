<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Tambah Pendaftaran</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Formulir Tambah Pendaftaran</h2>
        <form>
            <div class="form-group">
                <label for="nama">Nama Calon Peserta Didik:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="(sesuaikan akta lahir)" required>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="(sesuaikan akta lahir)" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
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
                <label for="alamat">Alamat Calon Peserta Didik:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="(Alamat sesuai domisili tempat tinggal)" required>
            </div>
            <div class="form-group">
                <label for="nama_ayah">Nama Ayah:</label>
                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="[Nama Ayah]" required>
            </div>
            <div class="form-group">
                <label for="nama_ibu">Nama Ibu:</label>
                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="[Nama Ibu]" required>
            </div>
            <div class="form-group">
                <label for="pekerjaan_ayah">Pekerjaan Ayah:</label>
                <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="[Pekerjaan Ayah]" required>
            </div>
            <div class="form-group">
                <label for="pekerjaan_ibu">Pekerjaan Ibu:</label>
                <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="[Pekerjaan Ibu]" required>
            </div>
            <div class="form-group">
                <label for="telepon_ayah">No Telepon Ayah:</label>
                <input type="tel" class="form-control" id="telepon_ayah" name="telepon_ayah" value="[Nomor Telepon Ayah]" required>
            </div>
            <div class="form-group">
                <label for="telepon_ibu">No Telepon Ibu:</label>
                <input type="tel" class="form-control" id="telepon_ibu" name="telepon_ibu" value="[Nomor Telepon Ibu]" required>
            </div>
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
