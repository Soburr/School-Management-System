<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <link rel="icon" href="images/favicon.png" type="image/gif" />

        <title>Zalab</title>

        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <!-- font awesome style -->
        <link href="css/font-awesome.min.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet" />
        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet" />

      </head>



<body>

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
          <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
              <a class="navbar-brand" href="index.html">
                <span>
                  <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">ZALAB</h2>
                </span>
              </a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link pl-lg-0" href="">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about"> About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#newsletter">News Letter</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#ourfacilities"> Our Facilities </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('login')}}">Login to e-portal</a>
                  </li>
                </ul>

                <form class="search_form">
                  <input type="text" class="form-control" placeholder="Search here...">
                  <button class="" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </nav>
          </div>
        </header>
        @yield('content')






       @yield('scripts')
        <section id="about" class="info_section layout_padding2">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-lg-3 info-col">
                  <div class="info_detail">
                    <h4>
                      About Us
                    </h4>
                    <p>
                      Vitae aut explicabo fugit facere alias distinctio, exem commodi mollitia minusem dignissimos atque
                      asperiores incidunt vel voluptate iste
                    </p>
                    <div class="info_social">
                      <a href="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                      <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                      <a href="">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                      </a>
                      <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 info-col">
                  <div class="info_contact">
                    <h4>
                      Address
                    </h4>
                    <div class="contact_link_box">
                      <a href="">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>
                          Location
                        </span>
                      </a>
                      <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                          Call +01 1234567890
                        </span>
                      </a>
                      <a href="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                          demo@gmail.com
                        </span>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="container">
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <p>{{ (\Session::get('success') )}}</p>
                        </div><br>
                    @endif

                    @if (\Session::has('failure'))
                    <div class="alert alert-danger">
                        <p>{{ (\Session::get('failure') )}}</p>
                    </div><br>
                @endif
                </div>

                <div class="col-md-6 col-lg-3 info-col">
                  <div class="info_contact">
                    <h4 style="font-size: 20px;">
                      Add Your Mail To Get Latest News From ZALAB
                    </h4>
                    <form action="{{url ('newsletter')}}">
                        @csrf
                      <input type="text" name="email" placeholder="Enter email" />
                      <button type="submit">
                        Subscribe
                      </button>
                    </form>
                  </div>
                </div>



                <div class="col-md-6 col-lg-3 info-col">
                  <div class="map_container">
                    <div class="map">
                      <div id="googleMap"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- end info section -->

          <!-- footer section -->
          <footer class="footer_section">
            <div class="container">
              <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://newton09.netlify.app/">Newton</a>
              </p>
            </div>
          </footer>



  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->



</body>




</html>
