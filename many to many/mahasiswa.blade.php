<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mahasiswa & Seminar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body> 
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center">Daftar Mahasiswa yang mengikuti Seminar</h3>
                    <h5 class="text-center my-4">  Eloquent Many to Many Relationship</h5> 
                   <table class="table table-bordered table-hover table-sm">
                    <thead>
                        <tr>
                            <th>Nama Mahasiswa</th>
                            <th>Nama Seminar</th>
                            <th width="1%">Jumlah</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($mahasiswa as $m)
                        <tr>
                            <td>{{ $m->nama }}</td>
                            <td>
                                <ul>@foreach($m->seminar as $s)
                                    <li>{{ $s->nama }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="text-center">{{ $m->seminar->count() }}</td>
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