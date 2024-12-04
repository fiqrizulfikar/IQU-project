
<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.main-content {
    margin-top: 80px; /* Sesuaikan dengan tinggi navbar */
    padding: 20px;
}

.category-container {
    text-align: center;
    padding: 20px;
}

.category-container h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #2c3e50;
}

.category-container p {
    font-size: 1rem;
    color: #34495e;
    margin-bottom: 30px;
}

.categories {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap; /* Membantu responsivitas */
}

.categories a {
    text-decoration: none;
    padding: 15px 30px;
    border-radius: 8px;
    font-size: 1.2rem;
    font-weight: bold;
    color: #fff;
    transition: background 0.3s ease-in-out;
}

.categories a.btn-primary {
    background-color: #3498db;
}

.categories a.btn-primary:hover {
    background-color: #2980b9;
}

.rules-container {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    margin: 20px auto;
    width: 60%;
    max-width: 800px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.rules-container h3 {
    font-size: 1.5rem;
    color: #e74c3c;
    margin-bottom: 10px;
}

.rules-container ul {
    text-align: left;
    padding-left: 40px;
}

.rules-container ul li {
    font-size: 1rem;
    color: #2c3e50;
    line-height: 1.5;
    margin-bottom: 10px;
}

/* Responsif */
@media (max-width: 768px) {
    .rules-container {
        width: 90%;
    }

    .categories a {
        padding: 10px 20px;
        font-size: 1rem;
    }
}

</style>
<div class="category-container">
    <h2>Pilih Kategori Soal CPNS</h2>
    <p>Silakan pilih kategori soal yang ingin Anda kerjakan. Baca aturan di bawah sebelum memulai!</p>
    
    <div class="categories">
        <a href="{{ route('cpns.tiu') }}" class="btn btn-primary">TIU (Tes Intelegensia Umum)</a>
        <a href="{{ route('cpns.twk') }}" class="btn btn-primary">TWK (Tes Wawasan Kebangsaan)</a>
        <a href="{{ route('cpns.tkp') }}" class="btn btn-primary">TKP (Tes Karakteristik Pribadi)</a>
    </div>

    <div class="rules-container">
        <h3>Aturan Mengerjakan Soal</h3>
        <ul>
            <li>Waktu pengerjaan maksimal adalah <strong>20 menit</strong> per kategori.</li>
            <li>Tidak diperbolehkan meninggalkan halaman selama mengerjakan soal.</li>
            <li>Setiap soal wajib dijawab sebelum melanjutkan ke soal berikutnya.</li>
            <li>Anda dapat melihat hasil jawaban Anda di akhir sesi, termasuk soal yang salah dan pembahasannya.</li>
            <li>Gunakan tombol <strong>"Selesai"</strong> jika Anda telah menyelesaikan semua soal.</li>
        </ul>
    </div>
</div>
