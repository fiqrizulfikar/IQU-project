<head>
    <style>
    /* Styling untuk Navbar */
.navbar {
    background-color: #1c1c1c;
}
.navbar-brand {
    font-weight: bold;
}
.navbar-nav .nav-link {
    color: #f8f9fa;
}
.navbar-nav .nav-link:hover {
    color: #ffdd57;
}

/* Styling untuk Tabel */
.table {
    border: 1px solid #dee2e6;
    margin-top: 20px;
}
.table th, .table td {
    padding: 15px;
    text-align: center;
}

/* Styling untuk Alert */
.alert-success {
    margin-top: 20px;
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
}
</style>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('admin.questions.index') }}">Halaman Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.questions.create') }}">Tambah Pertanyaan</a>
                </li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
                
            </ul>
        </div>
    </div>
</nav>

<!-- Konten Halaman -->
<div class="container">
    <h1>Daftar Pertanyaan</h1>

    <!-- Tampilkan pesan sukses jika ada -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form untuk memilih kategori atau tabel -->
    <form method="GET" action="{{ route('admin.questions.index') }}">
        <div class="form-group">
            <label for="table">Pilih Kategori</label>
            <select name="table" id="table" class="form-control" onchange="this.form.submit()">
                @foreach($categories as $category)
                    <option value="{{ $category->table_name }}" {{ $category->table_name == $table ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </form>

    <!-- Tabel untuk menampilkan pertanyaan -->
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>Nama Quiz</th>
                <th>Jawaban A</th>
                <th>Jawaban B</th>
                <th>Jawaban C</th>
                <th>Jawaban D</th>
                <th>Jawaban Benar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $question)
                <tr>
                    <td>{{ $question->quiz }}</td>
                    <td>{{ $question->jawaban_a }}</td>
                    <td>{{ $question->jawaban_b }}</td>
                    <td>{{ $question->jawaban_c }}</td>
                    <td>{{ $question->jawaban_d }}</td>
                    <td>{{ $question->jawaban_benar }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
