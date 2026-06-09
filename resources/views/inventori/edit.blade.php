<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-warning">
            <h3>Edit Barang Inventori</h3>
        </div>

        <div class="card-body">

            <form action="/update/{{ $barang->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control"
                           value="{{ $barang->nama_barang }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">No Barang</label>
                    <input type="number" name="no_barang" class="form-control"
                           value="{{ $barang->no_barang }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jumlah Barang</label>
                    <input type="number" name="jumlah_barang" class="form-control"
                           value="{{ $barang->jumlah_barang }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Barang</label>
                    <input type="text" name="jenis_barang" class="form-control"
                           value="{{ $barang->jenis_barang }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Masuk/Keluar</label>
                    <input type="date" name="tanggal_masuk_keluar" class="form-control"
                           value="{{ $barang->tanggal_masuk_keluar }}" required>
                </div>

                <button type="submit" class="btn btn-warning">
                    Update
                </button>

                <a href="/" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>
