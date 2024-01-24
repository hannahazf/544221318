<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Post - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <hr>
                        <p>{{ $post->nisn }}</p>
                        <p>{{ $post->skhun }}</p>
                        <p>{{ $post->no_ijazah }}</p>
                        <p>{{ $post->nama_lengkap }}</p>
                        <p>{{ $post->tanggal_lahir }}</p>
                        <p>{{ $post->agama }}</p>
                        <p>{{ $post->alamat }}</p>
                        <p>{{ $post->jenis_kelamin }}</p>
                        <p>{{ $post->no_telp }}</p>
                        <p>{{ $post->email }}</p>
                        <p>{{ $post->jurusan }}</p>
                        <p>{{ $post->nama_ayah }}</p>
                        <p>{{ $post->nama_ibu }}</p>
                        <p>{{ $post->nama_wali }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
