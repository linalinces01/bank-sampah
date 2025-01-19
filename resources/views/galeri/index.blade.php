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

        <!-- Tombol Create di kanan atas -->
        <a href="{{ route('galeri.create') }}" class="btn-create">Tambah Galeri</a>
        
        <!-- Tabel Galeri -->
        <table>
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($galeri as $gallery)
                    <tr>
                        <td><img src="{{ asset($gallery->gambar) }}" alt="Gambar" class="image"></td>
                        <td>{{ $gallery->keterangan }}</td>
                        <td>{{ $gallery->tanggal}}</td>
                        <td>
                            <a href="{{ route('galeri.edit', $gallery->id) }}" class="btn-edit">Edit</a>
                            <form action="{{ route('galeri.destroy', $gallery->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</body>
</html>