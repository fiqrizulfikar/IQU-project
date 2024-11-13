<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Responsif dengan Animasi</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Kontainer Kartu */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 20px;
        }

        /* Kartu */
        .card {
            background-color: #f5f5f5;
            border-radius: 15px;
            overflow: hidden;
            width: 250px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
            text-align: center;
        }

        .card h3 {
            margin-bottom: 10px;
            color: #333;
        }

        .card p {
            color: #555;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .card .btn {
            display: inline-block;
            padding: 10px 15px;
            color: white;
            background-color: #007bff;
            border-radius: 10px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .card .btn:hover {
            background-color: #0056b3;
        }

        /* Animasi Zoom Saat Hover */
        .card:hover {
            transform: translateY(-10px);
        }

        /* Tombol Halaman Berikutnya */
        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .next-button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border-radius: 15px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .next-button:hover {
            background-color: #218838;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .card {
                width: 100%;
                max-width: 300px;
            }
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Kartu Responsif dengan Animasi</h1>

    <!-- Kontainer Kartu -->
    <div class="card-container">
        <!-- Kartu 1 -->
        <div class="card">
            <img src="https://cdn1.katadata.co.id/media/images/thumb/2022/10/04/Ilustrasi_ilmu_pengetahuan_alam_IPA-20221004154622.jpeg" alt="IPA">
            <div class="card-content">
                <h3>IPA</h3>
                <p>Pelajaran tentang alam dan isinya, termasuk benda, peristiwa, dan gejala alam.</p>
                <a href="IPAsd" class="btn">QUIZ SKUY</a>
            </div>
        </div>

        <!-- Kartu 2 -->
        <div class="card">
            <img src="https://cdn1.katadata.co.id/media/images/thumb/2022/10/04/Ilustrasi_ilmu_pengetahuan_alam_IPA-20221004154622.jpeg" alt="IPA">
            <div class="card-content">
                <h3>IPS</h3>
                <p>Pelajaran tentang masyarakat dan interaksi manusia dalam lingkungannya.</p>
                <a href="IPSsd" class="btn">QUIZ SKUY</a>
            </div>
        </div>

        <!-- Kartu 3 -->
        <div class="card">
            <img src="https://cdn1.katadata.co.id/media/images/thumb/2022/10/04/Ilustrasi_ilmu_pengetahuan_alam_IPA-20221004154622.jpeg" alt="Matematika">
            <div class="card-content">
                <h3>Matematika</h3>
                <p>Pelajaran tentang angka, perhitungan, dan logika matematika.</p>
                <a href="Mathsd" class="btn">QUIZ SKUY</a>
            </div>
        </div>

        <!-- Kartu 4 -->
        <div class="card">
            <img src="https://cdn1.katadata.co.id/media/images/thumb/2022/10/04/Ilustrasi_ilmu_pengetahuan_alam_IPA-20221004154622.jpeg" alt="Bahasa Indonesia">
            <div class="card-content">
                <h3>Bahasa Indonesia</h3>
                <p>Pelajaran tentang bahasa dan sastra Indonesia.</p>
                <a href="Bahasasd" class="btn">QUIZ SKUY</a>
            </div>
        </div>
    </div>

    <!-- Tombol Halaman Berikutnya -->
    <div class="button-container">
        <a href="nextpage.html" class="next-button">Halaman Berikutnya</a>
    </div>
</body>
</html>
