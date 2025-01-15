<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="assets/css/mediasosial7.css" rel="stylesheet">
    <title>Contact</title>
    
   
</head>

<body>
    <div class="gravity-bg">
        <div class="circle" style="width: 100px; height: 100px; top: 20%; left: 10%;"></div>
        <div class="circle" style="width: 150px; height: 150px; top: 40%; left: 50%;"></div>
        <div class="circle" style="width: 80px; height: 80px; top: 70%; left: 30%;"></div>
        <div class="circle" style="width: 100px; height: 100px; top: 90%; left: 80%;"></div>
    </div>

    <nav class="navbar">
    <div class="logo ">
        
          1QU 
   
    </div>
        </div>
        <div class="menu">
            <a href="/">About US</a>
            <a href="/login" class="login-icon"><i class="fas fa-user"></i></a>
        </div>
    </nav>

    <div class="container">
        <div class="text-section">
            <h1>WANNA GET IN TOUCH?</h1>
            <p>Have a question or want to collaborate? Reach out to us directly. Whether you’re looking to discuss partnerships, media inquiries, or simply connect, we’re here to help you take the next step.</p>
            <div class="social-icons">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/iqu.quiz?igsh=MWl1em80cm9xMjlpYw==" target="_blank" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://x.com" target="_blank" title="X">
                    <i class="fab fa-x"></i> 
                </a>
            </div>

        </div>

        @if(session('success'))
            <div style="color: green; font-size: 16px; text-align: center;">
                {{ session('success') }}
            </div>
        @elseif($errors->any())
            <div style="color: red; font-size: 16px; text-align: center;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulir Kontak -->
        <form class="form-section" action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
            <input type="email" name="email" placeholder="Your Email" value="{{ old('email') }}" required>
            <textarea name="message" placeholder="Your Message" rows="5" required>{{ old('message') }}</textarea>
            <button type="submit">Send</button>
        </form>

        

    </div>

    <footer class="footer">
    <div class="footer-content">
        <p>© 2024 All Rights Reserved</p>
        <p>Created by <a href="https://www.iqu.com" target="_blank">1QU Project</a></p>
    </div>
    </footer>

</body>
</html>
