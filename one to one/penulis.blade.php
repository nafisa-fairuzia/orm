<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Buku & Penulis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body> 
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center">Data Buku dan Penulis</h3>
                    <h5 class="text-center my-4">  Eloquent One to One Relationship</h5> 
                   <table class="table table-bordered table-hover table-sm">
                    <thead>
                        <tr>
                            <th>Penulis</th>
                            <th>Judul Buku</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penulis as $p)
                        <tr>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->buku->judul_buku }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                   </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>