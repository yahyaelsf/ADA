<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Swiper CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <!-- Font MaryTodd+W00+Black-->
    <link
      href="https://db.onlinewebfonts.com/c/fdebcd0c20c9955d76511b720d9932bb?family=MaryTodd+W00+Black"
      rel="stylesheet"
    />
    <!-- Font Inter-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />
    <!-- Font DM Sans-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
      rel="stylesheet"
    />
    <!-- Font Manrope-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{ asset('front/css/home.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    @stack('css')
    <title>@yield('title')</title>
  </head>
  <body>
    <!-- back-to-top -->
    <button id="back-to-top" class="back-to-top" title="Go to top">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        width="24"
        height="24"
      >
        <path fill="none" d="M0 0h24v24H0z" />
        <path
          fill="currentColor"
          d="M12 10.828l-4.95 4.95-1.414-1.414L12 8l6.364 6.364-1.414 1.414z"
        />
      </svg>
    </button>
    <!-- Start Header Section -->
    <header class="header">
      <div class="container">
        <div class="header-content">
          <div class="logo">
            <img
              src="{{ asset('front/images/logo.png') }}"
              alt="Organization Logo"
              class="logo-img"
            />
          </div>

          <div class="mobile-menu-toggle" id="mobile-menu-toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="main-nav-container">
            <div class="header-right">
              <div class="contact-info">
                <svg
                  width="21"
                  height="20"
                  viewBox="0 0 21 20"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M18.44 11C18.22 11 17.99 10.93 17.77 10.88C17.3245 10.7818 16.8866 10.6515 16.46 10.49C15.9961 10.3212 15.4861 10.33 15.0283 10.5146C14.5704 10.6992 14.1971 11.0466 13.98 11.49L13.76 11.94C12.786 11.3982 11.891 10.7252 11.1 9.94C10.3147 9.14901 9.6418 8.25399 9.09998 7.28L9.51998 7C9.96334 6.78291 10.3108 6.40953 10.4954 5.95169C10.68 5.49385 10.6888 4.98391 10.52 4.52C10.3612 4.09242 10.2309 3.6548 10.13 3.21C10.08 2.99 10.04 2.76 10.01 2.53C9.88854 1.82562 9.5196 1.18774 8.9696 0.731237C8.4196 0.274734 7.72467 0.0296066 7.00998 0.0399978H4.00998C3.57901 0.0359512 3.15223 0.124811 2.75869 0.300528C2.36515 0.476245 2.01409 0.734694 1.72941 1.05828C1.44473 1.38187 1.23311 1.76299 1.10897 2.17571C0.98482 2.58843 0.951058 3.02306 1.00998 3.45C1.54272 7.63938 3.45601 11.5319 6.44763 14.5126C9.43925 17.4934 13.3387 19.3925 17.53 19.91H17.91C18.6474 19.9111 19.3594 19.6405 19.91 19.15C20.2263 18.867 20.4791 18.5202 20.6514 18.1323C20.8238 17.7445 20.9119 17.3244 20.91 16.9V13.9C20.8977 13.2054 20.6448 12.5366 20.1943 12.0077C19.7439 11.4788 19.1238 11.1226 18.44 11ZM18.94 17C18.9398 17.142 18.9094 17.2823 18.8508 17.4116C18.7921 17.5409 18.7066 17.6563 18.6 17.75C18.4886 17.847 18.358 17.9194 18.2167 17.9625C18.0754 18.0056 17.9266 18.0184 17.78 18C14.0349 17.5198 10.5562 15.8065 7.89269 13.1303C5.22917 10.4541 3.53239 6.96733 3.06998 3.22C3.05406 3.07352 3.06801 2.92533 3.11098 2.78439C3.15395 2.64345 3.22505 2.51269 3.31998 2.4C3.41369 2.29333 3.52904 2.20784 3.65836 2.14921C3.78767 2.09059 3.92799 2.06018 4.06998 2.06H7.06998C7.30253 2.05482 7.5296 2.13088 7.71212 2.27507C7.89464 2.41926 8.02119 2.62257 8.06998 2.85C8.10998 3.12333 8.15998 3.39333 8.21998 3.66C8.3355 4.18714 8.48924 4.70518 8.67998 5.21L7.27998 5.86C7.16028 5.91492 7.0526 5.99294 6.96314 6.08959C6.87367 6.18624 6.80418 6.29961 6.75865 6.42319C6.71312 6.54677 6.69245 6.67813 6.69783 6.80972C6.7032 6.94131 6.73452 7.07054 6.78998 7.19C8.22918 10.2728 10.7072 12.7508 13.79 14.19C14.0334 14.29 14.3065 14.29 14.55 14.19C14.6747 14.1454 14.7893 14.0765 14.8871 13.9872C14.985 13.8979 15.0641 13.7901 15.12 13.67L15.74 12.27C16.2569 12.4549 16.7846 12.6085 17.32 12.73C17.5866 12.79 17.8566 12.84 18.13 12.88C18.3574 12.9288 18.5607 13.0553 18.7049 13.2379C18.8491 13.4204 18.9252 13.6475 18.92 13.88L18.94 17Z"
                    fill="#5B7E37"
                  />
                </svg>
                <a href="tel:+97059550331" class="phone-number">
                  +97059550331
                </a>
              </div>
              <div class="divider"></div>

              <div class="social-icons">
                <a href="#" class="social-icon"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a href="#" class="social-icon"
                  ><i class="fab fa-youtube"></i
                ></a>
                <a href="#" class="social-icon"
                  ><i class="fa-brands fa-linkedin"></i
                ></a>
                <a href="#" class="social-icon"
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>

              <div class="language-selector">
                <a href="#" class="language">EN</a>
              </div>
            </div>
            <nav class="main-nav" id="main-nav">
              <ul class="nav-list">
                <li class="nav-item {{ Route::is('front.home') ? 'active' : '' }}"><a href="{{ route('front.home') }}">HOME</a></li>
                <li class="nav-item dropdown  {{ Route::is('front.about', 'front.vision','front.mission','front.value') ? 'active' : '' }}">
                  <a href="#"
                    >AGRICULTURAL <i class="fas fa-chevron-down"></i
                  ></a>
                  <ul class="dropdown-menu-p">
                    <div class="dropdown-menu-p-list">
                      <li><a href="{{ route('front.about') }}">About Us</a></li>
                      <li><a href="{{ route('front.vision') }}">Vision</a></li>
                      <li><a href="{{ route('front.mission') }}">Mission </a></li>
                      <li><a href="{{ route('front.value') }}">Value </a></li>
                    </div>
                  </ul>
                </li>
                <li class="nav-item dropdown {{ Route::is('front.news', 'front.article') ? 'active' : '' }}">
                  <a href="#"
                    >MEDIA CENTRE <i class="fas fa-chevron-down"></i
                  ></a>
                  <ul class="dropdown-menu-p">
                    <div class="dropdown-menu-p-list">
                      <li><a href="{{ route('front.news') }}">News </a></li>
                      <li><a href="{{ route('front.article') }}">Articles</a></li>
                      <li><a href="#">Activities</a></li>
                      <li><a href="#">Photo Album</a></li>
                    </div>
                  </ul>
                </li>
                <li class="nav-item dropdown {{ Route::is('front.program', 'front.project') ? 'active' : '' }}">
                  <a href="#"
                    >PROGRAMS AND PROJECTS <i class="fas fa-chevron-down"></i
                  ></a>
                  <ul class="dropdown-menu-p">
                    <div class="dropdown-menu-p-list">
                      <li><a href="{{ route('front.program') }}">Program</a></li>
                      <li><a href="{{ route('front.project') }}">Projects</a></li>
                    </div>
                  </ul>
                </li>
                <li class="nav-item dropdown {{ Route::is('front.governance', 'front.boardOfDirectore') ? 'active' : '' }}">
                  <a href="#">GOVERNANCE <i class="fas fa-chevron-down"></i></a>
                  <ul class="dropdown-menu-p">
                    <div class="dropdown-menu-p-list">
                      <li><a href="{{ route('front.governance') }}">General Assembly</a></li>
                      <li>
                        <a href="{{ route('front.boardOfDirectore') }}">Board of Directors</a>
                      </li>
                    </div>
                  </ul>
                </li>
                <li class="nav-item {{ Route::is('front.partners') ? 'active' : '' }}">
                  <a href="{{ route('front.partners') }}">OUR PARTNERS</a>
                </li>
                <li class="nav-item"><a href="#">CONTACTS</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- End  Header Section -->

    @yield('content')
    <!--Start Footer section -->
    <footer class="footer">
      <div class="footer-content">
        <div class="footer-rights">
          <p>
            All Rights Reserved &copy;
            <a href="https://www.agricultural.com" target="_blank"
              >agricultural.com</a
            >
            | Terms and conditions apply!
          </p>
        </div>
        <div class="footer-social">
          <a href="#" target="_blank">
            <i class="fa-brands fa-facebook"></i>
          </a>
          <a href="#" target="_blank">
            <i class="fa-brands fa-instagram"></i>
          </a>
          <a href="#" target="_blank">
            <i class="fa-brands fa-youtube"></i>
          </a>
          <a href="#" target="_blank">
            <i class="fa-brands fa-linkedin"></i>
          </a>
          <a href="#" target="_blank">
            <i class="fa-brands fa-twitter"></i>
          </a>
        </div>
      </div>
    </footer>
    <!--End Footer section -->

    <!-- add swiper  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('front/js/home.js') }}"></script>
    <script src="{{ asset('front/js/main.js') }}"></script>
  </body>
</html>
