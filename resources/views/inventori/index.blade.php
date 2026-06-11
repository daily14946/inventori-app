<!DOCTYPE html>

<html>
<head>
    <title>💄 V-Beauty Inventory</title>

```
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
```

</head>
<body style="background-color:#fdf7f7;">

<nav class="navbar navbar-expand-lg navbar-dark"
     style="background: linear-gradient(90deg, #e8aeb7, #d8b4a0);">

```
<div class="container">

    <span class="navbar-brand fw-bold">
        💄 V-Beauty Inventory
    </span>

</div>
```

</nav>

<div class="container mt-4">

```
<div class="row mb-4">

    <div class="col-md-4">

        <div class="card text-white shadow border-0"
             style="background: linear-gradient(135deg, #f7b2bd, #fcd5ce);">

            <div class="card-body text-center">

                <h5>Total Produk</h5>

                <h2>{{ $barang->count() }}</h2>

            </div>

        </div>

    </div>

    <div class="col-md-8">

        <div class="card shadow border-0">

            <div class="card-body">

                <h5>Beauty Inventory Dashboard</h5>

                <p class="mb-0">
                    Kelola stok produk kosmetik dengan mudah dan efisien.
                </p>

            </div>

        </div>

    </div>

</div>

<div class="card shadow border-0">

    <div class="card-header text-white"
         style="background: linear-gradient(90deg, #e8aeb7, #d8b4a0);">

        <h4 class="mb-0">Daftar Produk Kosmetik</h4>

    </div>

    <div class="card-body">

        <div class="d-flex justify-content-between mb-3">

            <div>

                <a href="/create" class="btn btn-success">
                    + Tambah Produk
                </a>

                <a href="/barang-keluar" class="btn btn-danger ms-2">
                    📦 Barang Keluar
                </a>

            </div>

            <form action="/" method="GET" class="d-flex">

                <input
                    type="text"
                    name="cari"
                    class="form-control me-2"
                    placeholder="Cari produk..."
                    value="{{ $cari ?? '' }}"
                >

                <button type="submit" class="btn btn-primary">
                    Cari
                </button>

            </form>

        </div>

        <table class="table table-hover align-middle">

            <thead class="table-light">

                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Kode</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>

            </thead>

            <tbody>

            @forelse($barang as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>
                    
                    <td>{{ $item->nama_barang }}</td>

                    <td>{{ $item->no_barang }}</td>

                    <td>

                        @if($item->jumlah_barang <= 5)

                            <span class="badge bg-danger">
                                {{ $item->jumlah_barang }}
                            </span>

                        @elseif($item->jumlah_barang <= 10)

                            <span class="badge bg-warning text-dark">
                                {{ $item->jumlah_barang }}
                            </span>

                        @else

                            <span class="badge bg-success">
                                {{ $item->jumlah_barang }}
                            </span>

                        @endif

                    </td>

                    <td>

                        <span class="badge bg-secondary">
                            {{ $item->jenis_barang }}
                        </span>

                    </td>

                    <td>{{ $item->tanggal_masuk_keluar }}</td>

                    <td>

                        <a href="/edit/{{ $item->id }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="/delete/{{ $item->id }}"
                              method="POST"
                              class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus produk ini?')">

                                Hapus

                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="7" class="text-center">
                        Produk tidak ditemukan
                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>
```

</div>

<footer class="text-center mt-4 py-3 text-muted border-top bg-white">
    ✨ © 2026 V-Beauty Inventory | Developed by V 💄
</footer>

</body>
</html>
