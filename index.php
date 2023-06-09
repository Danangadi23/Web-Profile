<?php
session_start();
include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyPortofolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

  <!-- Font Google -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Bootstrape Bundle -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">
    <nav id="navbar" class="navbar nav-menu">
      <!--Nav-->
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"> </i> <span>Home </span> </a></li>
        <li><a href="#about" class="nav-link scrollto"> <i class="bx bx-user"> </i> <span>About Me </span> </a></li>
        <li><a href="#portfolio" class="nav-link scrollto"> <i class="bx bx-book-content"></i> <span>Portfolio</span>
          </a></li>
        <!-- <li><a href="#services" class="nav-link scrollto"> <i class="bx bx-server"> </i> <span>Hobby </span> </a></li> -->
        <li><a href="#contact" class="nav-link scrollto"> <i class="bx bx-envelope"> </i> <span>Contact </span> </a>
        </li>
      </ul>
    </nav><!-- End Nav Menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Danang Adi</h1>
      <p>I Want To Be a <span class="typed" data-typed-items="Back End Developer, Network Engineer, IT Security"></span>
      </p>
      <div class="social-links">
        <a href="https://www.instagram.com/danang_adi26/?hl=id" target="_blank" class="instagram"><i
            class="bx bxl-instagram"></i></a>
        <a href="https://wa.me/6285718917735" target="_blank" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <?php $ambil = $koneksi->query("SELECT * FROM about"); ?>
        <?php while ($perproduk = $ambil->fetch_assoc()) { ?>
        <div class="section-title">
          <h2>About Me</h2>
          <p><?php echo $perproduk['kutipan'] ?></p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="foto_gambar/<?php echo $perproduk['gambar']; ?>"
              style="border-radius: 10px; width: 100%; height: 100%; box-shadow: 2px 2px 2px rgba(0,0,0,0.8);"
              class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content"><br><br>
            <h3>SIJA SMKN 26 Jakarta.</h3>
            <p class="fst-italic">
              Biodata sederhana tentang saya.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                    <span><?php echo $perproduk['birthday'] ?></span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Instagram:</strong>
                    <span><?php echo $perproduk['instagram'] ?></span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                    <span><?php echo $perproduk['phone'] ?></span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Kota:</strong>
                    <span><?php echo $perproduk['kota'] ?></span>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                    <span><?php echo $perproduk['age'] ?></span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Hobby:</strong>
                    <span><?php echo $perproduk['hobby'] ?></span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                    <span><?php echo $perproduk['email'] ?></span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Agama:</strong>
                    <span><?php echo $perproduk['agama'] ?></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Hardskill dan Softskill yang saya kuasai dan saya kembangkan saat ini.</p>
        </div>

        <div class="row skills-content">
          <?php $ambil = $koneksi->query("SELECT * FROM skill"); ?>
          <?php while ($perproduk = $ambil->fetch_assoc()) { ?>
          <div class="col-lg-6">
            <div class="progress">
              <span class="skill"><?php echo $perproduk['skill'] ?> <i
                  class="val"><?php echo $perproduk['persentase'] ?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $perproduk['nilai'] ?>"
                  aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          <?php $ambil = $koneksi->query("SELECT * FROM skill2"); ?>
          <?php while ($perproduk = $ambil->fetch_assoc()) { ?>
          <div class="col-lg-6">
            <div class="progress">
              <span class="skill"><?php echo $perproduk['skill2'] ?> <i
                  class="val"><?php echo $perproduk['persentase2'] ?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $perproduk['nilai2'] ?>"
                  aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="section-title">
        <h2>My Portfolio</h2>
        <p>Achivement dan Project yang pernah saya buat.</p>
      </div>

      <div class="container container_porto" data-aos="fade-up" style="display: flex; flex-wrap: wrap;">
        <?php $ambil = $koneksi->query("SELECT * FROM gambar"); ?>
        <?php while ($perproduk = $ambil->fetch_assoc()) { ?>
        <div class="portfolio" data-aos="fade-up" data-aos-delay="200">
          <div class="portfolio-item col-lg-4 col-md-6 filter-app">
            <div class="portfolio-wrap" style="border-radius: 10px;">
              <img src="foto_gambar/<?php echo $perproduk['foto_gambar']; ?>" class="img-fluid" alt="Gambar">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="foto_gambar/<?php echo $perproduk['foto_gambar']; ?>" data-gallery="portfolioGallery"
                    class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php?id=<?php echo $perproduk['id_gambar']; ?>"
                    class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i
                      class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <!-- <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Hobby</h2>
          <p>Hobby/kegiatan yang saya suka dan beberapa saya tekuni.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5"
                    d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                  </path>
                </svg>
                <i class="bx bx-slideshow"></i>
              </div>
              <h4>Menonton Film</h4>
              <p>Action, comedy, dan romance genre favorit saya</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
            data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5"
                    d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                  </path>
                </svg>
                <i class="bi bi-code-slash"></i>
              </div>
              <h4>Coding</h4>
              <p>Belajar bahasa pemrograman sangat menyenangkan bagi saya karena dapat melatih logika kita dalam problem
                solving</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
            data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5"
                    d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                  </path>
                </svg>
                <i class="bi bi-yin-yang"></i>
              </div>
              <h4>Martial Art</h4>
              <p>Saya cukup menguasai bela diri pencak silat dan kedepannya mungkin saya akan berlatih Muay Thai atau
                Jiujitsu</p>
            </div>
          </div>
        </div>

      </div>
    </section> End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jl. Kp Pulo Jahe Rt2/Rw10 Kelurahan Jatinegara Kecamatan Cakung Jakarta Timur</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>danangadi2005@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telpon:</h4>
                <p>085718917735</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <div class="alert alert-primary alert-dismissible fade show d-none my-alert" role="alert">
              <strong>Terimakasih!</strong> Pesan anda sudah kami terima.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form name="portfolio-contact" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required
                  style="resize: none;"></textarea>
              </div>
              <div class="text-center">
                <button type="submit" class="btn-kirim">Send Message</button>
                <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading...
                </button>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Quotes Hari Ini</h3>
      <p>Kejarlah apa yang ingin kamu capai dan anggap semua pendapat buruk tentangmu sebagai motivasi bagimu melangkah.
      </p>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
  const scriptURL =
    'https://script.google.com/macros/s/AKfycbzFSFn2IQWPJKB6Hlw49XI8fSJW7jeP8-kzehdtUUu7kRq0UNkvHz7u-0weD7h5d__g/exec'
  const form = document.forms['portfolio-contact']
  const btnKirim = document.querySelector('.btn-kirim');
  const btnLoading = document.querySelector('.btn-loading');
  const myAlert = document.querySelector('.my-alert');

  form.addEventListener('submit', e => {
    e.preventDefault()
    btnLoading.classList.toggle('d-none');
    btnKirim.classList.toggle('d-none');
    fetch(scriptURL, {
        method: 'POST',
        body: new FormData(form)
      })
      .then(response => {
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        myAlert.classList.toggle('d-none');
        form.reset();
        console.log('Success!', response)
      })
      .catch(error => console.error('Error!', error.message))
  })
  </script>

</body>

</html>