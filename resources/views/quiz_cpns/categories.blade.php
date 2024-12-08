
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
    /* Navbar */
    .navbar {
        background-color: #002776;
        color: white;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .navbar h1 {
        font-size: 24px;
        color: white;
        margin: 0;
        display: flex;
        align-items: center;
    }

    .navbar h1 img {
        height: 40px;
        margin-right: 10px;
    }

    /* Navbar Links */
    .navbar ul {
        list-style: none;
        display: flex;
        gap: 20px;
    }

    .navbar ul li {
        position: relative;
    }

    .navbar ul li a {
        color: white;
        text-decoration: none;
        font-size: 16px;
        padding: 8px 12px;
        display: block;
    }

    .navbar ul li a:hover {
        border-bottom: 2px solid #00ccff;
    }

    /* Dropdown */
    .navbar ul li .dropdown {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #0033a0;
        border-radius: 5px;
        min-width: 150px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .navbar ul li .dropdown a {
        padding: 10px 15px;
        color: white;
    }

    .navbar ul li:hover .dropdown {
        display: block;
    }

    /* Responsif Navbar */
    @media (max-width: 768px) {
        .navbar ul {
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
    }
/* Efek Transisi untuk Tombol */
.btn {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    margin: 10px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: transform 0.3s ease, opacity 0.3s ease;
}

.btn:hover {
    transform: scale(1.1);
    opacity: 0.8;
}

/* Efek Fade-in untuk Halaman */
.fade-in {
    animation: fadeIn 1s ease-out;
}

@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

</style>
<head>
    <nav class="navbar">
        <h1>
            <img src="assets/img/logo.png" alt="Logo">
            Tes CPNS
        </h1>
        <ul>
            <li><a href="/">Beranda</a></li>
            <li>
                <a href="/pendidikan">Pendidikan</a>
                
            </li>
            <li>
                <a href="/pengetahuan">Pengetahuan</a>
                
            </li>
            <li>
                <a href="/games">Games</a>
               
            </li>
            <li>
                <a href="/mediasosial">Media Sosial</a>
               
                </div>
            </li>
            <li><a href="/aboutus">About US</a></li>
        </ul>
    </nav>
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
<script>
    // Tambahkan event listener untuk mengaplikasikan efek fade-in saat halaman dimuat
document.addEventListener('DOMContentLoaded', function () {
    const container = document.querySelector('.category-container');
    container.classList.add('fade-in');
});

// Menambahkan efek ketika tombol kategori diklik
const buttons = document.querySelectorAll('.btn');

buttons.forEach(button => {
    button.addEventListener('click', function () {
        // Tambahkan efek klik dengan class aktif
        button.classList.add('clicked');
        
        // Efek sementara setelah klik
        setTimeout(() => {
            button.classList.remove('clicked');
        }, 300);
    });
});

</script>