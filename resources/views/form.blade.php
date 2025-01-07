
<form id="dataForm" method="POST" action="{{ route('tabungan.store') }}">
    @csrf
    @method('POST')

    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required>

    <label for="address">Alamat:</label>
    <input type="text" id="address" name="alamat" required>

    <label for="phone">Nomor Telepon:</label>
    <input type="text" id="phone" name="nomor_telepon" required>

    <label for="wasteType">Jenis Sampah:</label>
    <select id="wasteType" name="jenis_sampah" required>
        <option value="organik">Organik</option>
        <option value="anorganik">Anorganik</option>
        <option value="sampah_campuran">Sampah Campuran</option>
    </select>

    <label for="weight">Berat Sampah (kg):</label>
    <input type="number" id="weight" name="berat_sampah" required>

    <label for="date">Tanggal:</label>
    <input type="date" id="date" name="tanggal" required>

    <button type="submit">Kirim</button>
</form>
