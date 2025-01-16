<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f8f8f8;
        }

        .demo {
            background: #e5e5e5;
            
        }

        .our-team {
            border: 2px solid #ff3232;
            border-radius: 10px;
            text-align: center;
            margin: 10px;
            z-index: 1;
            position: relative;
            overflow: hidden;
        }

        .our-team:before,
        .our-team:after {
            content: "";
            width: 100%;
            height: 104%;
            background: #ff3232;
            position: absolute;
            top: 50%;
            left: 0;
            z-index: -1;
            transform: translateY(-50%) scaleX(0.3);
            transition: all 0.3s ease 0s;
        }

        .our-team:after {
            width: 106%;
            left: 50%;
            transform: translate(-50%, -50%) scaleY(0.25);
        }

        .our-team:hover:before {
            transform: translateY(-50%) scaleX(0.7);
        }

        .our-team:hover:after {
            transform: translate(-50%, -50%) scaleY(0.7);
        }

        .our-team img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            transition: all 0.3s ease 0s;
        }

        .our-team .team-content {
            width: 93%;
            padding: 25px 0 10px;
            background: #ff4444;
            position: absolute;
            bottom: 50px;
            left: 50%;
            opacity: 0;
            clip-path: polygon(0% 15%, 15% 15%, 15% 0%, 85% 0%, 85% 15%, 100% 15%, 100% 85%, 85% 85%, 85% 100%, 15% 100%, 15% 85%, 0% 85%);
            transform: translateX(-50%);
            transition: all 0.3s cubic-bezier(0.5, 0.2, 0.1, 0.9);
        }

        .our-team:hover .team-content {
            bottom: 10px;
            opacity: 1;
        }

        .our-team .title {
            font-size: 25px;
            font-weight: 600;
            color: #fff;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin: 0;
        }

        .our-team .post {
            display: block;
            font-size: 16px;
            color: #fff;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .our-team .social {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .our-team .social li {
            display: inline-block;
            margin: 0 5px;
        }

        .our-team .social li a {
            display: block;
            width: 35px;
            height: 35px;
            line-height: 35px;
            border-radius: 50%;
            background: #fff;
            font-size: 20px;
            color: #ff3232;
            transition: all 0.3s ease 0s;
        }

        .our-team .social li a:hover {
            background: linear-gradient(to bottom, #ff3232, darkred);
            box-shadow: 0 0 0 5px rgba(255, 255, 255, 0.3);
            color: #fff;
        }

        /* Flexbox for alignment */
        .team-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 0 -10px;
        }

        .team-col {
            flex: 1 1 30%;  /* Make each column 30% of the container */
            margin: 10px;
            max-width: 300px; /* Set max width to avoid too large items */
        }

        /* Responsiveness */
        @media only screen and (max-width: 990px) {
            .our-team {
                margin-bottom: 30px;
            }

            .team-col {
                flex: 1 1 45%; /* 2 items per row on medium screens */
            }
        }

        @media only screen and (max-width: 600px) {
            .team-col {
                flex: 1 1 100%; /* 1 item per row on small screens */
            }
        }
    </style>
</head>
<body>
    <div class="demo">
        <!-- Team Section -->
        <div class="container">
            <div class="team-row">
                <div class="team-col">
                    <div class="our-team">
                        <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fid.pinterest.com%2Fpin%2F788833690999906938%2F&psig=AOvVaw2FQi9285rG56GIv-z0T7Of&ust=1737086213241000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCKjP0ses-YoDFQAAAAAdAAAAABAE" alt="Member 1">
                        <div class="team-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">Web Developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-col">
                    <div class="our-team">
                        <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fawsimages.detik.net.id%2Fcommunity%2Fmedia%2Fvisual%2F2023%2F06%2F15%2Fselebriti-pakai-aplikasi-wajah-korea.png%3Fw%3D1200&tbnid=QBx7h-vvF_rGjM&vet=10CBAQxiAoAWoXChMIqM_Sx6z5igMVAAAAAB0AAAAAEA8..i&imgrefurl=https%3A%2F%2Fwolipop.detik.com%2Ffoto-entertainment%2Fd-6774965%2F5-artis-ri-mendadak-korea-pakai-aplikasi-ai-viral-wajah-mereka-jadi-begini&docid=A10TGrXKqfkNdM&w=1200&h=1668&itg=1&q=foto%20orang%20cantik%20korea&ved=0CBAQxiAoAWoXChMIqM_Sx6z5igMVAAAAAB0AAAAAEA8" alt="Member 2">
                        <div class="team-content">
                            <h3 class="title">Kristiana</h3>
                            <span class="post">Web Designer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Add more team members here if needed -->
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
