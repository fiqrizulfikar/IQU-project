<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Kontak</title>
    <style>
        /* Animasi latar belakang dengan efek gravitasi */
        @keyframes gradientBackground {
            0% { background: #1a237e; }
            50% { background: #0d47a1; }
            100% { background: #1565c0; }
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #1a237e;
            animation: gradientBackground 10s ease infinite;
            color: white;
            line-height: 1.6;
        }

        .email-container {
            width: 90%;
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .email-header {
            background-color: #4caf50;
            color: white;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }

        .email-body {
            padding: 30px;
            background: linear-gradient(135deg, #f0f4c3, #c8e6c9);
            border-radius: 10px;
            color: #333;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
            margin-top: 20px;
        }

        .email-body p {
            margin-bottom: 15px;
            font-size: 16px;
            line-height: 1.8;
        }

        .email-body strong {
            color: #0d47a1;
        }

        .email-footer {
            text-align: center;
            font-size: 14px;
            color: #888;
            margin-top: 20px;
        }

        .email-footer a {
            color: #0d47a1;
            text-decoration: none;
            font-weight: bold;
        }

        .email-footer a:hover {
            text-decoration: underline;
        }

        /* Media Queries untuk Responsif */
        @media (max-width: 768px) {
            .email-container {
                padding: 15px; /* Mengurangi padding pada perangkat kecil */
                margin-top: 20px; /* Mengurangi jarak atas */
                margin-bottom: 20px; /* Mengurangi jarak bawah */
            }

            .email-header h2 {
                font-size: 24px; /* Ukuran font header lebih kecil */
            }
            
            .email-body p {
                font-size: 14px; /* Ukuran font body lebih kecil */
                line-height: 1.5; /* Mengurangi jarak antar baris */
            }
        }
    </style>
</head>
<body>

    <div class="email-container">
        <div class="email-header">
            <h2>Pesan Kontak Baru</h2>
        </div>
        
        <div class="email-body">
            @foreach ($us as $message)
                <p><strong>Nama:</strong> {{ $message->name }}</p>
                <p><strong>Email:</strong> {{ $message->email }}</p>
                <p><strong>Pesan:</strong></p>
                <p>{{ $message->message }}</p>
            @endforeach
        </div>

        <div class="email-footer">
            <p>Terima kasih telah menghubungi kami!</p>
            <p><a href="#">Kunjungi website kami</a></p>
        </div>
    </div>

</body>
</html>
