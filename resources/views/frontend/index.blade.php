<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="images/favicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Stone Beads</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />
    <!-- font awesome style -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="{{ route('home')}}">
                    <span>Stone Beads</span>
                </a>
                <div class="custom_menu-btn">
                    <button onclick="openNav()">
                        <span class="s-1"></span>
                        <span class="s-2"></span>
                        <span class="s-3"></span>
                    </button>
                    <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="overlay-content">
                            <a href="{{ route('home') }}">Home</a>
                            <a href="{{ url('shop') }}">Shop</a>
                            <!-- <a href="cart.html">Cart</a> -->

                            @auth
                            @if (Auth::user()->isAdmin = 1)
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                            @endif
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @else
                            <a href="{{ url('/login') }}">Login</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }

        window.onload = function() {
            // ตรวจสอบการล็อกอินของผู้ใช้
            fetch('/api/user/status')
                .then(response => response.json())
                .then(data => {
                    if (data.loggedIn) {
                        document.querySelector('.overlay-content a[href="login.html"]').innerText = 'Profile';
                        document.querySelector('.overlay-content a[href="login.html"]').href = 'profile.html';
                    }
                });

            // ตรวจสอบจำนวนสินค้าในตะกร้า
            fetch('/api/cart/count')
                .then(response => response.json())
                .then(data => {
                    if (data.count > 0) {
                        document.querySelector('.overlay-content a[href="cart.html"]').innerText = `Cart (${data.count})`;
                        2
                    }
                })
                .catch(error => console.log('Error:', error));
        };
    </script>

    <!-- end header section -->

    <!--Start of Tawk.to Script-->
    <!-- <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/66d91e3fea492f34bc0dd3bb/1i701saor';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script> -->
    <!--End of Tawk.to Script-->

    <!-- slider section -->
    <section class="slider_section position-relative" id="sliderSection">
        <div class="slider_bg_box" id="sliderBgBox">
            <img src="{{ asset('assets/images/i1.png') }}" alt="">
        </div>
        <div class="slider_bg" id="sliderBg"></div>
        <div class="container" id="sliderContainer">
            <div class="col-md-9 col-lg-8" id="sliderContent">
                <div class="detail-box" id="sliderDetailBox">
                    <h1 id="sliderTitle">
                        Stone Beads
                    </h1>
                    <p id="sliderDescription">
                        Sell ​​and reserve antique jewelry such as hats, rings, necklaces and bracelets.
                    </p>
                    <div>
                        <a href="{{ route('shop') }}" class="slider-link" id="shopNowLink">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end slider section -->

    <!-- shop section -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Latest Products
                </h2>
            </div>
            <div class="row">

                @foreach ($product as $item)

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="{{ asset('' . $item->image) }}" alt="{{ $item->name }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    {{ $item->name }}
                                </h6>
                                <h6>
                                    Price
                                    <span>
                                        ฿ {{ $item->price }}
                                    </span>
                                </h6>
                                <a href="https://m.me/407980359065118" target="_blank"><button>สนใจสินค้า</button></a>
                            </div>
                            <div class="new">
                                <span>
                                    New
                                </span>
                            </div>
                        </a>
                    </div>
                </div>

                @endforeach

            </div>
            <div class="btn-box">
                <a href="{{ route('shop') }}">
                    View All Products
                </a>
            </div>
        </div>
    </section>

    <!-- end shop section -->

    <!-- blog section -->

    <section class="blog_section ">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Latest From Blog
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/bb1.png') }}" alt="">
                            <h4 class="blog_date">
                                8 <br>
                                July
                            </h4>
                        </div>
                        <div class="detail-box">
                            <h5>
                                Miss Queen International 2022 Thank you ☺️
                            </h5>

                            <a href="https://www.instagram.com/p/CfvgplLvXBK/?img_index=1">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/bb2.png') }}" alt="">
                            <h4 class="blog_date">
                                24 <br>
                                Jun
                            </h4>
                        </div>
                        <div class="detail-box">
                            <h5>
                                ไหมถัก ใส่ได้ทั้งมือและเท้า เข้ากั๊น.....เข้ากัน
                            </h5>

                            <a href="https://www.instagram.com/p/CBztl92JKXu/?img_index=1">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>

    <!-- info section -->
    <section class="info_section layout_padding2">
        <div class="container">
            <div class="row info_main_row">
                <div class="col-md-2 col-lg-2">
                    <div class="info_links">
                        <h4>
                            Menu
                        </h4>
                        <div class="info_links_menu">
                            <a href="{{ route('home') }}">Home</a>
                            <a href="{{ route('shop') }}">Shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-8">
                    <div class="info_detail">
                        <h4>
                            About Us
                        </h4>
                        <p class="mb-0">
                            Discover unique antique jewelry at StoneBeads. We offer a curated selection of hats, rings, necklaces, and bracelets, each with a touch of vintage charm.
                        </p>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2">
                    <h4>
                        Contact Us
                    </h4>
                    <div class="info_contact">
                        <a href="https://www.google.com/maps/place/Stone+Beads+JJ+Mall/@13.802053,100.5468831,17z/data=!3m1!4b1!4m6!3m5!1s0x30e29d95917dc0df:0x896c722565aeffc9!8m2!3d13.802053!4d100.549458!16s%2Fg%2F119x4z67_?entry=ttu&g_ep=EgoyMDI0MDkxMS4wIKXMDSoASAFQAw%3D%3D">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                                Location
                            </span>
                        </a>

                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                            0970795678
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQery -->
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
