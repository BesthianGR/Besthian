<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <style>:root {
    --primary: #88913e;
    --bg: #010101;
  }
  
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
  }
  
  html {
    scroll-behavior: smooth;
  }
  
  body {
    font-family: "Poppins", sans-serif;
    background-color: var(--bg);
    color: #fff;
  }
  
  /* Navbar */
  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.4rem 7%;
    background-color: rgba(1, 1, 1, 0.8);
    border-bottom: 1px solid #a0aa41;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
  }
  
  .navbar .navbar-logo {
    font-size: 2rem;
    font-weight: 700;
    color: #fff;
    font-style: italic;
  }
  
  .navbar .navbar-nav a {
    color: #fff;
    display: inline-block;
    font-size: 1, 6rem;
    margin: 0 1rem;
  }
  
  .navbar .navbar-nav a:hover {
    color: var(--primary);
  }
  
  .navbar .navbar-nav a::after {
    content: "";
    display: block;
    padding-bottom: 0.5rem;
    border-bottom: 0.1rem solid var(--primary);
    transform: scaleX(0);
    transition: 0.2s linear;
  }
  
  .navbar .navbar-nav a:hover::after {
    transform: scaleX(0.5);
  }
  
  .navbar .navbar-extra a {
    color: #fff;
  }
  
  #menu {
    display: none;
  }
  
  /* Hero Section */
  .hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    background-image: url("../img/img1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: relative;
  }
  
  .hero::after {
    content: "";
    display: block;
    position: absolute;
    width: 100%;
    height: 30%;
    bottom: 0;
    background: linear-gradient(
      0deg,
      rgba(1, 1, 3, 1) 8%,
      rgba(255, 255, 255, 0) 50%
    );
  }
  
  .hero .content {
    padding: 1.4rem 7%;
    max-width: 60rem;
  }
  
  .hero .content h1 {
    font-size: 5em;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
    line-height: 1, 2;
  }
  
  .hero .content p {
    font-size: 1, 4rem;
    margin-top: 1rem;
    line-height: 1.4rem;
    font-weight: 100;
    text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
    mix-blend-mode: difference;
  }
  
  .hero .content .cta {
    margin-top: 1rem;
    display: inline-block;
    padding: 1rem 3rem;
    font-size: 1.4rem;
    color: #000;
    background-color: var(--primary);
    border-radius: 0.5rem;
    text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
  }
  
  /* About Section */
  .about,
  .siswa,
  .contact {
    padding: 10rem 7% 1.4rem;
  }
  
  .about h2,
  .siswa h2,
  .contact h2 {
    text-align: center;
    font-size: 2.6rem;
    margin-bottom: 3rem;
  }
  
  .about .row {
    display: flex;
  }
  
  .about .row .about-img {
    flex: 1 1 45rem;
  }
  
  .about .row .about-img img {
    width: auto;
    height: auto;
  }
  
  .about .row .content {
    flex: 1 1 35rem;
    padding: 0 2rem;
  }
  
  .about .row .content h3 {
    font-size: 1.8rem;
    margin-bottom: 1rem;
  }
  
  .about .row .content p {
    margin-bottom: 0.8rem;
    font-size: 1.4rem;
    font-weight: 100;
    line-height: 1, 6;
  }
  
  .siswa p {
    font-size: 1.2rem;
  }
  
  /* Siswa Section */
  
  .siswa h2,
  .contact h2 {
    margin-bottom: 1rem;
  }
  
  .siswa p,
  .contact p {
    text-align: center;
    max-width: 30rem;
    margin: auto;
    font-weight: 100;
    line-height: 1.6rem;
  }
  
  .siswa .row {
    display: flex;
    flex-wrap: wrap;
    margin-top: 5rem;
    justify-content: center;
  }
  
  .siswa .row .siswa-card {
    text-align: center;
    margin: 2rem;
    padding-bottom: 2rem;
  }
  
  .siswa .row .siswa-card img {
    border-radius: 50%;
  }
  
  .siswa .row .siswa-card .siswa-card-tittle {
    margin-top: 1rem auto 0.5rem;
  }
  
  /* Contact Section */
  
  .contact .row {
    display: flex;
    margin-top: 2rem;
    background-color: #222;
    flex-wrap: wrap;
  }
  
  .contact .row .map {
    flex: 1 1 45rem;
    width: 100%;
    object-fit: cover;
  }
  
  .contact .row form {
    flex: 1 1 45rem;
    padding: 5rem 2rem;
    text-align: center;
  }
  
  .contact .row form .input-group {
    display: flex;
    align-items: center;
    margin-top: 2rem;
    background-color: var(--bg);
    border: 1px solid #eee;
    padding-left: 2rem;
  }
  
  .contact .row form .input-group input {
    width: 100%;
    padding: 2rem;
    font-size: 1.7rem;
    background: none;
    color: #fff;
  }
  
  .contact .row form .btn {
    margin-top: 3rem;
    display: inline-block;
    padding: 1rem 3rem;
    font-size: 1.7rem;
    color: #fff;
    background-color: var(--bg);
    cursor: pointer;
  }
  
  /* Footer */
  footer {
    background-color: var(--primary);
    text-align: center;
    padding: 1rem 0 3rem;
    margin-top: 3rem;
  }
  
  footer .socials {
    padding: 1rem 0;
  }
  
  footer .socials a {
    color: #fff;
    margin: 1rem;
  }
  
  footer .socials a:hover,
  footer .links a:hover {
    color: var(--bg);
  }
  
  footer .links {
    margin-bottom: 1.4rem;
  }
  
  footer .links a {
    color: #fff;
    padding: 0.7rem 1rem;
  }
  
  footer .credit {
    font-size: 0.8rem;
  }
  
  footer .credit a {
    color: #000;
    font-weight: 700;
  }
  /* Media Queries */
  
  /* Laptop */
  @media (max-width: 1366px) {
    html {
      font-size: 75%;
    }
  }
  
  /* Tablet */
  @media (max-width: 768px) {
    html {
      font-size: 62.5%;
    }
  
    #menu {
      display: inline-block;
    }
  
    .navbar .navbar-nav {
      position: absolute;
      top: 100%;
      right: -100%;
      background-color: #fff;
      width: 30rem;
      height: 100vh;
    }
  
    .navbar .navbar-nav.active {
      right: 0;
    }
  
    .navbar .navbar-nav a {
      color: var(--bg);
      display: block;
      margin: 1, 5rem;
      padding: 0, 5rem;
      font-size: 2rem;
    }
  
    .navbar .navbar-nav a::after {
      transform-origin: 0 0;
    }
  
    .navbar .navbar-nav a:hover:after {
      transform: scaleX(0.2);
    }
  
    .about .row {
      flex-wrap: wrap;
    }
  
    .about .row .about-img img {
      height: 20rem;
      object-fit: cover;
      object-position: center;
    }
  
    .about .row .content {
      padding: 0;
    }
  
    .about .row .content h3 {
      margin-top: 1rem;
      font-size: 2rem;
    }
  
    .navbar .row .content p {
      font-size: 1.6rem;
    }
  
    .contact .row {
      flex-wrap: wrap;
    }
  
    .contact .row .map {
      height: 30rem;
    }
  }
  
  /* Mobile Phone */
  @media (max-width: 450px) {
    html {
      font-size: 55%;
    }
  }
  </style>
  <body>
    <!-- Navbar -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">RPL.</a>

      <div class="navbar-nav">
        <a href="#home">Home.</a>
        <a href="#about">About.</a>
        <a href="#siswa">Students.</a>
        <a href="#contact">Contact.</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="shopping"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="menu"><i data-feather="menu"></i></a>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Progammer Indonesia</h1>
        <p>Kalian Mau jadi Programmer dan Jago dalam coding - mengcoding?</p>
        <a href="#" class="cta">Mari Masuk RPL</a>
      </main>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
      <h2>Tentang Kami</h2>
      <div class="row">
        <div class="about-img">
          <img
            src="/img/img4.jpg"
            alt="tentang Kami"/>
        </div>
        <div class="content">
          <h3>Kenapa Harus Memilih Kami?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia
            accusantium voluptas eligendi temporibus? Magnam, eius sequi.
          </p>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam
            optio qui, non voluptas beatae expedita?
          </p>
        </div>
      </div>
    </section>

    <!-- Siswa Section -->
    <section id="siswa" class="siswa">
      <h2>Our Students</h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta ex autem amet deserunt vitae iure!</p>
      <div class="row">
        <div class="siswa-card">
          <img src="img/orang/1.jpg" alt="Students 1" class="siswa-card-img" width="200px" height="200px">
          <h3 class="siswa-card-tittle">- Students 1 -</h3>
          <p class="siswa-card-alumni">Alumni SMK Telkom Medan</p>
        </div>
        <div class="siswa-card">
          <img src="img/orang/1.jpg" alt="Students 1" class="siswa-card-img" width="200px" height="200px">
          <h3 class="siswa-card-tittle">- Students 1 -</h3>
          <p class="siswa-card-alumni">Alumni SMK Telkom Medan</p>
        </div>
        <div class="siswa-card">
          <img src="img/orang/1.jpg" alt="Students 1" class="siswa-card-img" width="200px" height="200px">
          <h3 class="siswa-card-tittle">- Students 1 -</h3>
          <p class="siswa-card-alumni">Alumni SMK Telkom Medan</p>
        </div>
        <div class="siswa-card">
          <img src="img/orang/1.jpg" alt="Students 1" class="siswa-card-img" width="200px" height="200px">
          <h3 class="siswa-card-tittle">- Students 1 -</h3>
          <p class="siswa-card-alumni">Alumni SMK Telkom Medan</p>
        </div>
        <div class="siswa-card">
          <img src="img/orang/1.jpg" alt="Students 1" class="siswa-card-img" width="200px" height="200px">
          <h3 class="siswa-card-tittle">- Students 1 -</h3>
          <p class="siswa-card-alumni">Alumni SMK Telkom Medan</p>
        </div>
        <div class="siswa-card">
          <img src="img/orang/1.jpg" alt="Students 1" class="siswa-card-img" width="200px" height="200px">
          <h3 class="siswa-card-tittle">- Students 1 -</h3>
          <p class="siswa-card-alumni">Alumni SMK Telkom Medan</p>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
      <h2>Contact</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, pariatur!</p>
      
      <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.278694656131!2d98.61816477417142!3d3.522932950742907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031257487ec36b7%3A0xf835dac8905a90db!2sSMK%20Telkom%201%20Medan!5e0!3m2!1sid!2sid!4v1692800288574!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        <form action="connect.php" method="post">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="Nama" name="nama">
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="E-mail" name="mail">
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="No.Handphone" name="phone">
          </div>
          <div class="label">
          </div>
          <button type="submit" class="btn">Send</button>
        </form>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="socials">
        <a href="www.instagram.com"><i data-feather="instagram"></i></a>
        <a href="twitter.com"><i data-feather="twitter"></i></a>
        <a href="facebook.com"><i data-feather="facebook"></i></a>
      </div>
      <div class="links">
        <a href="#home">Home.</a>
        <a href="#about">About.</a>
        <a href="#siswa">Students.</a>
        <a href="#contact">Contact.</a>
      </div>
      <div class="credit">
        <p>Created by <a href="">besthianbolon</a> | &copy; 2023.</p>
      </div>
    </footer>
    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- Java Script -->
    <script src="js/main.js"></script>
  </body>
</html>
