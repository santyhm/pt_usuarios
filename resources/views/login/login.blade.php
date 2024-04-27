<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Login</title>
    <meta name="description" content="Login Page" />
    <!-- Favicon Tags Start -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('assets/img/favicon/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/img/favicon/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/img/favicon/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/img/favicon/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('assets/img/favicon/apple-touch-icon-60x60.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('assets/img/favicon/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('assets/img/favicon/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('assets/img/favicon/apple-touch-icon-152x152.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-196x196.png') }}" sizes="196x196" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}" sizes="16x16" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-128.png') }}" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="img/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="img/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="img/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="img/favicon/mstile-310x310.png" />
    <!-- Favicon Tags End -->
    <!-- Font Tags Start -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/font/CS-Interface/style.css') }}" />
    <!-- Font Tags End -->
    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/OverlayScrollbars.min.css') }}" />

    <!-- Vendor Styles End -->
    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <!-- Template Base Styles End -->

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <script src="{{ asset('assets/js/base/loader.js') }}"></script>
  </head>

  <body class="h-100">
    <div id="root" class="h-100">
      <!-- Background Start -->
      <div class="fixed-background"></div>
      <!-- Background End -->

      <div class="container-fluid p-0 h-100 position-relative">
        <div class="row g-0 h-100">
          <!-- Left Side Start -->
          <div class="offset-0 col-12 d-none d-lg-flex offset-md-1 col-lg h-lg-100">
            <div class="min-h-100 d-flex align-items-center">
              <div class="w-100 w-lg-75 w-xxl-50">
                <div>
                  <div class="mb-5">
                    <h1 class="display-3 text-white">Multiple Niches</h1>
                    <h1 class="display-3 text-white">Ready for Your Project</h1>
                  </div>
                  <p class="h6 text-white lh-1-5 mb-5">
                    Dynamically target high-payoff intellectual capital for customized technologies. Objectively integrate emerging core competencies before
                    process-centric communities...
                  </p>
                  <div class="mb-5">
                    <a class="btn btn-lg btn-outline-white" href="index.html">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Left Side End -->

          <!-- Right Side Start -->
          <div class="col-12 col-lg-auto h-100 pb-4 px-4 pt-0 p-lg-0">
            <div class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
              <div class="sw-lg-50 px-5">
                <div class="sh-11">
                  <a href="index.html">
                    <div class="logo-default"></div>
                  </a>
                </div>
                <div class="mb-5">
                  <h2 class="cta-1 mb-0 text-primary">Bienvenido,</h2>
                  <h2 class="cta-1 text-primary">¡empecemos!</h2>
                </div>
                <div class="mb-5">
                  <p class="h6">Utilice sus credenciales para iniciar sesión.</p>
                </div>
                <div>
                  <form class="tooltip-end-bottom" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3 filled form-group tooltip-end-top">
                      <i data-acorn-icon="user"></i>
                      <input type="email" class="form-control" placeholder="Correo" name="email" />
                    </div>
                    <div class="mb-3 filled form-group tooltip-end-top">
                      <i data-acorn-icon="lock-off"></i>
                      <input class="form-control pe-7" name="password" type="password" placeholder="Contraseña" />
                    </div>
                    <!-- {% if has_erro') }} -->
                    @if($errors->has('error'))
                        <div class="mb-3">
                            <span class="text-danger mb-2">
                                El <b>Correo Electronico</b> y/o <b>Contraseña</b> son incorrectos!.
                            </span>
                            <br>
                        </div>
                    @endif
                    <button type="submit" class="btn btn-lg btn-primary">Acceso</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Right Side End -->
        </div>
      </div>
    </div>

    <!-- Vendor Scripts Start -->
    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/OverlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/autoComplete.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/clamp.min.js') }}"></script>

    <script src="{{ asset('assets/icon/acorn-icons.js') }}"></script>
    <script src="{{ asset('assets/icon/acorn-icons-interface.js') }}"></script>

    <script src="{{ asset('assets/js/vendor/jquery.validate/jquery.validate.min.js') }}"></script>

    <script src="{{ asset('assets/js/vendor/jquery.validate/additional-methods.min.js') }}"></script>

    <!-- Vendor Scripts End -->

    <!-- Template Base Scripts Start -->
    <script src="{{ asset('assets/js/base/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/base/globals.js') }}"></script>
    <script src="{{ asset('assets/js/base/nav.js') }}"></script>
    <script src="{{ asset('assets/js/base/search.js') }}"></script>
    <script src="{{ asset('assets/js/base/settings.js') }}"></script>
    <!-- Template Base Scripts End -->
    <!-- Page Specific Scripts Start -->

    <script src="{{ asset('assets/js/pages/auth.login.js') }}"></script>

    <script src="{{ asset('assets/js/common.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- Page Specific Scripts End -->
  </body>
</html>
