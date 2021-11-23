@section('css')
<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/style.css')}}" />
<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/product.css')}}" />
<link rel="stylesheet" href="{{ asset('asset/fontend/zoomlense/css/foundation.css')}}" />
<!-- image popup css -->
<!-- <link type="text/css" rel="stylesheet" media="all" href="{{ asset('asset/fontend/zoomlense/magnific-popup/css/magnific-popup.css')}}" />
<link type="text/css" rel="stylesheet" media="all" href="{{ asset('asset/fontend/zoomlense/fancybox/source/jquery.fancybox.css')}}" /> -->
<script src="{{ asset('asset/fontend/zoomlense/js/vendor/jquery.js')}}"></script>
<!-- xzoom plugin here -->
<script type="text/javascript" src="{{ asset('asset/fontend/zoomlense/dist/xzoom.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('asset/fontend/zoomlense/dist/xzoom.css')}}" media="all" />
<!-- image popup js -->
<!-- <script type="text/javascript" src="{{ asset('asset/fontend/zoomlense/fancybox/source/jquery.fancybox.js')}}"></script>
<script type="text/javascript" src="{{ asset('asset/fontend/zoomlense/magnific-popup/js/magnific-popup.js')}}"></script>  -->   
@endsection
@extends('fontend.layouts.app')
@section('content')
<div class="ex-padding">
</div>
<!-- Single Product Image Section -->
  <section class="single-image">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-9">
          <div class="product-infos-area">
            <div class="row">
              <div class="product-image-display col-sm-12 col-md-5">
                <div class="xzoom-container">
                  <div class="image-zoom-in">
                    <img class="xzoom4" style="width: 100%!important" id="xzoom-fancy" src="/{{$product->product_img}}" xoriginal="/{{$product->product_img}}" />
                  </div>
                  <div class="xzoom-thumbs">
                    <a href="/{{$product->product_img}}"><img class="xzoom-gallery4" width="80" src="/{{$product->product_img}}"  xpreview="/{{$product->product_img}}" title="The description goes here"></a>
                    <a href="/{{$product->product_img_2}}"><img class="xzoom-gallery4" width="80" src="/{{$product->product_img_2}}" title="The description goes here"></a>
                    <a href="/{{$product->product_img_3}}"><img class="xzoom-gallery4" width="80" src="/{{$product->product_img_3}}" title="The description goes here"></a>
                  </div>
                </div>
              </div>
              <div class="product-details-section col-sm-12 col-md-7">
                <div class="product-view-single-product-area-r">
                  <div class="dev-flex-sb">
                    <h3 class="small-title mb-10">{{$product->product_name}}</h3>
                    <div class="d-shadow d-radius p-2 wishlist-icon">
                      <i class="far fa-heart"></i>
                    </div>
                  </div>
                  <div class="shop-name mb-10 text-success">
                    <span class="pdp-label">Stock Available</span>
                  </div>
                  @if($product->shop_id)
                  <div class="shop-name mb-10">
                    <span class="pdp-label">Shop: </span>
                    <a class="pdp-shop-link" href="/">{{$product->shop? $product->shop->shop_name : 'No Shop'}}</a>
                  </div>
                  @endif
                  @if($product->brand_id)
                  <div class="shop-name mb-10">
                    <span class="pdp-label">Brand: </span>
                    <a class="pdp-shop-link" href="/">{{$product->brand? $product->brand->brand_name : 'No Brand'}}</a>
                  </div>
                  @endif
                  <div class="shop-name mb-10">
                    <span class="pdp-label">Categories: </span>
                    <a class="pdp-shop-link" href="/product/{{$product->category->slug}}">{{$product->category? $product->category->category_name : 'No Category'}}</a>
                  </div>
                  <div class="shop-name mb-10">
                    <span class="pdp-label">SKU: </span>
                    <a class="pdp-shop-link">{{$product->sku}}</a>
                  </div>
                  <div class="row">
                    <div class="col-md-6 col-12">
                      <div class="shop-name mb-10">
                        <span class="pdp-label">Color: &nbsp;</span>
                          <select class="form-control" id="exampleFormControlSelect1">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="shop-name mb-10">
                        <span class="pdp-label">Color: &nbsp;</span>
                          <select class="form-control" id="exampleFormControlSelect1">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                      </div>
                    </div>
                  </div>
                  <!--  -->
                  <div class="product-view-single-product-area-r-quantity">
                    <form action="#">
                      <div class="attr-wrapper">
                        <div class="options">
                          <div class="product-view-single-product-area-r-price mb-20 shop-name">
                            <span class="pdp-label">Price: &nbsp;</span>
                            <?php
                              if($product->discounted_price)
                              {
                                ?>
                                <span class="new-price">৳ {{$product->discounted_price}}</span>
                                <span class="old-price">৳ {{$product->price}}</span>
                                <?php
                              }else{
                                ?>
                                <span class="new-price">৳ {{$product->price}}</span>
                                <?php
                              }
                            ?>
                            <?php
                              if($product->percentage){
                                ?>
                                <span class="new-price discount-tag-in-percent">- {{$product->percentage}}% OFF</span>
                                <?php
                              }
                            ?>

                          </div>
                            <div class="quantity dev-flex-l mb-20">
                              <label>Quantity</label>
                              <div class="inputArea">
                                <div class="decrease dev-flex" type="button" value="-" id="moins" onclick="minus()">-</div>
                                <input type="text" class="input-text" readonly="" value="1" id="count">
                                <div type="button" value="+" class="increase dev-flex" id="plus" onclick="plus()">+</div>
                              </div>
                            </div>

                            <div class="button-section">
                              <button type="button" class="btn btn-danger mr-10 mt-10 addToCart">Add to Cart</button>
                              <!-- <button type="button" class="btn btn-info mr-10 mt-10 addToCart">Add to Wish List</button> -->
                              <button type="button" class="btn btn-warning button-reverse button mt-10 mr-10">Buy Now</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="product-delivery-and-return">
              <div class="delivery-and-return-inner">
                <ul class="delivery-options delivery">
                  <li>
                    <p class="title">
                      <b class="pr-5">Note:</b>Shipping charges will be calculated based on the number of items, item type, weight and volume.
                      <a href="/" target="_blank" class="highlighted-txt">More info...</a>
                    </p>
                  </li>
                  <li>
                    <div class="details">
                      <p class="title">Cash on Delivery available</p>
                    </div>
                  </li>
                </ul>
                <div class="product-view-single-product-area-r-sharing mt-30">
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Single Product Image Section -->
  <!-- End Header Section -->
  <!-- Details and Review Section -->
  <section class="description-and-review">
    <div class="container">
      <div class="row">
        <div class="description-and-review-tab">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="description-and-review-tab-content mb-30">
              <div class="description-and-review-tab-content-menu">
                <ul class="nav nav-inline">
                  <li><button class="tablinks tab" onclick="openCity(event, 'Description')">Description</button></li>
                  <li><button class="tablinks tab" onclick="openCity(event, 'Reviews')">Reviews</button></li>
                  <li><button class="tablinks tab" onclick="openCity(event, 'Comments')">Comments</button></li>
                  <!-- <li><button class="tablinks tab-active tab" onclick="openCity(event, 'Warranty')">Return and Warranty Policy</button></li> -->
                </ul>
              </div>
              <div class="desc-section">
                <div id="Description" class="tabcontent">
                  <div class="container">
                    {!! $product->product_desc !!}
                  </div>
                </div>

                <div id="Reviews" class="tabcontent">
                  <h3>Paris</h3>
                  <p>Paris is the capital of France.</p> 
                </div>

                <div id="Comments" class="tabcontent">
                  <div class="col-md-6">
                    <div class="container">
                      <div class="row">
                        <form>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="name">User Name</label>
                              <input type="text" class="form-control" id="name" placeholder="User Name...">
                            </div>
                            <div class="form-group col-md-12">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" id="email" placeholder="User Email...">
                            </div>
                            <div class="form-group col-md-12">
                              <label for="comment">Comments</label>
                              <textarea type="text" class="form-control" id="comment"></textarea>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary comment-button">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- <div id="Warranty" class="tabcontent">
                  <h3>Tokyo</h3>
                  <p>Tokyo is the capital of Japan.</p>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Details and Review Section -->
  <!-- Related Product Section -->
  @if($related_product)
  <section class="product-part">
      <div class="container">
          <div class="product-title dev-flex-sb">
            <h2>Related Product Section</h2>
          </div>
        <div class="row">
          <div class="col-md-12">
            @foreach($related_product as $related)
            <div class="col-md-2 product-box cat-box">
              <a href="/product/{{$related->slug}}">
                <div class="product-img">
                  <img src="/{{$related->product_img}}">
                </div>
                <span class="product-name">{{$related->product_name}}</span>
                <div class="text-center con-price">
                  <?php
                    if ($related->discounted_price) {
                      ?>
                        <span class="present-price">৳ {{$related->discounted_price}}</span>
                        <span class="previous-price">৳ {{$related->price}}</span>
                      <?php
                    }else{
                      ?>
                      <span class="present-price">৳ {{$related->price}}</span>
                      <?php
                    }
                  ?>
                </div>


                <?php
                if ($related->percentage) {
                  ?>
                  <span class="discount-tag-in-percent">- {{$related->percentage}}% OFF</span>
                  <?php
                }
              ?>
              <small class="in-stock">Stock Available</small>
              </a>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    @endif
  <!-- End Related Product Section -->

<script src="{{ asset('asset/fontend/zoomlense/js/foundation.min.js')}}"></script>
<script src="{{ asset('asset/fontend/zoomlense/js/setup.js')}}"></script>
@endsection
@section('script')
<script src="{{ asset('asset/fontend/asset/js/zoomimage.js')}}"></script>
<script src="{{ asset('asset/fontend/asset/js/tabcontent.js')}}"></script>
<script src="{{ asset('asset/fontend/asset/js/countdown.js')}}"></script>

<script type="text/javascript">
  $('.addToCart').click(function(){
    let product_info = $(this).data('id');
    console.log(product_info);
  })
</script>
@endsection