<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
            background-color: #1c2b4b;
            border: 1px solid #1a2037;
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
            color: #bbb;
        }

        .message-content {
            padding: 10px 0;
            color: #d3d3d3;
            line-height: 1.5;
        }

        .message-content p {
            font-size: 1em;
            margin-top: 10px;
        }

        .delete-button {
            background-color: red;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: darkred;
        }

        /* Kalender */
        .calendar-container {
            text-align: center;
            margin-top: 20px;
        }

        .calendar {
            display: inline-block;
            font-size: 1em;
            margin: 0 10px;
        }

        /* Responsive */
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
        <div class="message-card" id="message-{{ $message->id }}">
            <div class="message-header">
                <h3>{{ $message->name }}</h3>
                <span>{{ $message->email }}</span>
            </div>
            <div class="message-content">
                <p><strong>Pesan:</strong></p>
                <p>{{ $message->message }}</p>
            </div>
            <!-- Tombol Hapus Pesan -->
            <button class="delete-button" onclick="deleteMessage({{ $message->id }})">Hapus Pesan</button>
        </div>
        @endforeach

        <!-- Fitur Hapus Berdasarkan Waktu -->
<div class="delete-options">
    <h3>Hapus Pesan Berdasarkan Waktu</h3>
    <select id="time-period">
        <option value="this_month">Bulan Ini</option>
        <option value="this_week">Minggu Ini</option>
        <option value="last_24_hours">24 Jam Terakhir</option>
        <option value="one_message">1 Pesan Saja</option>
    </select>
    <button onclick="deleteMessagesByTime()">Hapus</button>
</div>
</div>

</body>
<script>
    document.querySelector('meta[name="csrf-token"]').getAttribute('content')

    function deleteMessagesByTime() {
        const timePeriod = document.getElementById('time-period').value;

        if (confirm("Apakah Anda yakin ingin menghapus pesan berdasarkan periode waktu ini?")) {
            fetch(`/delete-massage`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ 'time-period': timePeriod }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Pesan berhasil dihapus berdasarkan periode waktu.');
                    location.reload(); // Untuk memuat ulang halaman setelah penghapusan
                } else {
                    alert('Terjadi kesalahan saat menghapus pesan.');
                }
            })
            .catch(error => {
                console.error('Terjadi kesalahan:', error);
                alert('Terjadi kesalahan saat menghapus pesan.');
            });
        }
    }


    
        function deleteMessage(messageId) {
            if (confirm("Apakah Anda yakin ingin menghapus pesan ini?")) {
                // Kirim request AJAX untuk menghapus pesan
                fetch(`/delete-message/${messageId}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}', // Pastikan token CSRF disertakan
                    },
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Hapus pesan di frontend
                        const messageElement = document.getElementById('message-' + messageId);
                        if (messageElement) {
                            messageElement.remove();
                        }
                        alert('Pesan berhasil dihapus.');
                    } else {
                        alert('Terjadi kesalahan saat menghapus pesan.');
                    }
                })
                .catch(error => {
                    console.error('Terjadi kesalahan:', error);
                    alert('Terjadi kesalahan saat menghapus pesan.');
                });
            }
        }
    
</script>

</html>
