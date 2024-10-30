<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Reset & Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #ffffff;
    color: #48e917;
    display: cover;
    flex-direction: column;
    align-items: center;
    min-height: 100vh;
    text-align: center;
    width: 100%;
    
    
}

.kotak {
  background-color: white;
  width: 100%;
  margin: 0 auto;
  text-align: center;
  padding-top: 30px;
    margin-bottom: 20px;
}

h1 {
  font-size: 2.5rem;
  margin-bottom: 25px;
}

.buttons {
  margin-bottom: 20px;
}

.btn {
  display: inline-block;
  padding: 10px 20px;
  background-color: #333;
  color: white;
  border-radius: 5px;
  text-decoration: none;
  margin: 0 10px;
  transition: background-color 0.3s ease;
}

.mission-btn {
  background-color: #6e00ff;
}

.vision-btn {
  background-color: #6e00ff;
}

.btn:hover {
  background-color: #444;
}

.content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 40px;
}

.image-kotak {
  flex: 1;
  padding-right: 20px;
}

.conference-image {
  width: 100%;
  border-radius: 10px;
}

.text-kotak {
  flex: 1;
  padding-left: 20px;
  text-align: left;
}

h2 {
  font-size: 2rem;
  margin-bottom: 20px;
}

p {
  caret-color: black;
  font-size: 1.1rem;
  margin-bottom: 20px;
}

.features {
  list-style: none;
  padding: 0;
}

.features li {
  font-size: 1.1rem;
  margin-bottom: 10px;
}

.features li span {
  color: #6e00ff;
  margin-right: 10px;
  font-size: 1.5rem;
}

/* Section: About Principles */
.about {
    max-width: 800px;
    text-align: center;
}

.about h1 {
    font-size: 24px;
    margin-bottom: 30px;
}

.principles {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 20px;
}

.principle-card {
    background-color: #4ca95f;
    border-radius: 10px;
    padding: 20px;
    width: 180px;
    height: 190px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s, box-shadow 0.3s;
}

.principle-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 15px rgba(255, 0, 150, 0.5);
}

.icon {
    font-size: 40px;
    color: #ff00a6;
    margin-bottom: 10px;
}

.principle-card h2 {
    font-size: 18px;
    color: #ff00a6;
    margin-bottom: 10px;
}

.principle-card p {
    font-size: 14px;
    color: #ccc;
    text-align: center;
}

    </style>
</head>
<body>
    

    <section class="kotak-vision">
        <div class="kotak">
            <h1><b>Defining our mission and vision for success.</b></h1>
            <div class="buttons">
                <a href="#" class="btn mission-btn">Our Mission</a>
                <a href="#" class="btn vision-btn">Our Vision</a>
            </div>
            <div class="content">
                <div class="image-kotak">
                    <img src="https://akcdn.detik.net.id/visual/2019/06/17/772710cf-6870-4b5e-b124-375f0786eb18_169.jpeg?w=750&q=90" alt="Conference" class="conference-image"> <!-- Ganti dengan gambar yang sesuai -->
                </div>
                <div class="text-kotak">
                    <h2>Championing Soccer Excellence</h2>
                    <p>Wesum dolor sit amet consectetur. In ornare mauris quam donec diam sabulum sed ultricies neque amet enim mus.</p>
                    <p>Fsum dolor sit amet consectetur. In ornare mauris quam donec diam sagittis. Lomm sed vestibulum sed ultricies neque amet.</p>
                    <p>Pamet consectetur. In ornare mauris quam donec diam sagittis.rem sed vesm sed ultricies neque amet enim mus.</p>
                    <ul class="features">
                        <li><span>✔</span> Attention to Detail</li>
                        <li><span>✔</span> Engagement and Impact</li>
                        <li><span>✔</span> Technology Integration</li>
                        <li><span>✔</span> Creativity</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <h1>Principles shaping our conference experience.</h1>
        <div class="principles">
            <div class="principle-card">
                <div class="icon">🎓</div>
                <h2>Education</h2>
                <p>This nona lobretium pharetra num com entum.</p>
            </div>
            <div class="principle-card">
                <div class="icon">💡</div>
                <h2>Innovation</h2>
                <p>This tor urna naertra num com entum.</p>
            </div>
            <div class="principle-card">
                <div class="icon">🤝</div>
                <h2>Collaboration</h2>
                <p>This gor urna lobretium pharetra num cotum.</p>
            </div>
            <div class="principle-card">
                <div class="icon">🏅</div>
                <h2>Excellence</h2>
                <p>This for urn na lobretium pharetra num com um.</p>
            </div>
        </div>
    </section>
</body>
</html>
