<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- CSS -->
    
    <title>Chabikathi – Anything At Anywhere</title>
    <link rel="icon" href="{{ asset('asset/fontend/asset/img/Logo-2.png')}}" sizes="16x16">
    <!-- Script -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    @yield('css')
  </head>
<body>
<div class="main-page">
  <header class="main-header stikybar">
    <!-- Top Header Section -->
    <section class="top-header bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6 left-side-top">
            <div class="phone-details-top">
              <i class="fas fa-phone"></i>
              <span>01600000000</span>
            </div>
            <div class="mail-details-top">
              <i class="far fa-envelope"></i>
              <span>sapport@chabikathi.com</span>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 right-side-top">
            <div class="sell-details-top">
              <i class="far fa-store"></i>
              <span>Sell on Chabikathi</span>
            </div>
            <div class="app-details-top">
              <!-- <img class="img-fluid" src="asset/img/Logo-2.png"> -->
              <i class="fas fa-mobile-alt"></i>
              <span>Save big on our App!</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Top Header Section -->
    <!-- Header Section -->
    <section class="main-top-header bg-white">
      <div class="container">
        <div class="row">
          <!-- Header Logo Section -->
          <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 site-header-logo">
            <a href="/">
              <img src="{{ asset('asset/fontend/asset/img/Logo-2.png')}}">
            </a>
          </div>
          <!-- End Header Logo Section -->
          <!-- Header Search Section -->
          <div class="col-9 col-sm-9 col-md-6 col-lg-7 col-xl-7 site-header-search">
            <div class="search-box-area">
              <div>
                <div class="search-box">
                  <div class="search-box-border">
                    <div class="search-box-border-select">
                      <div class="pr-5 s-container">
                        <div class="selecton-wrapper">
                          <div class="select " style="width: 150px;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span>product</span>
                            <span>
                              <i class="fas fa-chevron-down"></i>
                            </span>
                          </div>
                          <div class="selection-values dropdown-menu">
                            <ul>
                              <li value="product">Product</li>
                              <li value="shop">Shop</li>
                              <li value="brand">Brand</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="searching-area-wrapper">
                      <div class="ant-select-show-search ant-select-auto-complete ant-select">
                        <div class="ant-select-selection">
                          <ul>
                            <li class="ant-select-search">
                              <input placeholder="Search Product..." class="ant-input ant-input-lg" type="text" value="">
                                <button>
                                  <i class="fas fa-search"></i>
                                </button>
                              <span class="ant-select-search__field__mirror">&nbsp;</span>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Header Search Section -->
          <!-- Header icon Section -->
          <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2 site-header-cart">
            <div class="cart-logo-img">
              <img src="{{ asset('asset/fontend/asset/img/Logo-2.png')}}">
            </div>
            <div class="wish-icon">
              <i class="far fa-heart"></i>
            </div>
            <div class="cart-icon">
              <div class="dropdown">
                <i class="fas fa-shopping-bag">
                  <div class="dropdown-content">
                    <a href="#">My Account</a>
                    <a href="#">Login</a>
                  </div>
                </i>
            </div>
            <span class="cart-add">0</span>
            </div>
            <div class="profile-icon">
              <div class="dropdown">
                <i class="fas fa-user-circle">
                  <div class="dropdown-content">
                    <a href="#">My Account</a>
                    <a href="#">Login</a>
                  </div>
                </i>
            </div>
            </div>
          </div>
          <!-- End Header icon Section -->
        </div>
      </div>
    </section>
    <!-- End Header Section -->
    <section class="site-banner">
      <div class="container site-banner-container">
        <div class="row">
          <!-- Main-Category Section -->
          <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 sidebar-navigation">
            <div class="category-navigation d-shadow">
              <div data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-th-large" aria-hidden="true" style="color: #822328;"></i>
                <h2 class="category-navigation-title">Categories</h2>
                <i class="fas fa-chevron-down" aria-hidden="true"></i>
              </div>
              <div class="category-navigation-menu dropdown-menu">
                <ul>
                  <li><a href="/">Automotive &amp; Motorbike</a></li>
                  <li><a href="/">Automotive &amp; Motorbike</a></li>
                  <li><a href="/">Automotive &amp; Motorbike</a></li>
                  <li><a href="/">Automotive &amp; Motorbike</a></li>
                  <li><a href="/">Automotive &amp; Motorbike</a></li>
                  <li><a href="/">Automotive &amp; Motorbike</a></li>
                  <li><a href="/">Automotive &amp; Motorbike</a></li>
                  <li><a href="/">Automotive &amp; Motorbike</a></li>
                  <li><a href="/">Automotive &amp; Motorbike</a></li>
                  <li><a href="/">Automotive &amp; Motorbike</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End Main-Category Section -->
          <!-- Main Slider Section -->
          <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 home-banner">
                <!-- Category Box Section -->
                <div class="category-box">
                  <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 box">
                    <img src="{{ asset('asset/fontend/asset/img/voucher.svg')}}">
                    <span><a href="/">Voucher Shop</a></span>
                  </div>
                  <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 box">
                    <img src="{{ asset('asset/fontend/asset/img/prime.svg')}}">
                    <span><a href="/">Prime Shops</a></span>
                  </div>
                  <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 box">
                    <img src="{{ asset('asset/fontend/asset/img/rocket.svg')}}">
                    <span><a href="/">Dhamaka Rocket</a></span>
                  </div>
                  <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 box">
                    <img src="{{ asset('asset/fontend/asset/img/offers.jpeg')}}">
                    <span><a href="/">Dhamaka Offers</a></span>
                  </div>
                </div>
                <!-- End Category Box Section -->
          </div>
        </div>
      </div>
    </section>
  </header>



@yield('content')
@include('fontend.layouts.footer')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{ asset('asset/fontend/asset/js/scroll.js')}}"></script>
@yield('script')
</body>
</html>