<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
</head>
<body>

<h1>Tambah Barang</h1>

<form action="/store" method="POST">
    @csrf

    <label>Nama Barang</label><br>
    <input type="text" name="nama_barang"><br><br>

    <label>No Barang</label><br>
    <input type="number" name="no_barang"><br><br>

    <label>Jumlah Barang</label><br>
    <input type="number" name="jumlah_barang"><br><br>

    <label>Jenis Barang</label><br>
    <input type="text" name="jenis_barang"><br><br>

    <label>Tanggal Masuk/Keluar</label><br>
    <input type="date" name="tanggal_masuk_keluar"><br><br>

    <button type="submit">Simpan</button>
</form>

<br>
<a href="/">Kembali</a>

</body>
</html>