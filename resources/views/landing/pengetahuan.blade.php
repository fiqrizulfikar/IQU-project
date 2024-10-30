<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbanyak Pengetahuanmu!</title>
     <link href="assets/css/main.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('assets/img/UMUM.png');
            background-size: cover;
            background-position: center;
            color: white;
        }

        .container {
            text-align: center;
            padding: 100px 20px;
        }

        h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 40px;
        }

        .options {
            display: flex;
            justify-content: center;
            gap: 40px;
        }

        .option {
            background-color: rgba(0, 0, 50, 0.8); /* Warna biru transparan */
            padding: 20px;
            border-radius: 10px;
            width: 150px;
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .option img {
            width: 80px;
            height: 80px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>AYO PERBANYAK PENGETAHUANMU!</h1>
        <h2>MANA YANG INGIN KAMU KUASAI:</h2>
        <div class="options">
            <div class="option">
                <img src="icon-buku.png" alt="Buku"> 
                <a href="#" class="read-more"><span>Mari Belajar</span><i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="option">
                <img src="icon-globe.png" alt="Globe"> <!-- Ganti dengan ikon yang sesuai -->
            </div>
            <div class="option">
                <img src="icon-chip.png" alt="Chip"> <!-- Ganti dengan ikon yang sesuai -->
            </div>
            <div class="option">
                <img src="icon-graph.png" alt="Grafik"> <!-- Ganti dengan ikon yang sesuai -->
            </div>
        </div>
    </div>

</body>
</html>
