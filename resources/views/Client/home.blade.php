@extends('Client.layouts.master')
@section('title')
    home
@endsection
@section('content')
<div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-9 col-xs-12">
          <div class="home-tab">
            <ul class="nav home-nav-tabs home-product-tabs">
              <li class="active"><a href="#featured" data-toggle="tab" aria-expanded="false">Featured products</a></li>
              <li class="divider"></li>
              <li> <a href="#top-sellers" data-toggle="tab" aria-expanded="false">Top Sellers</a> </li>
            </ul>
            <div id="productTabContent" class="tab-content">
              <div class="tab-pane active in" id="featured">
                <div class="featured-pro">
                  <div class="slider-items-products">
                    <div id="featured-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4">
                        @foreach($products as $product)
                            <div class="product-item">
                              <div class="item-inner">
                                <div class="product-thumbnail">
                                    @if( $product->discount != 0)
                                     <div class="icon-sale-label sale-left">Sale</div>
                                     @else
                                     @endif
                                    <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                      <figure>
                                        <img class="first-img" src="{{ asset('uploads/product/'.$product->thumbnail) }} " alt="html template" style ="width: 350px, height:250px;">
                                      </figure>
                                      </a>
                                      <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                                    </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">{{ $product->name }}</a> </div>
                                    <div class="item-content">
                                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                      <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price"></span> {{ $product->price }}</span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="top-sellers">
                <div class="top-sellers-pro">
                  <div class="slider-items-products">
                    <div id="top-sellers-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4 ">
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="icon-sale-label sale-left">Sale</div>
                              <div class="icon-new-label new-right">New</div>
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="images/products/img03.jpg" alt="html template"> <img class="hover-img" src="Client/images/products/img03.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="icon-sale-label sale-left">Sale</div>
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="images/products/img08.jpg" alt="html template"> <img class="hover-img" src="images/products/img08.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="images/products/img01.jpg" alt="html template"> <img class="hover-img" src="images/products/img01.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="images/products/img04.jpg" alt="html template"> <img class="hover-img" src="images/products/img04.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="images/products/img05.jpg" alt="html template"> <img class="hover-img" src="images/products/img05.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="images/products/img06.jpg" alt="html template"> <img class="hover-img" src="images/products/img06.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Hot deal -->
        <div class="col-md-3 col-sm-4 col-xs-12 hot-products">
          <div class="hot-deal"> <span class="title-text">Hot deal</span>
            <ul class="products-grid">
              <li class="item">
                <div class="product-item">
                  <div class="item-inner">
                    <div class="product-thumbnail">
                      <div class="icon-hot-label hot-right">Hot</div>
                      <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                        <figure> <img class="first-img" src="images/products/img15.jpg" alt="html template"> <img class="hover-img" src="images/products/img15.jpg" alt="html template"></figure>
                        </a>
                        <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                      </div>
                      <div class="jtv-box-timer">
                        <div class="countbox_1 jtv-timer-grid"></div>
                      </div>
                      <div class="pr-info-area">
                        <div class="pr-button">
                          <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                          <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                          <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-xs-12">
        <div class="jtv-banner-box banner-inner">
          <div class="image"> <a class="jtv-banner-opacity" href="#"><img src="images/top-banner1.jpg" alt="html template"></a> </div>
          <div class="jtv-content-text">
            <h3 class="title">Save up 25%</h3>
            <span class="sub-title">Nice & Cleans</span> </div>
        </div>
      </div>
      <div class="col-sm-5 col-xs-12">
        <div class="jtv-banner-box">
          <div class="image"> <a class="jtv-banner-opacity" href="#"><img src="images/top-banner2.jpg" alt="html template"></a> </div>
          <div class="jtv-content-text">
            <h3 class="title">Powerful Stereo <span>Sound</span></h3>
            <span class="sub-title">You're future in the sound !</span> <a href="#" class="button">Buy Now</a> </div>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12">
        <div class="jtv-banner-box banner-inner">
          <div class="image"> <a class="jtv-banner-opacity" href="#"><img src="images/top-banner3.jpg" alt="html template"></a> </div>
          <div class="jtv-content-text">
            <h3 class="title">New Arrival</h3>
          </div>
        </div>
        <div class="jtv-banner-box banner-inner">
          <div class="image "> <a class="jtv-banner-opacity" href="#"><img src="images/top-banner4.jpg" alt="html template"></a> </div>
          <div class="jtv-content-text">
            <h3 class="title">Accessories</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="special-products">
      <div class="page-header">
        <h2>special products</h2>
      </div>
      <div class="special-products-pro">
        <div class="slider-items-products">
          <div id="special-products-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4">
              <div class="product-item">
                <div class="item-inner">
                  <div class="product-thumbnail">
                    <div class="icon-sale-label sale-left">Sale</div>
                    <div class="icon-new-label new-right">New</div>
                    <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                      <figure> <img class="first-img" src="images/products/img08.jpg" alt="html template"> <img class="hover-img" src="images/products/img08.jpg" alt="html template"></figure>
                      </a>
                      <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                    </div>
                    <div class="pr-info-area">
                      <div class="pr-button">
                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-item">
                <div class="item-inner">
                  <div class="product-thumbnail">
                    <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                      <figure> <img class="first-img" src="images/products/img13.jpg" alt="html template"> <img class="hover-img" src="images/products/img13.jpg" alt="html template"></figure>
                      </a>
                      <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                    </div>
                    <div class="pr-info-area">
                      <div class="pr-button">
                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box">
                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-item">
                <div class="item-inner">
                  <div class="product-thumbnail">
                    <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                      <figure> <img class="first-img" src="images/products/img09.jpg" alt="html template"> <img class="hover-img" src="images/products/img09.jpg" alt="html template"></figure>
                      </a>
                      <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                    </div>
                    <div class="pr-info-area">
                      <div class="pr-button">
                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box">
                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-item">
                <div class="item-inner">
                  <div class="icon-sale-label sale-left">Sale</div>
                  <div class="icon-new-label new-right">New</div>
                  <div class="product-thumbnail">
                    <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                      <figure> <img class="first-img" src="images/products/img12.jpg" alt="html template"> <img class="hover-img" src="images/products/img12.jpg" alt="html template"></figure>
                      </a>
                      <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                    </div>
                    <div class="pr-info-area">
                      <div class="pr-button">
                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-item">
                <div class="item-inner">
                  <div class="product-thumbnail">
                    <div class="icon-new-label new-left">New</div>
                    <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                      <figure> <img class="first-img" src="images/products/img05.jpg" alt="html template"> <img class="hover-img" src="images/products/img05.jpg" alt="html template"></figure>
                      </a>
                      <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                    </div>
                    <div class="pr-info-area">
                      <div class="pr-button">
                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box">
                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-item">
                <div class="item-inner">
                  <div class="product-thumbnail">
                    <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                      <figure> <img class="first-img" src="images/products/img06.jpg" alt="html template"> <img class="hover-img" src="images/products/img06.jpg" alt="html template"></figure>
                      </a>
                      <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                    </div>
                    <div class="pr-info-area">
                      <div class="pr-button">
                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="testimonials">
          <div class="slider-items-products">
            <div id="testimonials-slider" class="product-flexslider hidden-buttons home-testimonials">
              <div class="slider-items slider-width-col4 ">
                <div class="holder">
                  <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. </p>
                  <div class="thumb"> <img src="images/testimonials-img3.jpg" alt="testimonials img"> </div>
                  <strong class="name">John Doe</strong> <strong class="designation">CEO, Company</strong> </div>
                <div class="holder">
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                  <div class="thumb"> <img src="images/testimonials-img1.jpg" alt="testimonials img"> </div>
                  <strong class="name">Vince Roy</strong> <strong class="designation">CEO, Newspaper</strong> </div>
                <div class="holder">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud. </p>
                  <div class="thumb"> <img src="images/testimonials-img2.jpg" alt="testimonials img"> </div>
                  <strong class="name">John Doe</strong> <strong class="designation">CEO, ABC Softwear</strong> </div>
                <div class="holder">
                  <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
                  <div class="thumb"> <img src="images/testimonials-img4.jpg" alt="testimonials img"> </div>
                  <strong class="name">Vince Roy</strong> <strong class="designation">CEO, XYZ Softwear</strong> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="our-clients">
          <div class="slider-items-products">
            <div id="our-clients-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col6">
                <div class="item"> <a href="#"><img src="images/brand1.html" alt="Image"></a> <a href="#"><img src="images/brand2.png" alt="Image"></a> </div>
                <div class="item"> <a href="#"><img src="images/brand3.png" alt="Image"></a> <a href="#"><img src="images/brand4.png" alt="Image"></a> </div>
                <div class="item"> <a href="#"><img src="images/brand5.png" alt="Image"></a> <a href="#"><img src="images/brand6.png" alt="Image"></a> </div>
                <div class="item"> <a href="#"><img src="images/brand7.png" alt="Image"></a> <a href="#"><img src="images/brand3.png" alt="Image"></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div id="latest-news" class="news">
      <div class="page-header">
        <h2>Latest news</h2>
      </div>
      <div class="slider-items-products">
        <div id="latest-news-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6">
            <div class="item">
              <div class="jtv-blog">
                <div class="blog-img"> <a href="single_post.html"> <img class="primary-img" src="images/blog-img1.jpg" alt="html template"></a> <span class="moretag"></span> </div>
                <div class="blog-content-jtv">
                  <h2><a href="single_post.html">Sed do eiusmod sit amet</a></h2>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                  <span class="blog-likes"><i class="fa fa-heart"></i> 149 likes</span> <span class="blog-comments"><i class="fa fa-comment"></i> 80 comments</span>
                  <div class="blog-action"> <span>Jan, 20, 2016</span> <a class="read-more" href="single_post.html">read more</a> </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="jtv-blog">
                <div class="blog-img"> <a href="single_post.html"><img class="primary-img" src="images/blog-img2.jpg" alt="html template"></a> </div>
                <div class="blog-content-jtv">
                  <h2><a href="single_post.html">Lorem ipsum dolor sit amet</a></h2>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                  <span class="blog-likes"><i class="fa fa-heart"></i> 89 likes</span> <span class="blog-comments"><i class="fa fa-comment"></i> 10 comments</span>
                  <div class="blog-action"><span>May, 25, 2016</span> <a class="read-more" href="single_post.html">read more</a> </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="jtv-blog">
                <div class="blog-img"> <a href="single_post.html"><img class="primary-img" src="images/blog-img3.jpg" alt="html template"></a> </div>
                <div class="blog-content-jtv">
                  <h2><a href="single_post.html">Integer scelerisque diam vitae</a></h2>
                  <p>Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis. Maecenas eu enim in lorem</p>
                  <span class="blog-likes"><i class="fa fa-heart"></i> 125 likes</span> <span class="blog-comments"><i class="fa fa-comment"></i> 30 comments</span>
                  <div class="blog-action"><span>April, 12, 2016</span> <a class="read-more" href="single_post.html">read more</a> </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="jtv-blog">
                <div class="blog-img"> <a href="single_post.html"> <img class="primary-img" src="images/blog-img1.jpg" alt="html template"></a> <span class="moretag"></span> </div>
                <div class="blog-content-jtv">
                  <h2><a href="single_post.html">Sed do eiusmod sit amet</a></h2>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                  <span class="blog-likes"><i class="fa fa-heart"></i> 149 likes</span> <span class="blog-comments"><i class="fa fa-comment"></i> 80 comments</span>
                  <div class="blog-action"> <span>Jan, 20, 2016</span> <a class="read-more" href="single_post.html">read more</a> </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="jtv-blog">
                <div class="blog-img"> <a href="single_post.html"> <img class="primary-img" src="images/blog-img3.jpg" alt="html template"></a> <span class="moretag"></span> </div>
                <div class="blog-content-jtv">
                  <h2><a href="single_post.html">Sed do eiusmod sit amet</a></h2>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                  <span class="blog-likes"><i class="fa fa-heart"></i> 149 likes</span> <span class="blog-comments"><i class="fa fa-comment"></i> 80 comments</span>
                  <div class="blog-action"> <span>Jan, 20, 2016</span> <a class="read-more" href="single_post.html">read more</a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom-banner-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4"> <a href="#" class="bottom-banner-img"><img src="images/ads-04.jpg" alt="bottom banner"> <span class="banner-overly"></span>
          <div class="bottom-img-info">
            <h3>Electronic</h3>
            <h6>Sed diam nonummy nibh euismod tincidunt</h6>
            <span class="shop-now-btn">Shop Now</span> </div>
          </a> </div>
        <div class="col-md-8 col-sm-8"> <a href="#" class="bottom-banner-img last"><img src="images/ads-05.jpg" alt="bottom banner"> <span class="banner-overly last"></span>
          <div class="bottom-img-info last">
            <h3>New Collection</h3>
            <h6>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h6>
            <span class="shop-now-btn">Shop Now</span> </div>
          </a> </div>
      </div>
    </div>
  </div>
  <div class="jtv-category-area">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="jtv-single-cat">
            <h2 class="cat-title">Top Rated</h2>
            <div class="jtv-product">
              <div class="product-img"> <a href="single_product.html"> <img src="images/products/img10.jpg" alt="html template"> <img class="secondary-img" src="images/products/img10.jpg" alt="html template"> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="jtv-product jtv-cat-margin">
              <div class="product-img"> <a href="single_product.html"> <img src="images/products/img07.jpg" alt="html template"> <img class="secondary-img" src="images/products/img08.jpg" alt="html template"> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                <div class="price-box">
                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="jtv-product jtv-cat-margin">
              <div class="product-img"> <a href="single_product.html"> <img src="images/products/img08.jpg" alt="html template"> <img class="secondary-img" src="images/products/img09.jpg" alt="html template"> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span> </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="jtv-single-cat">
            <h2 class="cat-title">ON SALE</h2>
            <div class="jtv-product">
              <div class="product-img"> <a href="single_product.html"> <img src="images/products/img12.jpg" alt="html template"> <img class="secondary-img" src="images/products/img11.jpg" alt="html template"> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                <div class="price-box">
                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $99.00 </span> </p>
                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $119.00 </span> </p>
                </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="jtv-product jtv-cat-margin">
              <div class="product-img"> <a href="single_product.html"> <img src="images/products/img05.jpg" alt="html template"> <img class="secondary-img" src="images/products/img10.jpg" alt="html template"> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                <div class="price-box"> <span class="regular-price"> <span class="price">$189.00</span> </span> </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="jtv-product jtv-cat-margin">
              <div class="product-img"> <a href="single_product.html"> <img src="images/products/img01.jpg" alt="html template"> <img class="secondary-img" src="images/products/img03.jpg" alt="html template"> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                <div class="price-box"> <span class="regular-price"> <span class="price">$88.99</span> </span> </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="jtv-service-area">
            <div class="jtv-single-service">
              <div class="service-icon"> <img alt="html template" src="images/customer-service-icon.png"> </div>
              <div class="service-text">
                <h2>24/7 customer service</h2>
                <p><span>Call us 24/7 at 000 - 123 - 456</span></p>
              </div>
            </div>
            <div class="jtv-single-service">
              <div class="service-icon"> <img alt="html template" src="images/shipping-icon.png"> </div>
              <div class="service-text">
                <h2>free shipping worldwide</h2>
                <p><span>On order over $199 - 7 days a week</span></p>
              </div>
            </div>
            <div class="jtv-single-service">
              <div class="service-icon"> <img alt="html template" src="images/guaratee-icon.png"> </div>
              <div class="service-text">
                <h2>money back guaratee!</h2>
                <p><span>Send within 30 days</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
