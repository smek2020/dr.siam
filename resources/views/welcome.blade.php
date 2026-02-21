<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dr. Hadiur Rahman Siam</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}?v={{ time() }}">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/image.css') }}" rel="stylesheet">

  <style>
    .portfolio-item {
      position: relative;
      cursor: pointer;
      overflow: hidden;
      transition: transform 0.3s ease;
    }
    .portfolio-item img {
      transition: transform 0.5s ease, filter 0.5s ease;
    }
    .portfolio-item:hover img {
      transform: scale(1.1);
      filter: brightness(0.8);
    }
    .portfolio-item .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.4);
      opacity: 0;
      transition: opacity 0.3s ease;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .portfolio-item:hover .overlay {
      opacity: 1;
    }

    /* Reduce gap between DMC and Video */
    #video-section {
      margin-top: 30px; /* adjust as needed */
    }
  </style>
</head>

<body class="index-page">

  <!-- Header -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/logo.png') }}" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#dmc">DMC SCHOLARS</a></li>
          <li><a href="#gallary">Gallary</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-wrapper">
        <div class="hero-img-box">
          <img class="hero-img" src="{{ asset('assets/img/siam-vai.png') }}" alt="">
        </div>
        <div class="hero-info blur-box">
          <h1><b>ডাঃ হাদিউর রহমান সিয়াম</b></h1>
          <div class="role-box">
            <div class="role-item">
              <img src="{{ asset('assets/img/logo.png') }}">
              <span>Advisor, DMC SCHOLAR</span>
            </div>
            <div class="role-item">
              <img src="{{ asset('assets/img/kmc.png') }}">
              <span>Assistant Registrar, Khulna Medical College</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-between">
          <div class="col-lg-4 profile-img align-self-start">
            <img src="{{ asset('assets/img/siam-vai1.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-7 content">
            <h3>Im a ux /ui designer austin based who loves clean, simple &amp; unique design. i also enjoy crafting brand identities, icons, &amp; ilustration work.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- DMC Scholars Section -->
    <section id="dmc" class="testimonials section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>DMC SCHOLAR</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {"delay": 5000},
              "slidesPerView": "auto",
              "pagination": {"el": ".swiper-pagination","type": "bullets","clickable": true}
            }
          </script>
          <div class="swiper-wrapper">
            @for ($i = 1; $i <= 5; $i++)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset("assets/img/dmc$i.jpeg") }}" class="testimonial-img" alt="DMC Scholar {{ $i }}">
                <h3>Person {{ $i }}</h3>
                <h4>Position {{ $i }}</h4>
                <div class="stars">
                  @for ($s = 0; $s < 5; $s++)
                  <i class="bi bi-star-fill"></i>
                  @endfor
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Sample testimonial text for person {{ $i }}.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
            @endfor
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

    <!-- Video Section -->
    <section id="video-section" class="section">
      <div class="video-wrapper">
        <video width="100%" height="auto" controls autoplay loop muted playsinline>
          <source src="{{ asset('assets/video/vid.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </section>

    <!-- Portfolio Section -->
    <section id="gallary" class="portfolio section">
      <div class="container">
        <h2 class="container section-title" data-aos="fade-up">Gallery</h2>
        <div class="container" data-aos="fade-up">
          <div class="row g-3">
            @for ($i = 1; $i <= 8; $i++)
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="portfolio-item position-relative overflow-hidden">
                <a href="{{ asset("assets/img/portfolio/app-$i.jpg") }}" data-lightbox="roadtrip" title="Project {{ $i }}">
                  <img src="{{ asset("assets/img/portfolio/app-$i.jpg") }}" class="img-fluid grayscale" alt="Project {{ $i }}">
                  <div class="overlay d-flex align-items-center justify-content-center">
                    <i class="bi bi-plus-lg text-white fs-2"></i>
                  </div>
                </a>
              </div>
            </div>
            @endfor
          </div>

          <!-- View More Button -->
          <div class="text-center mt-4">
            <a href="{{ url('/gallary') }}" class="btn btn-primary btn-lg">View More</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-5">
            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call</h3>
                  <p>+1 5589 55488 55</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <p>info@example.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <form action="#" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
          <div class="row gy-4">
            <div class="col-md-6"><input type="text" name="name" class="form-control" placeholder="Your Name" required></div>
            <div class="col-md-6"><input type="email" name="email" class="form-control" placeholder="Your Email" required></div>
            <div class="col-md-12"><input type="text" name="subject" class="form-control" placeholder="Subject" required></div>
            <div class="col-md-12"><textarea name="message" class="form-control" rows="6" placeholder="Message" required></textarea></div>
            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
              <button type="submit">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <footer id="footer" class="footer light-background">
    <div class="container">
      <h3 class="sitename">DR. SIAM</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links d-flex justify-content-center">
        <a href="#"><i class="bi bi-twitter-x"></i></a>
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-skype"></i></a>
        <a href="#"><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright</span> <strong class="px-1 sitename">DR.SIAM</strong> <span>All Rights Reserved</span>
        </div>
        <div class="credits">
          Designed and Developed by <a href="#">Sazid Mahmud Emon Khan</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>