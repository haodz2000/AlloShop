<header>
    <div class="topbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="top-contact">
                       <ul>
                            <li><i class="fa fa-map-marker"></i> 68 house, Melborne, Australia</li>
                            <li><i class="fa fa-phone"></i> Hot Line: + 0568 099 99</li>
                       </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <div class="heiglight text-right">
                        <ul>
                            @if (Auth::check())
                                <li>
                                    <div class="dropdown">
                                        <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-user"></i>{{ Auth::user()->name }}
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                                            <li><a href="{{ route('user.profile') }}">Cập nhật thông tin cá nhân</a></li>
                                            <li><a href="{{ route('shipping.order') }}">Đơn hàng của tôi</a></li>
                                            <li><a href="{{ route('logout') }}">Logout</a></li>
                                        </ul>
                                    </div>
                                </li>
                            @else
                                <li><a href="{{ route('signin.index') }}"><i class="fa fa-user"></i>Login/Register</a></li>
                            @endif
                            <li class="whilest"><i class="fa fa-heart-o"></i> Whilest</li>
                            <li class="cart cart-area">
                                @if ($cart = Session('Cart'))
                                <div class="hove">
                                    <i class="fa fa-shopping-cart"></i>
                                    <p class="be"><span>{{ $cart->totalQuantity }}</span></p>
                                    <div class="cart-list">
                                        <ul class="list">
                                            @foreach ($cart->products as $product )
                                            <li>
                                                <div style="max-width:100px; float: left;">
                                                    <a href="{{ route('products.slug',['slug'=>$product['productInfo']->slug]) }}" title="" class="cart-product-image floatleft">
                                                        @php
                                                            $image = json_decode($product['productInfo']->url_image);
                                                        @endphp
                                                        <img src="{{asset('./assets/storage/images/product/'.$image[0])}}" alt="{{ $product['productInfo']->product_name }}">
                                                    </a>
                                                </div>
                                                <div style="max-width:140px" class="text">
                                                    <a class="close close-item" data-sku="{{ $product['sku'] }}" title="close"><i class="fa fa-times-circle"></i></a>
                                                    <h4>{{ $product['productInfo']->product_name }}</h4>
                                                    <div>
                                                        <span>Quantity:{{ $product['quantity'] }}</span>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="price"><del>${{ number_format($product['productInfo']->price,2) }}</del></div>
                                                        <div class="price">
                                                            TotalPrice:  ${{ number_format($product['price'],2) }}
                                                        </div>
                                                        <div>
                                                            <span>Color:{{ $product['color'] }}</span>|
                                                            <span>Size:{{ $product['size']  }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        <div class="total"><span class="left">Total:</span> <span class="right">${{ number_format($cart->totalPrice,2) }}</span></div>
                                        <div class="bottom">
                                            <a class="btn4" href="{{ route('shipping') }}" title="viewcart">View Cart</a>
                                            <a class="btn4" href="{{ route('shipping') }}" title="checkout">Check out</a>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="hove">
                                    <i class="fa fa-shopping-cart"></i>
                                    <p class="be"><span>0</span></p>
                                    <div class="cart-list">
                                        <ul class="list">
                                        </ul>
                                        <div class="total"><span class="left">Total:</span> <span class="right">$0</span></div>
                                        <div class="bottom">
                                            <a class="btn4" href="#" title="viewcart">View Cart</a>
                                            <a class="btn4" href="#" title="checkout">Check out</a>
                                        </div>
                                    </div>
                                </div>
                                @endif

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                    <div class="logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('./assets/client/images/logo/logo.png') }}" alt="AlloShop"/></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li><a href="{{ route('clothes.men') }}">Men</a></li>
                                <li><a href="{{ route('clothes.women') }}">Women</a></li>
                                <li><a href="{{ route('clothes.unisex') }}">Clothes Unisex</a></li>
                                <li class="dropdown mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Page <span class="caret"></span></a>
                                    <ul class="dropdown-menu mega-dropdown-menu">
                                        <li class="col-md-2 col-sm-4">
                                            <ul>
                                                <li class="dropdown-header">Blog Page</li>
                                                <li><a href="#">Blog</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-md-3 col-sm-4">
                                            <ul>
                                                <li class="dropdown-header">Shop Page</li>
                                                <li><a href="{{ route('clothes.all') }}">All Clothes</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-md-3 col-sm-4">
                                            <ul>
                                                <li class="dropdown-header">Other Pages</li>
                                                <li><a href="{{ route('shipping') }}">shipping</a></li>
                                                <li><a href="{{ route('shipping.order') }}">List Order</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12">
                    <div class="search-box">
                        <div class="input-group stylish-input-group">
                            <input type="text" class="form-control"  placeholder="Search" >
                            <span class="input-group-addon">
                                <button type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="mobile-menu">
                  <nav id="dropdown">
                    <ul>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Colthes Unisex</a></li>
                        <li>
                            <a href="#">page</a>
                            <ul>
                                <li><a href="{{ route('home') }}">All Product</a></li>
                                <li><a href="{{ 'home' }}">Blog</a></li>
                                <li><a href="#">blog2</a></li>
                                <li><a href="404.html">404-error</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
        </div>
    </div>
</header>
