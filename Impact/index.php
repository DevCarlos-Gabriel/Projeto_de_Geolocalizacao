<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Impact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/impact_favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

   <!-- CSS folheto Mapa -->
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
   <!-- JavaScript Mapa -->
   <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:grupoimpact@gmail.com">grupoimpact@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>0800-742-2036</span></i>
      </div>
     
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Impact<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Início</a></li>
		  <li><a href="#about">Sobre</a></li>
          <li><a href="#contact">Mapa</a></li>
          <li><a href="#team">Team</a></li>
          
          
          <li class="dropdown"><a href="#"><span>Usuário</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="./login-form/cadastro.php">Cadastro</a></li>
              </li>
		  
              <li><a href="./login-form/login.php">Login</a>
			  </li>
            </ul>
          
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Bem vindo a <span>Impact</span></h2>
          <p>Se você quer defender o planeta e somar-se às pessoas que atuam para proteger o meio ambiente, aqui é o seu lugar!</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Saiba mais</a>
            <a href="#mapa" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Assista o vídeo</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/green.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="#contact" class="stretched-link">ecoMaps</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-file-text"></i></div>
              <h4 class="title"><a href="tds.php" class="stretched-link">Termos de serviços</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            
          </div>
          <!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Sobre nós</h2>
          <p>Queremos viver em um planeta saudável e pacífico, onde as florestas florescem, os oceanos estão cheios de vida e onde animais antes ameaçados vagam com segurança.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Quem nós somos</h3>
            <img src="assets/img/logotipo.png" class="img-fluid rounded-4 mb-4" alt="">
            <p>Impact é uma rede de organizações independentes, que usa confrontação pacífica,criativa e tecnológica para expor problemas ambientais e desenvolver soluções para um futuro verde e pacífico.</p>
            
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <h3 class="fst-italic">
                Nossa missão.
              </h3>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Proteger a biodiversidade em todas as suas formas.</li>
                <li><i class="bi bi-check-circle-fill"></i> Prevenir a poluição ambiental.</li>
                <li><i class="bi bi-check-circle-fill"></i> Promover soluções. Não basta apontarmos o dedo.</li>
              </ul>
              <p>
                O trabalho do Greenpeace é baseado em uma série de princípios. Eles estão refletidos em todas as nossas campanhas e orientam tudo o que fazemos, onde quer que o façamos.
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.png" class="img-fluid rounded-4" alt=""><br>
                <a href="https://youtu.be/jCmD8GJl4dM" class="glightbox play-btn" alt=""></a>
				<br><p>Na Impact, temos a honra de saber que nosso trabalho é financiado inteiramente por doações de pessoas voluntárias que se preocupam com o planeta e fundações privadas que compartilham nossos valores.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Voluntários</strong> somando nessa luta</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projetos</strong> preservando o meio ambiente</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="245" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Denúncias</strong> de focos de lixo</p>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->
	
	
	
	<!-- ======= Call To Action Section ======= -->
    
   <!-- End Call To Action Section -->
	
    <!-- ======= maps Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>ecoMaps</h2>
          <p>Gostaria de registrar uma denúncia? Informe-nos logo abaixo:</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

          <div class="info-container" id="mapid">
               
          </div>

          </div>

          <div class="col-lg-8">
            
			<form action="forms/mapa.php" class="php-email-form">
              
			  <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome" required>
                </div>

                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="cep" id="cep" placeholder="Digite seu CEP" required>
                </div>

                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="estado" id="estado" placeholder="Digite seu Estado" required>
                </div>
				
                <div class="col-md-6 form-group">
                  <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Digite sua Cidade" required>
                </div>

                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Digite seu Bairro" required>
                </div>

                <div class="col-md-6 form-group">
                  <input type="text" name="rua" class="form-control" id="rua" placeholder="Digite sua Rua" required>
                </div>

              </div>
			  
			  <div class="row">
                <div class="col-md-6 form-group">
                  <input type="date" name="data" class="form-control" id="data" value='<?php echo date("Y-m-d"); ?>' hidden>
                </div> 

                <div class="col-md-6 form-group">
                  <input type="time" name="hora" class="form-control" value='' id="hora" hidden>
                </div> 
				
            </div>
			  
              <div class="form-group mt-3">
                <textarea class="form-control"  rows="7" placeholder="Descrição"></textarea>
              </div>
			  
              <script>
                function aviso(){
                  Swal.fire({
                    title: 'Não Permitido!',
                    text: 'Faça primeiro o login para conseguir usar esta ferramenta!',
                    icon: 'warning',
                    showConfirmButton: true
                  });
                }
              </script>
              <div class="text-center"><button type="submit" onclick="aviso()">Enviar</button></div>
            
			</form>
			
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End maps Section -->
	
	
	
	
	
	
	<!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Perguntas <strong>Frequentes</strong></h3>
              
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Como utilizar o ecoMaps?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                   Você pode preencher o formulário com as informações requeridas e logo após marcar o ponto de foco de lixo no mapa, ao lado esquerdo do quadro de denúncia.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Como posso me cadastrar?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Você pode se cadastrar no campo "Usuário" no canto superior direito da tela, após o primeiro clique, dois sub-campos aparecerão, um de "Cadastro" e outro de "Login", você procede clicando em "Cadastro".
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Como ter acesso aos gráficos ambientais?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Clique  <a href="http://emissoes.energiaeambiente.org.br/">AQUI</a>.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Posso ser voluntário?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                   Sim, você só precisa se cadastrar e realizar a verificação do email, em seguida o site fica livre para receber seu apoio no combate a poluição.
                  </div>
                </div>
              </div><!-- # Faq item-->

             

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->
	
	
	
	
	
	
	<!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nosso time</h2>
          <p>Conheça nosso grupo de desenvolvedores:</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/team-1.jpeg" class="img-fluid" alt="">
              <h4>Carlos Gabriel</h4>
              <span>Banco de dados</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/team-2.jpeg" class="img-fluid" alt="">
              <h4>Eduarda Sousa</h4>
              <span>Implementação da API</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/mar1.dudazz?igshid=YmMyMTA2M2Y="><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/team-3.jpeg" class="img-fluid" alt="">
              <h4>Taylor Lucas</h4>
              <span>Designer e Front-End</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/_gttaylor?igshid=YmMyMTA2M2Y="><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/team/team-4.jpeg" class="img-fluid" alt="">
              <h4>Isabelle Santana</h4>
              <span>Auxiliar de serviços tecnológicos</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/_isabelle_santanaa?igshid=YmMyMTA2M2Y="><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->
	
	
	<section id="contact" class="contact">
          <div class="section-header">
            <h2>Patrocinadores</h2>
          </div>
		
		<section id="clients" class="clients">
        <div class="container" data-aos="zoom-out">
          <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section>
	
	

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Impact</span>
          </a>
          <p>Impact é uma rede de organizações independentes, que usa confrontação pacífica,criativa e tecnológica para expor problemas ambientais e desenvolver soluções para um futuro verde e pacífico.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Principais Links</h4>
          <ul>
            <li><a href="#hero">Início</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#contact">ecoMaps</a></li>
            <li><a href="tds.php">Termos de serviço</a></li>
            
          </ul>
        </div>


        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contate-nos</h4>
          <p>
            Avenida Idelfonso Cavalcante <br>
            Sobral, CE 62040-070<br>
            Brasil <br><br>
            <strong>Telefone:</strong> 0800-742-2036<br>
            <strong>Email:</strong> grupoimpact@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- sweetalert2 -->
  <script src="js/sweetalert2.js"></script>

  <!-- JS Mapa -->
  <script src="assets/js/map_index.js"></script>

</body>
</html>