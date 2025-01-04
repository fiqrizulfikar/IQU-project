<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Kontak</title>
    <style>
        /* Animasi latar belakang dengan efek gravitasi */
        @keyframes gradientBackground {
            0% {
                background: #1a237e;
            }
            50% {
                background: #0d47a1;
            }
            100% {
                background: #1565c0;
            }
        }

        /* Style untuk body */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #1a237e;
            animation: gradientBackground 10s ease infinite;
            color: white;
            line-height: 1.6;
        }

        /* Email Container */
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        .email-header {
            background-color: #4caf50;
            color: white;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }

        /* Body */
        .email-body {
            padding: 30px;
            background: linear-gradient(135deg, #f0f4c3, #c8e6c9);
            border-radius: 10px;
            color: #333;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
            margin-top: 20px;
        }

        .email-body p {
            margin-bottom: 15px;
            font-size: 16px;
            line-height: 1.8;
        }

        .email-body strong {
            color: #0d47a1;
            font-weight: bold;
        }

        /* Footer */
        .email-footer {
            text-align: center;
            font-size: 14px;
            color: #888;
            margin-top: 20px;
        }

        .email-footer p {
            margin: 10px 0;
        }

        /* Hover effect untuk link */
        .email-footer a {
            color: #0d47a1;
            text-decoration: none;
            font-weight: bold;
        }

        .email-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="email-container">
        <div class="email-header">
            <h2>Pesan Kontak Baru</h2>
        </div>
        
        <div class="email-body">
            <!-- Misalnya ini menggunakan Blade Template Laravel untuk menampilkan pesan -->
            @foreach ($message as $message)
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
