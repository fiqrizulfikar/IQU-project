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
</nav>
<<div class="container">
    <h2>Masukkan PIN Anda</h2>
    
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    
    <form method="POST" action="{{ route('pin.verify') }}">
        @csrf
        <div class="form-group">
            <label for="pin">PIN:</label>
            <input type="password" id="pin" name="pin" class="form-control" required maxlength="6">
        </div>
        <button type="submit" class="btn btn-primary">Verifikasi PIN</button>
    </form>
</div>
