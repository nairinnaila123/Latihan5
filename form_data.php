<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    <h1>Form Tambah Data Mahasiswa</h1>
    <form action="tambah_data.php" method="get">
        <label for="nama">Nama</label>
        <input type="text" name="nama" /><br />
        
        <label for="alamat">Alamat</label>
        <textarea name="alamat"></textarea><br />
        
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" name="tmpt_lahir" /><br />
        
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" /><br />
        
        <button>Simpan</button>
    </form>
</body>
</html>
