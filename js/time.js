function tampilkanTanggalWaktu() {
    // Membuat objek Date
    const now = new Date();

    // Format hari, bulan, tahun, jam, menit, detik
    const hari = now.toLocaleString('en-US', { weekday: 'long' });
    const bulan = now.toLocaleString('en-US', { month: 'long' });
    const tanggal = now.getDate();
    const tahun = now.getFullYear();
    let jam = now.getHours();
    let menit = now.getMinutes();
    let detik = now.getSeconds();

    // Menambahkan angka nol di depan jika nilai kurang dari 10
    jam = jam < 10 ? '0' + jam : jam;
    menit = menit < 10 ? '0' + menit : menit;
    detik = detik < 10 ? '0' + detik : detik;

    // Format tanggal dan waktu menjadi "Hari, Tanggal Bulan Tahun Jam:Menit:Detik"
    const tanggalWaktu = hari + ', ' + tanggal + ' ' + bulan + ' ' + tahun + ' ' + jam + ':' + menit + ':' + detik;

    // Menampilkan tanggal dan waktu pada elemen dengan id "tanggalWaktu"
    document.getElementById('tanggalWaktu').textContent = tanggalWaktu;
}

// Memperbarui tanggal dan waktu setiap detik
setInterval(tampilkanTanggalWaktu, 1000);

// Panggil pertama kali untuk langsung menampilkan tanggal dan waktu saat ini
tampilkanTanggalWaktu();