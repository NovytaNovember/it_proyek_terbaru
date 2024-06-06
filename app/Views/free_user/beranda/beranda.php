<!DOCTYPE html>
<html lang="en">
<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
}

.container {
    display: flex;
}

.sidebar {
    width: 250px;
    background-color: #2c3e50;
    color: white;
    padding: 20px;
    box-sizing: border-box;
    height: 100vh;
    position: fixed;
}

.sidebar h2 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 24px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    margin-bottom: 20px;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    display: block;
    padding: 10px;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.sidebar ul li a:hover {
    background-color: #1abc9c;
}

.main-content {
    margin-left: 270px; /* adjust based on sidebar width */
    padding: 40px;
    flex-grow: 1;
}

header h2 {
    margin: 0 0 20px 0;
    font-size: 28px;
    color: #34495e;
}

.search-section {
    display: flex;
    margin-bottom: 20px;
}

.search-section input[type="text"] {
    flex-grow: 1;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 10px;
}

.search-section button {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: #3498db;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.search-section button:hover {
    background-color: #2980b9;
}

.table-section {
    overflow-x: auto;
    background-color: white;
    padding: 20px;
    border-radius: 4px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.table-section table {
    width: 100%;
    border-collapse: collapse;
}

.table-section th, .table-section td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
    color: #34495e;
}

.table-section th {
    background-color: #f2f2f2;
    font-weight: bold;
}

</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPP - Data Perizinan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <nav class="sidebar">
            <h2>SIPP</h2>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Data Pelanggaran</a></li>
                <li><a href="#">Perizinan Usaha</a></li>
                <li><a href="#">Laporan</a></li>
                <li><a href="#">Daftar Petugas</a></li>
            </ul>
        </nav>
        <div class="main-content">
            <header>
                <h2>Data Perizinan</h2>
            </header>
            <section class="search-section">
                <input type="text" placeholder="Search">
                <button>Search</button>
            </section>
            <section class="table-section">
                <table>
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Nama Kuasa</th>
                            <th>Jabatan</th>
                            <th>Jenis Usaha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Laskar Bintang</td>
                            <td>Desy</td>
                            <td>Staff</td>
                            <td>Material</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</body>
</html>
