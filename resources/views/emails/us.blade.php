<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>messege</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #f9f9f9;
            border: 1px solid #ddd;
        }
        .email-header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .email-body {
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
        }
        .email-footer {
            text-align: center;
            font-size: 12px;
            color: #888;
            margin-top: 20px;
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
        </div>
    </div>

</body>
</html>
