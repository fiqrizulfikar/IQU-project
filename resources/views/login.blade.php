<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link href="assets/css/main.css" rel="stylesheet">

</head>
<body class="bodyv">
	<div class="mainv">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				@if(session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
				@endif
				@if($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				<form action="{{ route('register.post') }}" method="POST">
				@csrf
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="name" placeholder="Your Full Name" id="logname" autocomplete="off" required>
					<input type="email" name="email" placeholder="Your Email" id="logemail" autocomplete="off" required>
					<input type="password" name="password" placeholder="Your Password" id="logpass" autocomplete="off" required>
					<input type="password" name="password_confirmation" placeholder="Your Password" id="password_confirmation" required>
				
					<button>Register</button>
				</form>
			</div>

			<div class="login">
				@if(session('error'))
					<div class="alert alert-danger">
						{{ session('error') }}
					</div>
				@endif
				@if(session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
				@endif
				<form action="{{ route('login.post') }}" method="POST">
				@csrf
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email"  placeholder="Your Email" id="logemail" autocomplete="off" required>
					<input type="password" name="password" placeholder="Your Password" id="logpass" autocomplete="off" required>
					
					<button>Login</button>
				</form>
			</div>
	</div>
</body>
</body>
</html>
<<<<<<< HEAD

<div class="category-container">
    <h2>Pilih Kategori Soal CPNS</h2>
    <p>Silakan pilih kategori soal yang ingin Anda kerjakan. Baca aturan di bawah sebelum memulai!</p>
    
    <div class="categories">
        <a href="{{ route('cpns.tiu') }}" class="btn btn-primary">TIU (Tes Intelegensia Umum)</a>
        <a href="{{ route('cpns.twk') }}" class="btn btn-primary">TWK (Tes Wawasan Kebangsaan)</a>
        <a href="{{ route('cpns.tkp') }}" class="btn btn-primary">TKP (Tes Karakteristik Pribadi)</a>
    </div>

    <div class="rules-container">
        <h3>Aturan Mengerjakan Soal</h3>
        <ul>
            <li>Waktu pengerjaan maksimal adalah <strong>20 menit</strong> per kategori.</li>
            <li>Tidak diperbolehkan meninggalkan halaman selama mengerjakan soal.</li>
            <li>Setiap soal wajib dijawab sebelum melanjutkan ke soal berikutnya.</li>
            <li>Anda dapat melihat hasil jawaban Anda di akhir sesi, termasuk soal yang salah dan pembahasannya.</li>
            <li>Gunakan tombol <strong>"Selesai"</strong> jika Anda telah menyelesaikan semua soal.</li>
        </ul>
    </div>
</div>