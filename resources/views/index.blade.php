<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar Sampah BLM</title>
    <link rel="stylesheet" href="{{ asset('asset/styles.css') }}">
</head>
<body>
    <nav class="navbar">
        <h1>Pasar Sampah BLM</h1>
        <div class="navbar-links">
            
            @if (Auth::check() && Auth::user()->role == 'admin')
                <a href="{{ route('galeri.index')}}" class="navbar-link">Galeri</a>
            @else
                <a href="{{ route('galeri.tampil') }}" class="navbar-link">Galeri</a>         
            @endif 


            <a href="/menu" class="hamburger">&#9776;</a>
        </div>
    </nav>
    

    <section class="hero">
        <h2>Ubah Sampah Menjadi Kekayaan</h2>
        <p>Mitra Kepercayaan Anda Dalam Pengelolaan Limbah</p>
        <a href="/sampah">
            <button class="cta-button">KATAGORI SAMPAH</button>
        </a>
        
    </section>


        <section class="features">
            <div class="feature-card">
                <h3>Penjemputan Gratis</h3>
                <p>Kami mengumpulkan sampah langsung dari lokasi anda</p>
            </div>
            <div class="feature-card">
                <h3>Harga Terbaik</h3>
                <p>Dapatkan harga yang kompetetif untuk limbah anda</p>
            </div>
            <div class="feature-card">
                <h3>Ramah Lingkungan</h3>
                <p>Pengelolaan limbah 100% berkelanjutan</p>
            </div>
        </section>

        <section class="waste-card">
            <h3>Cara Kerjannya</h3>
            <ol>
                <li>Kumpulkan dan pisahkan sampah anda</li>
                <li>Hubungi kami melalui telepon atau situs web</li>
                <li>Jadwalkan waktu penjemputan</li>
                <li>Dapatkan bayaran langsung atas sampah anda</li>
            </ol>
        </section>

        <section class="waste-card">
            <h3>Informasi Kontak</h3>
            <p>📞 Phone: 081322298703</p>
            <p>📧 Email: banksampah12@gmail.com</p>
            <p>📍 Address: Jl.Laha Aer manis rt 02</p>
        </section>
    </div>

    <footer style="background: #2c3e50; color: white; text-align: center; padding: 20px;">
        <p>&copy; 2024 GreenCycle Waste Market. All rights reserved.</p>
    </footer>
</body>
</html>
