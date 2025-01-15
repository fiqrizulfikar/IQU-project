<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Kontak</title>
    <style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    padding: 20px;
    margin: 0;
}

.messages-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h2 {
    text-align: center;
    color: #333;
    font-size: 2em;
    margin-bottom: 30px;
}

.message-card {
    background-color: #1c2b4b; /* Biru dongker gelap */
    border: 1px solid #1a2037; /* Biru lebih gelap untuk border */
    border-radius: 5px;
    margin-bottom: 15px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    padding: 10px 15px;
}

.message-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
}

.message-header {
    color: white;
    padding: 10px 0;
    text-align: center;
    font-size: 1.1em;
}

.message-header span {
    font-size: 0.85em;
    color: #bbb; /* Teks abu-abu muda untuk email */
}

.message-content {
    padding: 10px 0;
    color: #d3d3d3; /* Putih samar */
    line-height: 1.5;
}

.message-content p {
    font-size: 1em;
    margin-top: 10px;
}

@media (max-width: 600px) {
    .messages-container {
        padding: 10px;
    }

    .message-header h3 {
        font-size: 1.2em;
    }

    .message-header span {
        font-size: 0.8em;
    }

    .message-content p {
        font-size: 0.9em;
    }
}

</style>
</head>
<body>
    <div class="messages-container">
        <h2>Pesan iqu project</h2>
        
        @foreach ($message as $message)
        <div class="message-card">
            <div class="message-header">
                <h3>{{ $message->name }}</h3>
                <span>{{ $message->email }}</span>
            </div>
            <div class="message-content">
                <p><strong>Pesan:</strong></p>
                <p>{{ $message->message }}</p>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>
