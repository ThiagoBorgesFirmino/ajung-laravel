<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <title>@yield('title')</title>

    <!-- CSS DO SITE -->
    <link rel="stylesheet" href="/css/styles.css">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet">
    
    <!-- BOOT STRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4afc9787c2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  </head>
  <body>
        {{-- START MENU --}}
        <nav class="navbar navbar-expand-md navbar-dark xfixed-top bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/img/logo_header.png" alt="A.Jung" width="43px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/portifolio">Portifólio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/equipe">Equipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- END MENU --}}

        @yield('content')


        {{-- START FOOTER ---}}
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col col-md-12 text-center">
                        <img src="/img/logo_footer.png" class="img-fluid" alt="@yield('title')">
                        <nav class="nav-redes-footer">
                            <a href="https://www.facebook.com/ajungscorp?ref=ts&fref=ts" title="Facebook @yield('title')"><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://www.instagram.com/ajung1969/" title="Instagram @yield('title')"><i class="fa-brands fa-instagram"></i></a>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <p>Copyright © 2023 @yield('title')</p>
                    </div>
                </div>
            </div>
        </footer>
        {{-- END FOOTER ---}}


    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/site.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
   

  </body>
</html>