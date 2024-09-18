<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ACCEPT DESIGN co.,Ltd.</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('img/logo.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
     Template Name: Sailo
     Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
     Updated: Aug 07 2024 with Bootstrap v5.3.3
     Author: BootstrapMade.com
    *License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
    <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
      <img src="{{ asset('img/logo.png') }}" alt="">
      <h1 class="sitename">ACCEPT <span style="color: rgb(0, 0, 0);">Design</span></h1>
    </a>
    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{ route('home') }}">หน้าแรก</a></li>
        <li><a href="{{ route('gallery') }}"><span>อัลบัมการจัดงาน</span></a></li>
        <li><a href="{{ route('news') }}">ข่าวสารบริษัท</a></li>
        <li class="dropdown"><a href="#footer"><span>ช่องทางการติดต่อ</span></a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
    <!-- Conditionally show the Dashboard button and hide the Login button -->
    @if(Auth::check())
      <!-- User is logged in -->
      @if(Auth::user()->IsAdmin == 1)
        <a class="btn-dashboard" href="{{ route('dashboard') }}">แดชบอร์ด</a>
      @endif
      <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="btn-logout">ออกจากระบบ</button>
      </form>
    @else
      <!-- User is not logged in -->
      <a class="btn-login" href="{{ route('login') }}">ลงชื่อเข้าใช้งาน</a>
    @endif
  </div>
</header>

    @yield('content')

    <footer id="footer" class="footer dark-background">
        <div class="container footer-top">
          <div class="row gy-4">
            <!-- Left Column -->
            <div class="col-lg-4 col-md-6 footer-about">
              <a href="index.html" class="logo d-flex align-items-center">
                <span class="sitename">Accept Design co.,Ltd.</span>
              </a>
              <div class="footer-contact pt-3">
                <p>ตำแหน่งที่ตั้ง :</p>
                <p>W9HX+J2F ซอย หมู่บ้านบัวทองแลนด์ ซอย 3/16 ตำบล บางบัวทอง อำเภอบางบัวทอง นนทบุรี 11110</p>
                <p class="mt-3"><strong>เบอร์โทรศัพท์ :</strong> <span>0639419245</span></p>
                <p><strong>Email :</strong> <span>acceptdesign@gmail.com</span></p>
              </div>
              <div class="social-links d-flex mt-4">
                <a href="https://line.me/ti/p/iOzINGLQEY" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-line" viewBox="0 0 16 16">
                    <path d="M8 0c4.411 0 8 2.912 8 6.492 0 1.433-.555 2.723-1.715 3.994-1.678 1.932-5.431 4.285-6.285 4.645-.83.35-.734-.197-.696-.413l.003-.018.114-.685c.027-.204.055-.521-.026-.723-.09-.223-.444-.339-.704-.395C2.846 12.39 0 9.701 0 6.492 0 2.912 3.59 0 8 0M5.022 7.686H3.497V4.918a.156.156 0 0 0-.155-.156H2.78a.156.156 0 0 0-.156.156v3.486c0 .041.017.08.044.107v.001l.002.002.002.002a.15.15 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157m.791-2.924a.156.156 0 0 0-.156.156v3.486c0 .086.07.155.156.155h.562c.086 0 .155-.07.155-.155V4.918a.156.156 0 0 0-.155-.156zm3.863 0a.156.156 0 0 0-.156.156v2.07L7.923 4.832l-.013-.015v-.001l-.01-.01-.003-.003-.011-.009h-.001L7.88 4.79l-.003-.002-.005-.003-.008-.005h-.002l-.003-.002-.01-.004-.004-.002-.01-.003h-.002l-.003-.001-.009-.002h-.006l-.003-.001h-.004l-.002-.001h-.574a.156.156 0 0 0-.156.155v3.486c0 .086.07.155.156.155h.56c.087 0 .157-.07.157-.155v-2.07l1.6 2.16a.2.2 0 0 0 .039.038l.001.001.01.006.004.002.008.004.007.003.005.002.01.003h.003a.2.2 0 0 0 .04.006h.56c.087 0 .157-.07.157-.155V4.918a.156.156 0 0 0-.156-.156zm3.815.717v-.56a.156.156 0 0 0-.155-.157h-2.242a.16.16 0 0 0-.108.044h-.001l-.001.002-.002.003a.16.16 0 0 0-.044.107v3.486c0 .041.017.08.044.107l.002.003.002.002a.16.16 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156Z"/>
                  </svg></a>
                <a href="https://www.facebook.com/acceptdesign89110?locale=th_TH">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                  </svg></a>
              </div>
            </div>

            <!-- Vertical Divider -->
            <div class="col-lg-1 d-none d-lg-block">
              <div class="border-start border-light" style="height: 90%;"></div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-7 text-end">
              <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d242.03101748403998!2d100.3976157!3d13.92903!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e28f003c8430b3%3A0xbb3149aad2480aa5!2sAccept%20Design%20Co.%2C%20Ltd.!5e0!3m2!1sth!2sth!4v1725334038885!5m2!1sth!2sth" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>
              </div><!-- End Google Maps -->
            </div>
          </div>
        </div>
      </footer>

      <!-- Scroll Top -->
      <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"/>
      </svg></a>

      <!-- Preloader -->
      <div id="preloader"></div>

      <!-- Vendor JS Files -->
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
      <script src="{{ asset('vendor/aos/aos.js') }}"></script>
      <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
      <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
      <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
      <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
      <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
      <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>

      <!-- Main JS File -->
      <script src="{{ asset('js/main.js') }}"></script>
