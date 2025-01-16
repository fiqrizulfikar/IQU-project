<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pertanyaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #002142; /* Sama seperti halaman utama */
        }

        .navbar-brand {
            font-weight: bold;
            color: #ffffff !important;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
        }

        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link:hover {
            color: #ffdd57;
        }

        .container {
            max-width: 700px;
        }

        .card {
            margin-top: 40px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 8px;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            text-align: center;
            font-size: 1.5rem;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Navbar yang Konsisten -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Halaman Utama</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/questions/">Admin Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/questions/create">Tambah Pertanyaan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Kontainer Form Tambah Pertanyaan -->
    <div class="container">
        <div class="card">
            <div class="card-header">
                Tambah Pertanyaan Baru
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Form Tambah Pertanyaan -->
                <form action="{{ route('admin.questions.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="quiz" class="form-label">Pertanyaan</label>
                        <textarea class="form-control" name="quiz" id="quiz" rows="3" required></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="jawaban_a" class="form-label">Jawaban A</label>
                            <input type="text" class="form-control" name="jawaban_a" id="jawaban_a" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="jawaban_b" class="form-label">Jawaban B</label>
                            <input type="text" class="form-control" name="jawaban_b" id="jawaban_b" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="jawaban_c" class="form-label">Jawaban C</label>
                            <input type="text" class="form-control" name="jawaban_c" id="jawaban_c" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="jawaban_d" class="form-label">Jawaban D</label>
                            <input type="text" class="form-control" name="jawaban_d" id="jawaban_d" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="jawaban_benar" class="form-label">Jawaban Benar</label>
                        <select name="jawaban_benar" id="jawaban_benar" class="form-select" required>
                            <option value="">-- Pilih Jawaban Benar --</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="form-label">Pilih Kategori</label>
                        <select name="category_id" id="category_id" class="form-select" required>
                            <option value="">-- Pilih Kategori --</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Pertanyaan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
