<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('asset/edit-profil.css') }}">
</head>
<body style="background-image: url({{ asset('asset/bumi.jpeg') }}); background-repeat: repeat; background-size: 33.33% 33.33%; width: 100%; height: 100vh;">
    <div class="profile-container">
        <div class="profile-header">
            <div class="profile-image">
                <img src="{{ asset('asset/bumi.jpeg') }}" alt="Profile Picture">
            </div>
            <div class="profile-info">
                <a href="edit-profil.html">
                <button class="fullname" onclick="toggleEditProfile()">BANKSAMPAH</button>
                </a>
            </div>
        </div>

        <div class="profile-menu">
            <a href="{{ route('penimbangan.index') }}">Hasil Penimbangan</a>
            <a href="{{ route('tabungan.index') }}">Lihat Tabungan</a>
            <form action="{{ route('logout') }}" class="form" type="hidden" method="POST" id="logout-button">
                @csrf
                <button type="submit" hidden>Logout</button>
            </form>
        </div>
    </div>
</body>
</html>
