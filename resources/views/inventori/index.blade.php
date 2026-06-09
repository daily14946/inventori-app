<!DOCTYPE html>
<html>
<head>
    <title>Data Inventori</title>
</head>
<body>

    <h1>Data Inventori</h1>

    <a href="/create">Tambah Barang</a>
    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>No Barang</th>
            <th>Jumlah</th>
            <th>Jenis</th>
            <th>Tanggal</th>
        </tr>

        @foreach ($barang as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama_barang }}</td>
            <td>{{ $item->no_barang }}</td>
            <td>{{ $item->jumlah_barang }}</td>
            <td>{{ $item->jenis_barang }}</td>
            <td>{{ $item->tanggal_masuk_keluar }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>