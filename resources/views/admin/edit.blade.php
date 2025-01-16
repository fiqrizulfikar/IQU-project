<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pertanyaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #343a40; /* Warna konsisten dengan halaman utama */
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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/questions">Admin Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/questions/edit">Edit Pertanyaan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Form Edit Pertanyaan -->
    <div class="container">
        <div class="card">
            <div class="card-header">
                Edit Pertanyaan
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('admin.update', ['table' => $table, 'id' => $question->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                
                    <div class="mb-3">
                        <label for="quiz" class="form-label">Nama Quiz</label>
                        <input type="text" name="quiz" id="quiz" class="form-control" value="{{ $question->quiz }}" required>
                    </div>
                
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="jawaban_a" class="form-label">Jawaban A</label>
                            <input type="text" name="jawaban_a" id="jawaban_a" class="form-control" value="{{ $question->jawaban_a }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="jawaban_b" class="form-label">Jawaban B</label>
                            <input type="text" name="jawaban_b" id="jawaban_b" class="form-control" value="{{ $question->jawaban_b }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="jawaban_c" class="form-label">Jawaban C</label>
                            <input type="text" name="jawaban_c" id="jawaban_c" class="form-control" value="{{ $question->jawaban_c }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="jawaban_d" class="form-label">Jawaban D</label>
                            <input type="text" name="jawaban_d" id="jawaban_d" class="form-control" value="{{ $question->jawaban_d }}" required>
                        </div>
                    </div>
                
                    <div class="mb-3">
                        <label for="jawaban_benar" class="form-label">Jawaban Benar</label>
                        <select name="jawaban_benar" id="jawaban_benar" class="form-select" required>
                            <option value="A" {{ $question->jawaban_benar == 'A' ? 'selected' : '' }}>A</option>
                            <option value="B" {{ $question->jawaban_benar == 'B' ? 'selected' : '' }}>B</option>
                            <option value="C" {{ $question->jawaban_benar == 'C' ? 'selected' : '' }}>C</option>
                            <option value="D" {{ $question->jawaban_benar == 'D' ? 'selected' : '' }}>D</option>
                        </select>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
