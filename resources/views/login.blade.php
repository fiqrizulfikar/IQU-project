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
				<form>
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="txt" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
          <input type="number" name="broj" placeholder="BrojTelefona" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Sign up</button>
				</form>
			</div>

			<div class="login">
				<form>
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>
	</div>
</body>
</body>
</html>

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