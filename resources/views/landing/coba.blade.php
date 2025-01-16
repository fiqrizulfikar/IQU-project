<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f9;
            color: #333;
        }

        header {
            background: #333;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }

        header h1 {
            font-size: 2.5rem;
        }

        nav {
            display: flex;
            justify-content: center;
            background: #444;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0.5rem 1rem;
            transition: background 0.3s;
        }

        nav a:hover {
            background: #555;
        }

        .container {
            max-width: 1100px;
            margin: 2rem auto;
            padding: 1rem;
        }

        .slider {
            position: relative;
            overflow: hidden;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            box-sizing: border-box;
            text-align: center;
        }

        .slide img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .slide h2 {
            margin: 1rem 0;
        }

        .slide p {
            margin: 1rem 0;
            font-size: 1.1rem;
        }

        .slide button {
            padding: 0.7rem 1.5rem;
            border: none;
            background: #333;
            color: #fff;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .slide button:hover {
            background: #555;
        }

        .controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .control {
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            cursor: pointer;
            font-size: 1.5rem;
            transition: background 0.3s;
        }

        .control:hover {
            background: rgba(0, 0, 0, 0.7);
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            margin-top: 2rem;
        }

        /* Animation */
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Styles for the new About Us section with scroll */
.about-us-scroll {
    padding: 50px 20px;
    background-color: #f5f5f5;
    text-align: center;
}

.about-us-scroll h2 {
    font-size: 36px;
    color: #34495e;
    margin-bottom: 30px;
    animation: fadeIn 2s ease-out;
}

.about-us-scroll p {
    font-size: 18px;
    color: #7f8c8d;
    margin-bottom: 20px;
    animation: fadeIn 2s ease-out;
}

.scroll-section {
    display: flex;
    justify-content: space-around;
    gap: 30px;
    margin-top: 50px;
    flex-wrap: wrap;
}

.scroll-box {
    background: linear-gradient(135deg, #ff6f61, #ff9e80);
    padding: 20px;
    width: 250px;
    border-radius: 10px;
    color: white;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.scroll-box h3 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 15px;
}

.scroll-box p {
    font-size: 16px;
}

.scroll-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
}

/* Scroll animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Scroll Box Hover Effect */
.scroll-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
}

/* Styling for the additional section */

/* Testimonials Section */
.testimonials-section {
    background-color: #f7f7f7;
    padding: 60px 20px;
    text-align: center;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    animation: fadeInSection 1s ease-out;
}

.testimonials-header h2 {
    font-size: 36px;
    font-weight: bold;
    color: #2c3e50;
    margin-bottom: 20px;
    animation: slideInLeft 1s ease-out;
}

.testimonials-header p {
    font-size: 18px;
    color: #7f8c8d;
    opacity: 0.7;
    animation: fadeInUp 1s ease-out;
}

.testimonial-cards {
    display: flex;
    justify-content: space-around;
    gap: 20px;
    flex-wrap: wrap;
    margin-top: 40px;
    animation: fadeInSection 1s ease-out;
}

.testimonial-card {
    background-color: white;
    padding: 25px;
    width: 280px;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInBox 1s ease-out forwards;
}

.testimonial-card img {
    border-radius: 50%;
    width: 80px;
    height: 80px;
    object-fit: cover;
    margin-bottom: 15px;
}

.testimonial-card p {
    font-size: 16px;
    color: #34495e;
    margin-bottom: 10px;
    font-style: italic;
}

.testimonial-card h4 {
    font-size: 18px;
    color: #2c3e50;
    font-weight: bold;
}

.testimonial-card p:last-of-type {
    font-size: 14px;
    color: #7f8c8d;
}

/* Button Styles */
.testimonial-btn {
    background-color: #2980b9;
    color: white;
    padding: 15px 30px;
    font-size: 18px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    margin-top: 40px;
    transition: transform 0.3s ease;
}

.testimonial-btn:hover {
    transform: scale(1.1);
    background-color: #1f6d91;
}

/* Keyframes for Animations */
@keyframes fadeInBox {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInSection {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Achievements Section */
.achievements-section {
    background-color: #ecf0f1;
    padding: 60px 20px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    text-align: center;
    animation: fadeInSection 1s ease-out;
}

.achievements-header h2 {
    font-size: 36px;
    font-weight: bold;
    color: #2c3e50;
    margin-bottom: 20px;
}

.achievements-header p {
    font-size: 18px;
    color: #7f8c8d;
    opacity: 0.7;
}

.achievements-timeline {
    display: flex;
    flex-direction: column;
    gap: 40px;
    margin-top: 40px;
    animation: fadeInUp 1s ease-out;
}

.timeline-item {
    display: flex;
    align-items: center;
    position: relative;
}

.timeline-icon {
    width: 70px;
    height: 70px;
    background-color: #2980b9;
    color: white;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px;
    font-weight: bold;
    margin-right: 20px;
    transition: transform 0.3s ease;
}

.timeline-icon span {
    font-size: 18px;
    font-weight: bold;
}

.timeline-content {
    background-color: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    flex: 1;
    position: relative;
}

.timeline-content h4 {
    font-size: 24px;
    font-weight: bold;
    color: #2c3e50;
}

.timeline-content p {
    font-size: 16px;
    color: #34495e;
    margin-top: 10px;
}

/* Button Styles */
.achievements-btn {
    background-color: #2980b9;
    color: white;
    padding: 15px 30px;
    font-size: 18px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    margin-top: 40px;
    transition: transform 0.3s ease;
}

.achievements-btn:hover {
    transform: scale(1.1);
    background-color: #1f6d91;
}

/* Keyframes for Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInSection {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}



    </style>
</head>
<body>
    <header>
        <h1>About Us</h1>
    </header>

    <nav>
        <a href="#home">Home</a>
        <a href="#about">About Us</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
    </nav>

    <div class="container">
        <div class="slider">
            <div class="slides">
                <div class="slide">
                    <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p2/65/2024/02/25/889d5f18-ad24-4adb-8ab4-e297d1fa3feb-930441761.jpg" alt="Slide 1">
                    <h2>Who We Are</h2>
                    <p>We are committed to delivering the best experiences for our customers.</p>
                    <button>Learn More</button>
                </div>
                <div class="slide">
                    <img src="https://cdns.klimg.com/merdeka.com/i/w/photonews/2023/04/24/1544745/540x270/20230430120251-5-aktris-cantik-korea-yang-tampak-lebih-tua-dari-usianya-dan-5-yang-tampak-lebih-muda-007-tantri-setyorini.jpg" alt="Slide 2">
                    <h2>Our Mission</h2>
                    <p>Driving innovation to create impactful solutions.</p>
                    <button>Discover More</button>
                </div>
                <div class="slide">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2Gl6eP8Ygrdd90c9hC9CWUz8ASWl6x7ggYA&s" alt="Slide 3">
                    <h2>Our Vision</h2>
                    <p>Shaping a better future through collaboration and creativity.</p>
                    <button>Explore Vision</button>
                </div>
                <div class="slide">
                    <img src="https://via.placeholder.com/1100x500" alt="Slide 4">
                    <h2>Our Team</h2>
                    <p>Meet the passionate individuals behind our success.</p>
                    <button>Meet Team</button>
                </div>
                <div class="slide">
                    <img src="https://via.placeholder.com/1100x500" alt="Slide 5">
                    <h2>Join Us</h2>
                    <p>Be part of our journey and make an impact.</p>
                    <button>Get Started</button>
                </div>
            </div>
            <div class="controls">
                <button class="control prev">&#10094;</button>
                <button class="control next">&#10095;</button>
            </div>
        </div>
    </div>

    <section class="about-us-scroll">
        <div class="content">
            <h2>Our Core Values</h2>
            <p>We believe in the power of innovation, teamwork, and commitment to excellence. Our core values guide us towards making a meaningful impact.</p>
            <p>We strive to build a positive work environment, drive results through collaboration, and maintain the highest standards of service and quality.</p>
        </div>
        <div class="scroll-section">
            <div class="scroll-box">
                <h3>Innovation</h3>
                <p>We focus on creative solutions to tackle challenges and foster growth.</p>
            </div>
            <div class="scroll-box">
                <h3>Collaboration</h3>
                <p>We believe in working together to achieve our goals and deliver success.</p>
            </div>
            <div class="scroll-box">
                <h3>Excellence</h3>
                <p>We are committed to delivering the best in every aspect of our work.</p>
            </div>
            <div class="scroll-box">
                <h3>Customer Focus</h3>
                <p>Our customers' satisfaction is at the heart of everything we do.</p>
            </div>
        </div>


    </section>

    <section class="testimonials-section">
        <div class="testimonials-header">
            <h2>What Our Clients Say</h2>
            <p>We value feedback from our clients, and we're proud of the lasting relationships we've built.</p>
        </div>
        
        <div class="testimonial-cards">
            <div class="testimonial-card">
                <img src="https://via.placeholder.com/100" alt="Client 1">
                <p>"Their service was impeccable. They understood our needs and delivered beyond expectations."</p>
                <h4>John Doe</h4>
                <p>CEO, Tech Solutions</p>
            </div>
            <div class="testimonial-card">
                <img src="https://via.placeholder.com/100" alt="Client 2">
                <p>"We have seen a remarkable improvement in our processes thanks to their innovative solutions."</p>
                <h4>Jane Smith</h4>
                <p>Marketing Director, Creatify</p>
            </div>
            <div class="testimonial-card">
                <img src="https://via.placeholder.com/100" alt="Client 3">
                <p>"The team went above and beyond to ensure that we achieved our goals efficiently and on time."</p>
                <h4>Mike Johnson</h4>
                <p>Operations Manager, Innovators Inc.</p>
            </div>
        </div>
    
        <button class="testimonial-btn">Read More Testimonials</button>
    </section>
    
    <section class="achievements-section">
        <div class="achievements-header">
            <h2>Our Achievements & Milestones</h2>
            <p>We are proud of the milestones we’ve achieved and the impact we’ve made. Here’s a glimpse into our journey.</p>
        </div>
        
        <div class="achievements-timeline">
            <div class="timeline-item">
                <div class="timeline-icon"><span>2015</span></div>
                <div class="timeline-content">
                    <h4>Founded</h4>
                    <p>We started our journey with a simple idea: to create innovative solutions for businesses.</p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-icon"><span>2017</span></div>
                <div class="timeline-content">
                    <h4>First Major Partnership</h4>
                    <p>Our first major partnership with a global brand, opening doors to new opportunities.</p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-icon"><span>2019</span></div>
                <div class="timeline-content">
                    <h4>Global Expansion</h4>
                    <p>Expanded our presence to international markets, bringing our solutions worldwide.</p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-icon"><span>2021</span></div>
                <div class="timeline-content">
                    <h4>Award Winning</h4>
                    <p>Received multiple awards for innovation and excellence in our industry.</p>
                </div>
            </div>
        </div>
    
        <button class="achievements-btn">Explore More Milestones</button>
    </section>
    

    <footer>
        <p>&copy; 2024 About Us Company. All Rights Reserved.</p>
    </footer>

    <script>
        const slides = document.querySelector('.slides');
        const slideCount = document.querySelectorAll('.slide').length;
        const prevButton = document.querySelector('.prev');
        const nextButton = document.querySelector('.next');
        let currentIndex = 0;

        function showSlide(index) {
            if (index < 0) {
                currentIndex = slideCount - 1;
            } else if (index >= slideCount) {
                currentIndex = 0;
            } else {
                currentIndex = index;
            }
            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        prevButton.addEventListener('click', () => showSlide(currentIndex - 1));
        nextButton.addEventListener('click', () => showSlide(currentIndex + 1));

        // Auto-slide every 5 seconds
        setInterval(() => showSlide(currentIndex + 1), 5000);
    </script>
</body>
</html>

