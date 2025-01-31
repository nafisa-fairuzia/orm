<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container text-center mt-3 bg-white">
        <h1>Daftar Buku di Perpustakaan</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ul class="list-group">
                    @forelse ($buku as $item)
                    <li class="list-group-item">{{ $item }}</li>
                    @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data buku..</div>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
