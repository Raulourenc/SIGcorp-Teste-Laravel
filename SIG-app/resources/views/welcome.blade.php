<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIGVagas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('storage/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('storage/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('storage/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('storage/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('storage/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('storage/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.2.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><span>SIGVagas@example.com</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <!-- ======= register/login ==== -->
    @if (Route::has('login'))
      <div class="">
          @auth
              <a href="{{ url('/dashboard') }}" class="access">Dashboard</a>
          @else
              <a href="{{ route('login') }}" class="access">Log in</a>

              @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="ml-4 access">Register</a>
              @endif
          @endauth
      </div>
    @endif
    </div>
  </section><!-- End Top Bar -->

  

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Vagas da SIG disponíveis</h2>
              <p>Disponibilizamos o acervo mais variado de vagas na área de tecnologia, sempre buscando o match perfeito entre empresa e colaborador.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
         
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="{{ asset('storage/assets/img/portfolio/vaga1.jpg')}}" alt="">
              </div>

              <div class="swiper-slide">
                <img src="{{ asset('storage/assets/img/portfolio/vaga2.jpg')}}" alt="">
              </div>

              <div class="swiper-slide">
                <img src="{{ asset('storage/assets/img/portfolio/vaga3.jpg')}}" alt="">
              </div>

              <div class="swiper-slide">
                <img src="{{ asset('storage/assets/img/portfolio/vaga4.jpg')}}" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>
        

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2>Exemplo de portifólio</h2>
              <p>
                Graças ao design simples e objetivo do site dessa fotógrafa, os visitantes podem focar no que é mais importante – o trabalho dela.
              </p>
              <p>
                Isso ajuda os visitantes a, em pouco tempo, terem uma ideia de qual estilo de fotos a Karen faz e qual a experiência dela na área.
              </p>

              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  A Karen inclui todas as informações essenciais (como informações de contato e uma breve biografia) no topo do site. A maior parte do design do site é totalmente dedicado a mostrar o trabalho dela usando um layout em grade bem dinâmico.                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div>
                  <img src="{{ asset('storage/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                  <h3>Karen</h3>
                  <h4>Web Designer</h4>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>informações do Projeto</h3>
              <ul>
                <li><strong>Categoria</strong> <span>Web design</span></li>
                <li><strong>Cliente</strong> <span>Karen Design</span></li>
                <li><strong>Data do Projeto</strong> <span>01 Março, 2020</span></li>
                <li><strong>URL do Projeto</strong> <a href="#">www.KarenDesign.com</a></li>
                <li><a href="#" class="btn-visit align-self-start">Visite o Site</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>SIG Vagas</span>
          </a>
          <p>Acesse também as nossas redes sociais</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

       
       
        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contato</h4>
          <p>
            Av Rio Branco, 1220 <br>
            São Paulo, SP <br>
            Brasil <br><br>
            <strong>Telefone:</strong> 11-93232983 <br>
            <strong>Email:</strong> SIGVagas@example.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>SIG Vagas</span></strong>. All Rights Reserved
      </div>


  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('storage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('storage/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('storage/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('storage/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('storage/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('storage/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('storage/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('storage/assets/js/main.js')}}"></script>

</body>

</html>