<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Full-screen Welcome Page */
        #welcome-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #002142;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            color: #ffdd57;
            font-size: 24px;
            font-weight: bold;
        }

        /* Loading Spinner */
        .spinner {
            margin-top: 20px;
            width: 50px;
            height: 50px;
            border: 5px solid rgba(255, 255, 255, 0.3);
            border-top: 5px solid #ffdd57;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        /* Navbar Styling */
        .navbar {
            background-color: #002142;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: bold;
            color: #ffdd57 !important;
        }
        .navbar-nav .nav-link {
            color: #f8f9fa;
            font-size: 16px;
        }
        .navbar-nav .nav-link:hover {
            color: #ffdd57;
        }

        /* Card Styling */
        .card {
            margin-bottom: 20px;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #f8f9fa;
            font-weight: bold;
        }
        .card-body {
            background-color: #ffffff;
        }
        .btn {
            margin: 0 5px;
        }
    </style>
</head>

<body>
    <!-- Welcome Screen -->
    <div id="welcome-screen">
        <div>Selamat Datang di Halaman Admin</div>
        <div class="spinner"></div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-user-cog"></i> Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.index') }}"><i class="fas fa-home"></i> Halaman Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.questions.create') }}"><i class="fas fa-plus"></i> Tambah Pertanyaan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4" id="main-content" style="display: none;">
        <h1 class="text-center mb-4">Daftar Pertanyaan</h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Dropdown Filter -->
        <form method="GET" action="{{ route('admin.index') }}" class="my-4">
            <div class="form-group">
                <label for="table"><i class="fas fa-filter"></i> Pilih Kategori</label>
                <select name="table" id="table" class="form-control" onchange="this.form.submit()">
                    @foreach($categories as $category)
                        <option value="{{ $category->table_name }}" {{ $category->table_name == $table ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </form>

        <!-- List of Questions -->
        @foreach($questions as $question)
            <div class="card">
                <div class="card-header">
                    {{ $question->quiz }}
                </div>
                <div class="card-body">
                    <p><strong>Jawaban A:</strong> {{ $question->jawaban_a }}</p>
                    <p><strong>Jawaban B:</strong> {{ $question->jawaban_b }}</p>
                    <p><strong>Jawaban C:</strong> {{ $question->jawaban_c }}</p>
                    <p><strong>Jawaban D:</strong> {{ $question->jawaban_d }}</p>
                    <p><strong>Jawaban Benar:</strong> {{ $question->jawaban_benar }}</p>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('admin.edit', ['table' => $table, 'id' => $question->id]) }}" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <form action="{{ route('admin.destroy', ['table' => $table, 'id' => $question->id]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Hide welcome screen after 3 seconds
        setTimeout(() => {
            document.getElementById('welcome-screen').style.display = 'none';
            document.getElementById('main-content').style.display = 'block';
        }, 3000);
    </script>
</body>
</html>
