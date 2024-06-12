<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Ogani Template" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Allen's Furniture</title>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/elegant-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css" />
  </head>

  <body>
    <!-- Page Preloader -->
    <div id="preloader">
      <div class="loader"></div>
    </div>

    <!-- Hamburger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
      <div class="humberger__menu__logo">
        <a href="#"><img src="{{ asset('frontend/img/logo.png') }}" alt="" /></a>
      </div>
      <div class="humberger__menu__cart">
        <ul>
          <li>
            <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-shopping-bag"></i> <span>{{ $cartCount }}</span></a>
          </li>
        </ul>
        <div class="header__cart__price">item: <span>${{ $cartTotal }}</span></div>
      </div>
      <div class="humberger__menu__widget">
        @guest
          <div class="header__top__right__language">
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
          </div>
          <div class="header__top__right__auth" style="margin-left: 20px">
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
          </div>
        @else 
          <div class="header__top__right__language">
            <div class="header__top__right__auth">
              <a href=""><i class="fa fa-user"></i> {{ auth()->user()->username }}</a>
            </div>
            <span class="arrow_carrot-down"></span>
            <ul>
              <li><a href="#">Profile</a></li>
            </ul>

            </div>
            <div class="header__top__right__auth" style="margin-left: 20px">
              <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-user"></i> Logout</a>
              <form action="{{ route('logout') }}" id="logout-form" method="post">
                @csrf 
              </form>
            </div>
        @endguest
      </div>
      <nav class="humberger__menu__nav mobile-menu">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="{{ route('shop.index') }}">Shop</a></li>
          <li>
            <a href="#">Categories</a>
            <ul class="header__menu__dropdown">
              @foreach($menu_categories as $menu_category)
                <li><a href="{{ route('shop.index', $menu_category->slug) }}">{{ $menu_category->name }}</a></li>
              @endforeach
            </ul>
          </li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <div id="mobile-menu-wrap"></div>
      <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
      </div>
      <div class="humberger__menu__contact">
        <ul>
          <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
          <li>Free Shipping for all Order of $99</li>
        </ul>
      </div>
    </div>
    <!-- Hamburger End -->

    <!-- Header Section Begin -->
    <header class="header">
      <div class="header__top">
        <div class="container">
          <div class="row">
            <!-- Navbar Logo -->
            <div class="col-lg-2">
              <div class="header__logo " style="font-family: 'Roboto', sans-serif; font-weight: bold; font-size: 22px; padding-top:20px">
                <a href="/">Allen's Furniture</a>
              </div>
            </div>
            <!-- Navbar Items -->
            <div class="col-lg-6">
              <nav class="header__menu">
                <ul>
                  <li class="active"><a href="/">Home</a></li>
                  <li><a  href="{{ route('shop.index') }}">Shop</a></li>
                  <li>
                    <a href="#">Categories</a>
                    <ul class="header__menu__dropdown">
                      @foreach($menu_categories as $menu_category)
                        <li><a href="{{ route('shop.index', $menu_category->slug) }}">{{ $menu_category->name }}</a></li>
                      @endforeach
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- Navbar Login Logout -->
            <div class="col-lg-4 col-md-6">
              @guest
              <div class="header__top__right">
                    <div class="header__top__right__language header__top__right__auth btn btn-warning">
                      <a href="{{ route('login') }}"> Login</a>
                    </div>
                    <div class="header__top__right__auth btn btn-warning">
                      <a href="{{ route('register') }}"> Register</a>
                    </div>
                </div>
              @else 
              <div class="header__top__right">
                  <div class="header__top__right__auth">
                    <div class="header__cart mr-5">
                        <ul>
                          <li>
                            <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
                          </li>
                          <li>
                            <a href="{{ route('cart.index') }}"><i class="fa fa-shopping-bag"></i> <span>{{ $cartCount }}</span></a>
                          </li>
                          <li>
                            <a href=""><i class="fa fa-bell"></i> <span>{{ $cartCount }}</span></a>
                          </li>
                        </ul>
                      </div>

                      </div>
                      <div class="header__top__right__language header__top__right__auth">
                        <a class="d-inline" href="#"><i class="fa fa-user"></i> {{ auth()->user()->username }}</a>
                        <span class="arrow_carrot-down"></span>
                        <ul>
                          <li><a href="#">Profile</a></li>
                          <li><a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit()"> Logout</a>
                            <form action="{{ route('logout') }}" id="logout-form" method="post">
                              @csrf                   
                            </form></li>
                        </ul>
                      </div>
                  </div>
                  
              </div>
              @endguest
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header Section End -->



    @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer__about">
              <h6>Shop Info</h6>
              <ul>
                <li>Address: Tagudin Mabini Pangasinan</li>
                <li>Email: hello@colorlib.com</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
            <div class="footer__widget">
              <h6>Useful Links</h6>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
              <ul>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-12">
            <div class="footer__widget">
              <h6>Follow us on Our Social Media Accounts</h6>
              <p>For Latest Updates</p>
              <div class="footer__widget__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>

