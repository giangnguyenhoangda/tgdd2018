<header id="header" class="header has-sticky sticky-jump">
            <div class="header-wrapper">
                <div id="masthead" class="header-main ">
                    <div class="header-inner flex-row container logo-left" role="navigation">
                        <!-- Logo -->
                        <div id="logo" class="flex-col logo">
                            <!-- Header logo -->
                            <a href="{{ route('getHome') }}" title="Demo thegioidiong flatsome - Demo thegioidiong flatsome" rel="home">
                                <img width="120" height="63" src="{{ asset('uploads/logo_white-1.png') }} " class="header_logo header-logo" alt="Demo thegioidiong flatsome" /><img width="120" height="63" src="{{ asset('uploads/logo_white-1.png') }} " class="header-logo-dark" alt="Demo thegioidiong flatsome" /></a>
                        </div>
                        <!-- Mobile Left Elements -->
                        <div class="flex-col show-for-medium flex-left">
                            <ul class="mobile-nav nav nav-left ">
                                <li class="header-search-form search-form html relative has-icon">
                                    <div class="header-search-form-wrapper">
                                        <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                                            <form role="search" method="get" class="searchform" action="{{ route('getSearch') }}">
                                                <div class="flex-row relative">
                                                    <div class="flex-col flex-grow">
                                                        <input type="search" class="search-field mb-0" name="s" value="" placeholder="Bạn tìm gì ..." />
                                                        <input type="hidden" name="post_type" value="product" />
                                                    </div>
                                                    <!-- .flex-col -->
                                                    <div class="flex-col">
                                                        <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0">
                                                            <i class="icon-search"></i> </button>
                                                    </div>
                                                    <!-- .flex-col -->
                                                </div>
                                                <!-- .flex-row -->
                                                <div class="live-search-results text-left z-top"></div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Left Elements -->
                        <div class="flex-col hide-for-medium flex-left flex-grow">
                            <ul class="header-nav header-nav-main nav nav-left  nav-spacing-medium nav-uppercase">
                                <li class="header-search-form search-form html relative has-icon">
                                    <div class="header-search-form-wrapper">
                                        <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                                            <form role="search" method="get" class="searchform" action="{{ route('getSearch') }}">
                                                <div class="flex-row relative">
                                                    <div class="flex-col flex-grow">
                                                        <input type="search" class="search-field mb-0" name="s" value="" placeholder="Bạn tìm gì ..." />
                                                        <input type="hidden" name="post_type" value="product" />
                                                    </div>
                                                    <!-- .flex-col -->
                                                    <div class="flex-col">
                                                        <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0">
                                                            <i class="icon-search"></i> </button>
                                                    </div>
                                                    <!-- .flex-col -->
                                                </div>
                                                <!-- .flex-row -->
                                                <div class="live-search-results text-left z-top"></div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Right Elements -->
                        <div class="flex-col hide-for-medium flex-right">
                            <ul class="header-nav header-nav-main nav nav-right  nav-spacing-medium nav-uppercase">
                                <li id="menu-item-1930" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  menu-item-1930 has-dropdown">
                                    <a href="{{ route('getSearch') }}" class="menu-image-title-below menu-image-not-hovered nav-top-link"><img width="13" height="24" src="{{ asset('uploads/p217.png') }} " class="menu-image menu-image-title-below" alt="" /><span class="menu-image-title">ĐIỆN THOẠI</span></a>
                                    <ul class='nav-dropdown nav-dropdown-default dark dropdown-uppercase'>
                                        <li id="menu-item-1988" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  menu-item-1988 nav-dropdown-col"><a href="{{ route('getSearch') }}" class="menu-image-title-after"><span class="menu-image-title">IPHONE</span></a>
                                            <ul class='nav-column nav-dropdown-default dark dropdown-uppercase'>
                                                <li id="menu-item-1989" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-1989"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">iPhone 6/ 6 Plus</span></a></li>
                                                <li id="menu-item-1990" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-1990"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">iPhone 6s/ 6s Plus</span></a></li>
                                                <li id="menu-item-1991" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-1991"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">iPhone Lock</span></a></li>
                                                <li id="menu-item-1992" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-1992"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">iPhone 7/ 7 Plus</span></a></li>
                                                <li id="menu-item-1993" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-1993"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">iPhone 5/ 5s/ 5c</span></a></li>
                                                <li id="menu-item-1994" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-1994"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">iPhone 8/ 8 Plus/ X</span></a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-2340" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  menu-item-2340 nav-dropdown-col"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Hãng sản xuất</span></a>
                                            <ul class='nav-column nav-dropdown-default dark dropdown-uppercase'>
                                                <li id="menu-item-2341" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2341"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Apple</span></a></li>
                                                <li id="menu-item-2344" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2344"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Samsung</span></a></li>
                                                <li id="menu-item-2346" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2346"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Xiaomi</span></a></li>
                                                <li id="menu-item-2342" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2342"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">HTC</span></a></li>
                                                <li id="menu-item-2343" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2343"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">LG</span></a></li>
                                                <li id="menu-item-2345" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2345"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Sony</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-1928" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  menu-item-1928 has-dropdown">
                                    <a href="{{ route('getDevelopingPage') }}" class="menu-image-title-below menu-image-not-hovered nav-top-link"><img width="28" height="20" src="{{ asset('uploads/p218-1.png') }}" class="menu-image menu-image-title-below" alt="" srcset="{{ asset('uploads/p218-1.png') }}  28w, {{ asset('uploads/p218-1-24x17.png') }}  24w" sizes="(max-width: 28px) 100vw, 28px" /><span class="menu-image-title">TABLET</span></a>
                                    <ul class='nav-dropdown nav-dropdown-default dark dropdown-uppercase'>
                                        <li id="menu-item-1995" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  menu-item-1995 nav-dropdown-col"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">HÃNG SẢN XUẤT</span></a>
                                            <ul class='nav-column nav-dropdown-default dark dropdown-uppercase'>
                                                <li id="menu-item-1996" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-1996"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Apple</span></a></li>
                                                <li id="menu-item-2000" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2000"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Samsung</span></a></li>
                                                <li id="menu-item-2002" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2002"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Xiaomi</span></a></li>
                                                <li id="menu-item-2001" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2001"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Sony</span></a></li>
                                                <li id="menu-item-1997" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-1997"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">BlackBerry</span></a></li>
                                                <li id="menu-item-1998" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-1998"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Lenovo</span></a></li>
                                                <li id="menu-item-1999" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-1999"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Nokia</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-1931" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  menu-item-1931 has-dropdown">
                                    <a href="{{ route('getDevelopingPage') }}" class="menu-image-title-below menu-image-not-hovered nav-top-link"><img width="28" height="20" src="{{ asset('uploads/laptopicon.png') }}" class="menu-image menu-image-title-below" alt="" /><span class="menu-image-title">LAPTOP</span></a>
                                    <ul class='nav-dropdown nav-dropdown-default dark dropdown-uppercase'>
                                        <li id="menu-item-2003" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2003"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">ASUS</span></a></li>
                                        <li id="menu-item-2004" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2004"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">MSI</span></a></li>
                                        <li id="menu-item-2005" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2005"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">DELL</span></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-1931" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  menu-item-1931 has-dropdown">
                                    <a href="{{ route('getDevelopingPage') }}" class="menu-image-title-below menu-image-not-hovered nav-top-link"><img width="23" height="21" src="{{ asset('uploads/p219.png') }}" class="menu-image menu-image-title-below" alt="" /><span class="menu-image-title">PHỤ KIỆN</span></a>
                                    <ul class='nav-dropdown nav-dropdown-default dark dropdown-uppercase'>
                                        <li id="menu-item-2003" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2003"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Cáp kết nối</span></a></li>
                                        <li id="menu-item-2004" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2004"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Củ sạc</span></a></li>
                                        <li id="menu-item-2005" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2005"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Dán cường lực</span></a></li>
                                        <li id="menu-item-2006" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2006"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Ốp Lưng</span></a></li>
                                        <li id="menu-item-2007" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2007"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Phụ kiện Xiaomi</span></a></li>
                                        <li id="menu-item-2008" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2008"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Sạc dự phòng</span></a></li>
                                        <li id="menu-item-2009" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2009"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Smart Watch</span></a></li>
                                        <li id="menu-item-2010" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2010"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Tai nghe</span></a></li>
                                        <li id="menu-item-2011" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-2011"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Thẻ Nhớ</span></a></li>
                                    </ul>
                                </li>
                                
                                <li id="menu-item-2030" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-has-children  menu-item-2030 has-dropdown">
                                    <a href="{{ route('getNews') }}" class="menu-image-title-below menu-image-not-hovered nav-top-link"><img width="30" height="20" src="{{ asset('uploads/p223.png') }}" class="menu-image menu-image-title-below" alt="" srcset="{{ asset('uploads/p223.png') }} 30w, {{ asset('uploads/p223-24x16.png') }} 24w" sizes="(max-width: 30px) 100vw, 30px" /><span class="menu-image-title">TIN TỨC</span></a>
                                    <ul class='nav-dropdown nav-dropdown-default dark dropdown-uppercase'>
                                        <li id="menu-item-2035" class="menu-item menu-item-type-taxonomy menu-item-object-category  menu-item-2035"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Tin tức công nghệ</span></a></li>
                                        <li id="menu-item-2036" class="menu-item menu-item-type-taxonomy menu-item-object-category  menu-item-2036"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Tư vấn mua hàng</span></a></li>
                                        <li id="menu-item-2034" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent  menu-item-2034"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Hình nền</span></a></li>
                                        <li id="menu-item-2032" class="menu-item menu-item-type-taxonomy menu-item-object-category  menu-item-2032"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Đánh giá sản phẩm</span></a></li>
                                        <li id="menu-item-2037" class="menu-item menu-item-type-taxonomy menu-item-object-category  menu-item-2037"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Tuyển dụng</span></a></li>
                                        <li id="menu-item-2031" class="menu-item menu-item-type-taxonomy menu-item-object-category  menu-item-2031"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">DOWLOAD ROM</span></a></li>
                                        <li id="menu-item-2033" class="menu-item menu-item-type-taxonomy menu-item-object-category  menu-item-2033"><a href="{{ route('getDevelopingPage') }}" class="menu-image-title-after"><span class="menu-image-title">Game &#038; Ứng dụng</span></a></li>
                                    </ul>
                                </li>
                                
                                <li class="cart-item has-icon has-dropdown">
                                    <div class="header-button">
                                        <a href="{{ route('getCart') }}" title="Giỏ hàng" class="header-cart-link icon button circle is-outline is-small">
                                            <i class="icon-shopping-basket" data-icon-label="0"></i>
                                        </a>
                                    </div>
                                    <ul class="nav-dropdown nav-dropdown-default dark dropdown-uppercase">
                                        <li class="html widget_shopping_cart">
                                            <div class="widget_shopping_cart_content">

                                                <p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong giỏ hàng.</p>

                                            </div>
                                        </li>
                                    </ul>
                                    <!-- .nav-dropdown -->
                                </li>
                            </ul>
                        </div>
                        <!-- Mobile Right Elements -->
                        <div class="flex-col show-for-medium flex-right">
                            <ul class="mobile-nav nav nav-right ">
                                <li class="nav-icon has-icon">
                                    <div class="header-button">
                                        <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="dark" class="icon primary button round is-small" aria-controls="main-menu" aria-expanded="false">

                                            <i class="icon-menu"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- .header-inner -->
                </div>
                <!-- .header-main -->
                <div class="header-bg-container fill">
                    <div class="header-bg-image fill"></div>
                    <div class="header-bg-color fill"></div>
                </div>
                <!-- .header-bg-container -->
            </div>          
        </header>