<!-- resources/views/admin/edit.blade.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pertanyaan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.index') }}">Halaman Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.questions.create') }}">Tambah Pertanyaan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Edit Pertanyaan</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.update', ['table' => $table, 'id' => $question->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="quiz">Nama Quiz</label>
                <input type="text" name="quiz" id="quiz" class="form-control" value="{{ $question->quiz }}">
            </div>
            <div class="form-group">
                <label for="jawaban_a">Jawaban A</label>
                <input type="text" name="jawaban_a" id="jawaban_a" class="form-control" value="{{ $question->jawaban_a }}">
            </div>
            <div class="form-group">
                <label for="jawaban_b">Jawaban B</label>
                <input type="text" name="jawaban_b" id="jawaban_b" class="form-control" value="{{ $question->jawaban_b }}">
            </div>
            <div class="form-group">
                <label for="jawaban_c">Jawaban C</label>
                <input type="text" name="jawaban_c" id="jawaban_c" class="form-control" value="{{ $question->jawaban_c }}">
            </div>
            <div class="form-group">
                <label for="jawaban_d">Jawaban D</label>
                <input type="text" name="jawaban_d" id="jawaban_d" class="form-control" value="{{ $question->jawaban_d }}">
            </div>
            <div class="form-group">
                <label for="jawaban_benar">Jawaban Benar</label>
                <select name="jawaban_benar" id="jawaban_benar" class="form-control">
                    <option value="A" {{ $question->jawaban_benar == 'A' ? 'selected' : '' }}>A</option>
                    <option value="B" {{ $question->jawaban_benar == 'B' ? 'selected' : '' }}>B</option>
                    <option value="C" {{ $question->jawaban_benar == 'C' ? 'selected' : '' }}>C</option>
                    <option value="D" {{ $question->jawaban_benar == 'D' ? 'selected' : '' }}>D</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
