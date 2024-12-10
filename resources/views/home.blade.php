<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title></title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="{{ route('home') }}"><img src="assets/img/gallery/logoCliniCall.png" width="250" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" href="#Setores">Setores</a></li>
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="#SobreNós">Sobre nós</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#Contato">Contato</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#Ajuda">Ajuda</a></li>
          </div>
        </div>
      </nav>
      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/hero-bg.png);background-position:top center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row min-vh-xl-100 min-vh-xxl-25">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="assets/img/gallery/hero.png" alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
              <h1 class="fw-light font-base fs-6 fs-xxl-7">Bem-vindo ao <br> <strong>CliniCall</strong></h1> 
              <h4 class="font-base Brush Script MT, Brush Script Std, cursive"> Uma plataforma feita especialmente para você e sua comunidade, que facilita o agendamento de consultas e exames nos postos de saúde, sem nenhum custo.</h4>
              <p class="fs-1 mb-5">Aproveite a praticidade e a economia que o CliniCall oferece para cuidar de sua saúde e da saúde de quem você ama. <br>
                Agende hoje mesmo e experimente a facilidade de ter o atendimento médico ao seu alcance, sem custos!
                <p><a class="btn btn-lg btn-primary rounded-pill" href="{{ route('agendamento') }}" role="button">Agende aqui</a></p>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" id="Setores">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/serviços.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">ALGUNS SETORES DE ATENDIMENTO </h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0">

        <div class="container">
          <div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
                <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="assets/img/icons/exameslab.png" alt="..." width="100"/><img class="mb-3 deparment-icon-hover" src="assets/img/icons/exameslab.png" alt="..." width="110" />
                    <p class="fs-1 fs-xxl-2 text-center">Laboratório</p>
                  </a></div>
              </div>
            </div>
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
                <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="assets/img/icons/clinicageral.png" alt="..." width="100"/><img class="mb-3 deparment-icon-hover" src="assets/img/icons/clinicageral.png" alt="..." width="110"/>
                    <p class="fs-1 fs-xxl-2 text-center">Clínica Geral</p>
                  </a></div>
              </div>
            </div>
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
              <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="assets/img/icons/psicologia.png" alt="..." width="100"/><img class="mb-3 deparment-icon-hover" src="assets/img/icons/psicologia.png" alt="..." width="110"/>
                    <p class="fs-1 fs-xxl-2 text-center">Psicologia</p>
                  </a></div>
              </div>
            </div>
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
              <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="assets/img/icons/cardiologia.png" alt="..." width="100"/><img class="mb-3 deparment-icon-hover" src="assets/img/icons/cardiologia.png" alt="..." width="110"/>
                    <p class="fs-1 fs-xxl-2 text-center">Cardiologia</p>
                  </a></div>
              </div>
            </div>
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
              <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="assets/img/icons/odontologia.png" alt="..." width="100"/><img class="mb-3 deparment-icon-hover" src="assets/img/icons/odontologia.png" alt="..." width="110"/>
                    <p class="fs-1 fs-xxl-2 text-center">Odontologia</p>
                  </a></div>
              </div>
            </div>
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
              <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="assets/img/icons/enfermagem.png" alt="..." width="100"/><img class="mb-3 deparment-icon-hover" src="assets/img/icons/enfermagem.png" alt="..." width="110"/>
                <p class="fs-1 fs-xxl-2 text-center">Enfermagem</p>
                  </a></div>
              </div>
            </div>
            
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="bg-secondary">
        <div class="bg-holder" style="background-image:url(assets/img/gallery/bg-eye-care.png);background-position:center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-xxl-6"><img class="img-fluid" src="assets/img/gallery/eye-care.png" alt="..." /></div>
            <div class="col-md-7 col-xxl-6 text-center text-md-start">
              <h2 class="fw-bold text-light mb-4 mt-4 mt-lg-0">Cuide de sua saúde com a<br class="d-none d-sm-block" />praticidade que você precisa</h2>
              <p class="text-light">Pensando no seu bem-estar, desenvolvemos um sistema de agendamento online eficiente e fácil de usar. Não perca mais tempo com esperas intermináveis.<br class="d-none d-sm-block" class="d-none d-sm-block" />Agende sua consulta no momento mais conveniente e tenha acesso rápido a profissionais de saúde qualificados </p>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0" id="SobreNós">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/about-us.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">SOBRE NÓS</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-5">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/about-bg.png);background-position:top center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 order-lg-1 mb-5 mb-lg-0"><img class="fit-cover rounded-circle w-100" src="assets/img/gallery/health-care.png" alt="..." /></div>
            <div class="col-md-6 text-center text-md-start">
            <strong>
            <h2 class="fw-bold mb-4"> CliniCall: A Saúde da comunidade ao seu alcance </h2>
              <p>Bem-vindo ao CliniCall, a plataforma de agendamento online criada especialmente para facilitar o acesso à saúde para as comunidades. Pensando em oferecer mais conforto e agilidade para o seu cuidado, 
                a CliniCall permite que você agende suas consultas de maneira simples, 
                rápida e sem sair de casa.
                <br class="d-none d-sm-block" />Sabemos o quanto o tempo é precioso, especialmente quando se trata da sua saúde e da sua família. 
                Por isso, nosso site foi desenvolvido para que você tenha total controle sobre o agendamento de consultas nos postos de saúde, 
                diretamente do seu celular ou computador, sem enfrentar filas ou perder tempo com burocracias. 
                <br class="d-none d-sm-block" /> Com o CliniCall, você escolhe o melhor horário para o seu atendimento, de acordo com a disponibilidade dos postos de saúde da sua região. 
                Nossa plataforma é intuitiva e fácil de usar, pensada para garantir que todos, 
                independentemente da idade ou habilidade digital, possam acessar os cuidados de saúde necessários.
                <br class="d-none d-sm-block" /> Cuidar de você e de sua família nunca foi tão simples e acessível. 
                Agende sua consulta no CliniCall e aproveite a praticidade de ter a saúde ao alcance de um clique!</p>
                </strong>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/doctors-us.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">NOSSOS PROFISSIONAIS</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-5">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/doctors-bg.png);background-position:top center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row flex-center">
            <div class="col-xl-10 px-0">
              <div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="assets/img/gallery/anita.png" width="128" alt="..." />
                            <h5 class="mt-3">Beatriz Pereira </h5>
                            <p class="mb-0 fs-xxl-1">Pediatra</p>
                            <p class="text-600 mb-0">Pernambuco, Brasil</p>
                            <p class="text-600 mb-4">10 anos de experiência</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="assets/img/gallery/jane.png" width="128" alt="..." />
                            <h5 class="mt-3">Juliana Martins</h5>
                            <p class="mb-0 fs-xxl-1">Ginecologista</p>
                            <p class="text-600 mb-0">Pernambuco, Brasil</p>
                            <p class="text-600 mb-4">12 anos de experiência</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="assets/img/gallery/leo-mario.png" width="128" alt="..." />
                            <h5 class="mt-3">André Gonçalves</h5>
                            <p class="mb-0 fs-xxl-1">Fisioterapia</p>
                            <p class="text-600 mb-0">Pernambuco, Brasil</p>
                            <p class="text-600 mb-4">25 anos de experiência</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
      </section>



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" id="Contato">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/people.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">CONTATO</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-8">
        <div class="container">
          <div class="row">
            <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/dot-bg.png);background-position:bottom right;background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="col-lg-6 z-index-2 mb-5"><img class="w-100" src="assets/img/gallery/appointment.png" alt="..." /></div>
            <div class="col-lg-6 z-index-2">
              <form class="row g-3">
                <div class="col-md-6">
                  <label class="visually-hidden" for="inputNome">Nome</label>
                  <input class="form-control form-livedoc-control" id="inputName" type="text" required placeholder="Nome Completo" />
                </div>
                <div class="col-md-6">
                  <label class="visually-hidden" for="inputNumero">Número</label>
                  <input class="form-control form-livedoc-control" id="inputNumero" type="tel" required placeholder="(xx) xxxxx-xxxx" pattern="\(\d{2}\) \d{5}-\d{4}"/>
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="inputEmail">Email</label>
                  <input class="form-control form-livedoc-control" id="inputEmail" type="email" required placeholder="E-mail"/>
                </div>
                <div class="col-md-12">
                  <label class="form-label visually-hidden" for="validationTextarea">Mensagem</label>
                  <textarea class="form-control form-livedoc-control" id="validationTextarea" placeholder="Message" style="height: 250px;" required="required"></textarea>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-primary rounded-pill" type="submit">Enviar e-mail</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" id="Ajuda">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/blog-post.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">Central de Ajuda - CliniCall</h1><br><br>

    <div class="container">
        <section class="faq">
            <h4>1. Agendamento de Consultas</h4>
            <details>
                <summary>Como posso agendar uma consulta?</summary>
                <p>Para agendar uma consulta, basta acessar a área de agendamentos do nosso site, localizado na página inicial. Após aperta no botão "agende aqui" coloque seus dados e confirme, para finalizar.</p>
            </details>
            <details>
                <summary>Quais especialidades estão disponíveis para consulta?</summary>
                <p>Oferecemos consultas em diversas especialidades, incluindo: Clínica Geral, Ginecologia, Pediatria, Dentista, Psicologia, Fisioterapia, entre outras especialidades.</p>
            </details>
        </section>

        <section class="faq">
            <h4>2. Horários de Atendimento</h4>
            <details>
                <summary>Quais são os horários de funcionamento do posto de saúde?</summary>
                <p>Nosso posto de saúde está aberto de segunda a sexta-feira, das 08:00 às 18:00. Não abrimos aos finais de semana e feriados. Para serviços de urgência, consulte os posto de saúde de referência da região.</p>
            </details>
            <details>
                <summary>Como posso saber se o posto está funcionando em horário especial?</summary>
                <p>Informações sobre horários especiais (feriados ou eventos) são atualizadas em nosso site e redes sociais.</p>
            </details>
        </section>

        <section class="faq">
            <h4>3. Urgências e Emergências</h4>
            <details>
                <summary>O que fazer em caso de emergência?</summary>
                <p>Em casos de emergência, procure a unidade de pronto atendimento (UPA) ou o hospital mais próximo. Nosso posto de saúde realiza atendimentos de urgência básica, mas não possui estrutura para atendimentos graves.</p>
            </details>
        </section>

        <section class="faq">
            <h4>4. Exames e Resultados</h4>
            <details>
                <summary>Como agendar exames?</summary>
                <p>Os exames são agendados após avaliação médica. Caso o exame seja necessário, o médico realizará o encaminhamento. Após o encaminhamento entre no site e agende o exame no botão "agende aqui</p>
            </details>
        </section>

        <section class="faq">
            <h4>5. Programas e Serviços de Saúde</h4>
            <details>
                <summary>Quais programas de saúde estão disponíveis?</summary>
                <p>Oferecemos diversos programas de saúde, como: Programa de Saúde da Família, Vacinação, Pré-natal, Controle de doenças crônicas, Saúde Mental e mais.</p>
            </details>
        </section>

        <section class="faq">
            <h4>6. Cadastro no SUS</h4>
            <details>
                <summary>Como me cadastrar no SUS?</summary>
                <p>O cadastro no SUS pode ser feito diretamente no posto de saúde. Basta apresentar um documento de identidade e comprovante de residência.</p>
            </details>
        </section>

        <section class="faq">
            <h4>7. Dúvidas e Suporte</h4>
            <details>
                <summary>Preciso de ajuda, como posso entrar em contato?</summary>
                <p>Se você não encontrou a resposta para sua dúvida, entre em contato com nossa equipe através dos seguintes meios:</p>
                <ul>
                    <li>Telefone de atendimento: <strong>(XX) XXXX-XXXX</strong></li>
                    <li>E-mail de suporte: <strong>suporte@postosade.com.br</strong></li>
                    <li>Redes sociais: <strong>@PostoSaudePublica</strong></li>
                </ul>
            </details>
        </section>
    </div>

    <footer>
        <p>&copy; CliniCall | Todos os direitos reservados.</p>
    </footer>

            </div>
          </div>
        </div>
        <!-- end of .container-->
          <form>
              <h1></h1>

          </form>
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->



      <section class="bg-primary">
        <div class="container">
          <div class="row py-8">
            <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img src="assets/img/gallery/CliniCallLogoWhite.png" width="350" alt="" /></a>
              <p class="text-light my-4">CliniCall: Sua Saúde em Primeiro Lugar</p>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif">Atendimento ao cliente</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="footer-link" href="#SobreNós">Sobre Nós</a></li>
                <li class="lh-lg"><a class="footer-link" href="#Contato">Contato</a></li>
                <li class="lh-lg"><a class="footer-link" href="#Ajuda">Ajuda</a></li>
              </ul>
            </div>
          </div>
        </div>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 bg-primary">

          <div class="container">
            <div class="row justify-content-md-between justify-content-evenly py-4">
              <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                <p class="fs--1 my-2 fw-bold text-200">Todos os direitos reservados &copy; CliniCall, 2024.</p>
              </div>
            </div>
          </div>
          <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


      </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap" rel="stylesheet">
  </body>

</html>