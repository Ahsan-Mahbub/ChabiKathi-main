<header class="main-header stikybar">
    <!-- Top Header Section -->
    @include('fontend.layouts.topheader')
    <!-- End Header Section -->
    @php($categories = \App\Models\Category::with(['parent'])->where('status',1)->get()->toArray())
    <section class="site-banner">
      <div class="container site-banner-container">
        <div class="row">
          <!-- Main-Category Section -->
          <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 sidebar-navigation">
            <div class="category-navigation d-shadow">
              <div data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-th-large" aria-hidden="true" style="color: #822328;"></i>
                <h2 class="category-navigation-title sitcky-title">Categories</h2>
                <i class="fas fa-chevron-down" aria-hidden="true"></i>
              </div>
              <ul class="category-navigation-menu dropdown-menu">
                @foreach($categories as $category)
                  <div class="dropdown main_cat">    
                    <li>
                      <a href="/category/{{($category['slug'])}}">
                        <div>
                          {{$category['category_name']}}
                        </div>
                      </a>
                      <div class="dropdown-content">
                        @if($category['parent'])
                        @foreach($category['parent'] as $subcategory)
                        <a href="/sub-category/{{($subcategory['slug'])}}">{{$subcategory['sub_category_name']}}</a>
                        @endforeach
                        @endif
                      </div>
                    </li>
                  </div>
                  @endforeach
              </ul>
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
                    <span><a href="/">Rocket</a></span>
                  </div>
                  <div class="col-md-3 col-sm-6 col-lg-3 col-xl-3 box">
                    <img src="{{ asset('asset/fontend/asset/img/offers.jpeg')}}">
                    <span><a href="/">Offers</a></span>
                  </div>
                </div>
                <!-- End Category Box Section -->
          </div>
        </div>
      </div>
    </section>
    <!-- Home StickyBar Section -->
    <section class="header-nav sc-fixed-nav">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 sidebar-navigation">
            <div class="category-navigation d-shadow">
              <div data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-th-large" aria-hidden="true" style="color: #822328;"></i>
                <h2 class="category-navigation-title sitcky-title">Categories</h2>
                <i class="fas fa-chevron-down" aria-hidden="true"></i>
              </div>
              <ul class="category-navigation-menu dropdown-menu">
                @foreach($categories as $category)
                  <div class="dropdown main_cat">    
                    <li>
                      <a href="/category/{{($category['slug'])}}">
                        <div>{{$category['category_name']}}</div>
                      </a>
                      <div class="dropdown-content">
                        @if($category['parent'])
                        @foreach($category['parent'] as $subcategory)
                        <a href="/sub-category/{{($subcategory['slug'])}}">{{$subcategory['sub_category_name']}}</a>
                        @endforeach
                        @endif
                      </div>
                    </li>
                  </div>
                  @endforeach
              </ul>
            </div>
          </div>
          <!-- Main Slider Section -->
          <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 home-banner">
                <!-- Category Box Section -->
                <div class="category-box">
                  <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 box">
                    <img src="{{ asset('asset/fontend/asset/img/voucher.svg')}}">
                    <span><a href="/">Voucher Shop</a></span>
                  </div>
                  <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 box">
                    <img src="{{ asset('asset/fontend/asset/img/prime.svg')}}">
                    <span><a href="/">Prime Shops</a></span>
                  </div>
                  <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 box">
                    <img src="{{ asset('asset/fontend/asset/img/rocket.svg')}}">
                    <span><a href="/">Rocket</a></span>
                  </div>
                  <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 box">
                    <img src="{{ asset('asset/fontend/asset/img/offers.jpeg')}}">
                    <span><a href="/">Offers</a></span>
                  </div>
                </div>
                <!-- End Category Box Section -->
          </div>
        </div>
      </div>
    </section>  
    <!-- Home StickyBar Section End -->
</header>
<!-- Home Page Silder With Category Section -->
<section class="site-banners ptb-20">
  <div class="container">
    <div class="row">
      <!-- Main-Category Section -->
      <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 sidebar-navigation">
        <div class="category-navigation d-shadow">
          <h2 class="category-navigation-title">Categories</h2>
          <ul class="category-navigation-menu">
            @foreach($categories as $category)
              <div class="dropdown main_cat">    
                <li>
                  <a href="/category/{{($category['slug'])}}">
                    <div>
                      {{$category['category_name']}}
                    </div>
                  </a>
                  <div class="dropdown-content">
                    @if($category['parent'])
                    @foreach($category['parent'] as $subcategory)
                    <a href="/sub-category/{{($subcategory['slug'])}}">{{$subcategory['sub_category_name']}}</a>
                    @endforeach
                    @endif
                  </div>
                </li>
              </div>
              @endforeach
          </ul>
        </div>
      </div>
      <!-- End Main-Category Section -->
      <!-- Main Slider Section -->
      <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 home-banner">
        <div class="slider" >
          <div class="slideshow-container">
            @php($sliders = \App\Models\Slider::where('status',1)->orderBy('id','desc')->get())
            @foreach($sliders as $slider)
              <div class="mySlides fade">
                <a href="">
                  <img src="/{{$slider->slider_img}}" style="width:100%">
                </a>
                <div class="text">
                  <h5>{{$slider->slider_name}}</h5>
                  <p>{{$slider->slider_title}}</p>
                </div>
                <span class="dot"></span> 
              </div>
            @endforeach
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
            <!-- End Main Slider Section -->
            <!-- Category Box Section -->
            <div class="category-box">
              <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 box">
                <img src="{{ asset('asset/fontend/asset/img/voucher.svg')}}">
                <span><a href="/">Voucher Shop</a></span>
              </div>
              <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 box">
                <img src="{{ asset('asset/fontend/asset/img/prime.svg')}}">
                <span><a href="/">Prime Shops</a></span>
              </div>
              <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 box">
                <img src="{{ asset('asset/fontend/asset/img/rocket.svg')}}">
                <span><a href="/">Rocket</a></span>
              </div>
              <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 box">
                <img src="{{ asset('asset/fontend/asset/img/offers.jpeg')}}">
                <span><a href="/">Offers</a></span>
              </div>
            </div>
            <!-- End Category Box Section -->
          </div>
      </div>
    </div>
  </div>
</section>
<!-- Home Page Slider With Category Section End -->