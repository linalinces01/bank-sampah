<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Galeri</h1>
        <!-- Galeri -->
        <div class="gallery-grid">
            @foreach($galeri as $gallery)
                <div class="gallery-item">
                    <img src="{{ asset($gallery->gambar) }}" alt="Gambar Galeri">
                    <div class="description">
                        <p>{{ $gallery->keterangan }}</p>
                        <p><strong>{{ $gallery->tanggal}}</strong></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
