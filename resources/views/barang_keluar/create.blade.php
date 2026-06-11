<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang Keluar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:#fdf7f7;">

<div class="container mt-4">

    <h2 class="mb-4">📦 Tambah Barang Keluar</h2>

    <form action="/barang-keluar/store" method="POST">

        @csrf

        <div class="mb-3">
            <label class="form-label">Pilih Produk</label>

            <select name="barang_id" class="form-control" required>

                <option value="">-- Pilih Produk --</option>

                @foreach($barang as $item)

                    <option value="{{ $item->id }}">
                        {{ $item->nama_barang }}
                        (Stok: {{ $item->jumlah_barang }})
                    </option>

                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah Keluar</label>

            <input
                type="number"
                name="jumlah_keluar"
                class="form-control"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Keluar</label>

            <input
                type="date"
                name="tanggal_keluar"
                class="form-control"
                required>
        </div>

        <button type="submit" class="btn btn-danger">
            Simpan
        </button>

        <a href="/barang-keluar" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>