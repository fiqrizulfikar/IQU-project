<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link href="assets/css/main.css" rel="stylesheet">

</head>
<body class="bodyv">
<div class="gravity-bg">
        <div class="circle" style="width: 100px; height: 100px; top: 20%; left: 10%;"></div>
        <div class="circle" style="width: 150px; height: 150px; top: 40%; left: 50%;"></div>
        <div class="circle" style="width: 80px; height: 80px; top: 70%; left: 30%;"></div>
        <div class="circle" style="width: 100px; height: 100px; top: 90%; left: 80%;"></div>
		<div class="circle" style="width: 130px; height: 130px; top: 30%; left: 100%;"></div>
    </div>
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
