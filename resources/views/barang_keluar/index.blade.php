<!DOCTYPE html>
<html>
<head>
    <title>📦 Barang Keluar - V-Beauty Inventory</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:#fdf7f7;">

<nav class="navbar navbar-expand-lg navbar-dark"
     style="background: linear-gradient(90deg, #e8aeb7, #d8b4a0);">

    <div class="container">

        <span class="navbar-brand fw-bold">
            💄 V-Beauty Inventory
        </span>

    </div>

</nav>

<div class="container mt-4">

    <div class="row mb-4">

        <div class="col-md-4">

            <div class="card text-white shadow border-0"
                 style="background: linear-gradient(135deg, #f7b2bd, #fcd5ce);">

                <div class="card-body text-center">

                    <h5>Total Transaksi</h5>

                    <h2>{{ $transaksi->count() }}</h2>

                </div>

            </div>

        </div>

        <div class="col-md-8">

            <div class="card shadow border-0">

                <div class="card-body">

                    <h5>Barang Keluar Dashboard</h5>

                    <p class="mb-0">
                        Kelola transaksi barang keluar produk kosmetik.
                    </p>

                </div>

            </div>

        </div>

    </div>

    <div class="card shadow border-0">

        <div class="card-header text-white"
             style="background: linear-gradient(90deg, #e8aeb7, #d8b4a0);">

            <h4 class="mb-0">📦 Data Barang Keluar</h4>

        </div>

        <div class="card-body">

            <div class="mb-3">

                <a href="/barang-keluar/create" class="btn btn-success">
                    + Tambah Barang Keluar
                </a>

                <a href="/" class="btn btn-secondary ms-2">
                    ← Kembali ke Dashboard
                </a>

            </div>

            <table class="table table-hover align-middle">

                <thead class="table-light">

                    <tr>
                        <th>ID</th>
                        <th>Nama Produk</th>
                        <th>Jumlah Keluar</th>
                        <th>Tanggal Keluar</th>
                    </tr>

                </thead>

                <tbody>

                @forelse($transaksi as $item)

                    <tr>

                       {{ $loop->iteration }}

                        <td>{{ $item->barang->nama_barang }}</td>

                        <td>

                            <span class="badge bg-danger">
                                {{ $item->jumlah_keluar }}
                            </span>

                        </td>

                        <td>{{ $item->tanggal_keluar }}</td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="4" class="text-center">
                            Belum ada transaksi barang keluar
                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

<footer class="text-center mt-4 py-3 text-muted border-top bg-white">
    ✨ © 2026 V-Beauty Inventory | Developed by V 💄
</footer>

</body>
</html>