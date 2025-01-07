<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Form Input Data dan Tabel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-container label {
            display: block;
            margin: 10px 0 5px;
            color: #333;
        }
        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container input[type="date"],
        .form-container select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        .form-container button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-container button:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        td {
            background-color: #fafafa;
        }
        .action-buttons {
            display: flex;
            gap: 15px; /* Memberikan jarak antar tombol */
            align-items: center; /* Memastikan tombol sejajar vertikal */
        }

        .btn {
            display: inline-flex;
            align-items: center;
            padding: 8px 15px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn i {
            margin-right: 5px; /* Memberikan sedikit jarak antara ikon dan teks */
        }

        .btn-edit {
            background-color: #007bff;
            color: white;
            border: none;
        }

        .btn-edit:hover {
            background-color: #0056b3;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
            border: none;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        /* Untuk tombol dalam form */
        form button {
            cursor: pointer;
        }

    </style>
</head>
<body>

    <h1>Form Input Data Penimbangan Sampah</h1>

    <div class="form-container">
        <form id="dataForm" method="POST" action="{{ route('penimbangan.store') }}">
            @csrf
            @method('POST')
        
            <label for="wasteType">Jenis Sampah:</label>
            <select id="wasteType" name="jenis_sampah" required>
                <option value="organik">Organik</option>
                <option value="anorganik">Anorganik</option>
                <option value="sampah_campuran">Sampah Campuran</option>
            </select>
        
            <label for="weight">Berat Sampah (kg):</label>
            <input type="number" id="weight" name="berat_sampah" required>
        
            <button type="submit">Kirim</button>
        </form>        
    </div>

    <h2>Data yang Dikirimkan:</h2>

    <table id="dataTable">
        <thead>
            <tr>
                <th>NO</th>
                <th>Jenis Sampah</th>
                <th>Berat Sampah (kg)</th>
                <th>Total Harga</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data akan tampil di sini -->
            @foreach ($penimbangans as $penimbangan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $penimbangan->jenis_sampah }}</td>
                <td>{{ $penimbangan->berat_sampah }}</td>
                <td>Rp {{ number_format($penimbangan->total_harga, 0, ',', '.') }}</td>
                <td>
                    <div class="action-buttons">
                        <a href="{{ route('penimbangan.edit', $penimbangan->id) }}" class="btn btn-edit" title="Edit">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                    
                        <form action="{{ route('penimbangan.destroy', $penimbangan->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')" title="Hapus">
                                <i class="fas fa-trash-alt"></i> Hapus
                            </button>
                        </form>
                    </div>
                </td>
                @endforeach
            </tbody>
        </table> 
    </body>
</html>