<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk dan Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center">Data Produk dan Kategori</h3>
                <h5 class="text-center my-4">Eloquent One to Many Relationship</h5>
                <table class="table table-bordered table-hover table-sm table-fixed">
                    <thead>
                        <tr>
                            <th>Kategori</th>
                            <th>Nama Produk</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategori as $k)
                        <tr>
                            <td>{{ $k->nama_kategori }}</td>
                            <td>
                                @foreach($k->produk as $produk)
                                    {{ $produk->nama_produk }}<br>
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
