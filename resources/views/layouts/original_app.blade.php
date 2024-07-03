<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Trendy Goods</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/theme/favicon.svg')}}">
    <!-- Template CSS -->
    <link rel="stylesheet"  href="{{asset('assets/css/main.css?v=3.4')}}">
    <style>
        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            z-index: 1000;
        }
        .whatsapp-button img {
            width: 35px;
            height: 35px;
        }
    </style>
    @yield('styles')
</head>

<body>
<!-- Quick view -->
<header class="header-area header-style-4 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <ul>
                            <li><i class="fi-rs-smartphone"></i> <a href="#">(+01) - 2345 - 6789</a></li>
                            <li><i class="fi-rs-marker"></i><a  href="page-contact.html">Our location</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li>Get great devices up to 50% off <a href="shop-grid-right.html">View details</a></li>
                                <li>Supper Value Deals - Save more with coupons</li>
                                <li>Trendy 25silver jewelry, save up 35% off today <a href="shop-grid-right.html">Shop now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        <ul>
                            <li>
                                <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i> English <i class="fi-rs-angle-small-down"></i></a>
                                <ul class="language-dropdown">
                                    <li><a href="#"><img src="{{asset('assets/imgs/theme/flag-fr.png')}}" alt="">Français</a></li>
                                    <li><a href="#"><img src="{{asset('assets/imgs/theme/flag-dt.png')}}" alt="">Deutsch</a></li>
                                    <li><a href="#"><img src="{{asset('assets/imgs/theme/flag-ru.png')}}" alt="">Pусский</a></li>
                                </ul>
                            </li>
                            <li><i class="fi-rs-user"></i><a href="page-login-register.html">Log In / Sign Up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1" style="width: 70%">
                    <a href="index.html"><img src="{{asset('assets/imgs/theme/logo.png')}}" alt="logo"></a>
                </div>
                <div class="header-right">
                    <div class="search-style-2">
                        <form action="#">
                            <select class="select-active">
                                <option>All Categories</option>
                                <option>Women's</option>
                                <option>Men's</option>
                                <option>Cellphones</option>
                                <option>Computer</option>
                                <option>Electronics</option>
                                <option> Accessories</option>
                                <option>Home & Garden</option>
                                <option>Luggage</option>
                                <option>Shoes</option>
                                <option>Mother & Kids</option>
                            </select>
                            <input type="text" placeholder="Search for items...">
                        </form>
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.html">
                                    <img class="svgInject" alt="Evara" src="{{asset('assets/imgs/theme/icons/icon-heart.svg')}}">
                                    <span class="pro-count blue">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="shop-cart.html">
                                    <img alt="Evara" src="{{asset('assets/imgs/theme/icons/icon-cart.svg')}}">
                                    <span class="pro-count blue">2</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Evara" src="{{asset('assets/imgs/shop/thumbnail-3.jpg')}}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Daisy Casual Bag</a></h4>
                                                <h4><span>1 × </span>$800.00</h4>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Evara" src="{{asset('assets/imgs/shop/thumbnail-2.jpg')}}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Corduroy Shirts</a></h4>
                                                <h4><span>1 × </span>$3200.00</h4>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$4000.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="shop-cart.html" class="outline">View cart</a>
                                            <a href="shop-checkout.html">Checkout</a>
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
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="index.html"><img src="{{asset('assets/imgs/theme/logo.png')}}" alt="logo"></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                        <a class="categori-button-active" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-large">
                            <ul>
                                <li class="has-children">
                                    <a href="shop-grid-right.html"><i class="evara-font-dress"></i>Women's Clothing</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Hot & Trending</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Dresses</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Blouses & Shirts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Hoodies & Sweatshirts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Women's Sets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Suits & Blazers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Bodysuits</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Tanks & Camis</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Coats & Jackets</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Bottoms</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Leggings</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Skirts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Shorts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Jeans</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Pants & Capris</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Bikini Sets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Cover-Ups</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Swimwear</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-children">
                                    <a href="shop-grid-right.html"><i class="evara-font-tshirt"></i>Men's Clothing</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Jackets & Coats</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Down Jackets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Jackets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Parkas</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Faux Leather Coats</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Trench</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Wool & Blends</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Vests & Waistcoats</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Leather Coats</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Suits & Blazers</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Blazers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Suit Jackets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Suit Pants</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Suits</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Vests</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Tailor-made Suits</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Cover-Ups</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-children">
                                    <a href="shop-grid-right.html"><i class="evara-font-smartphone"></i> Cellphones</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Hot & Trending</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Cellphones</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">iPhones</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Refurbished Phones</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Mobile Phone</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Mobile Phone Parts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Phone Bags & Cases</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Communication Equipments</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Walkie Talkie</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Accessories</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Screen Protectors</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Wire Chargers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Wireless Chargers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Car Chargers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Power Bank</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Armbands</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Dust Plug</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Signal Boosters</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-desktop"></i>Computer & Office</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-cpu"></i>Consumer Electronics</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-diamond"></i>Jewelry & Accessories</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-home"></i>Home & Garden</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-high-heels"></i>Shoes</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-teddy-bear"></i>Mother & Kids</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-kite"></i>Outdoor fun</a></li>
                                <li>
                                    <ul class="more_slide_open" style="display: none;">
                                        <li><a href="shop-grid-right.html"><i class="evara-font-desktop"></i>Beauty, Health</a></li>
                                        <li><a href="shop-grid-right.html"><i class="evara-font-cpu"></i>Bags and Shoes</a></li>
                                        <li><a href="shop-grid-right.html"><i class="evara-font-diamond"></i>Consumer Electronics</a></li>
                                        <li><a href="shop-grid-right.html"><i class="evara-font-home"></i>Automobiles & Motorcycles</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="more_categories">Show more...</div>
                        </div>
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                        <nav>
                            <ul>
                                <li><a class="active" href="index.html">Home <i class="fi-rs-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="page-about.html">About</a>
                                </li>
                                <li><a href="shop-grid-right.html">Shop <i class="fi-rs-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-grid-right.html">Shop Grid – Right Sidebar</a></li>
                                        <li><a href="shop-grid-left.html">Shop Grid – Left Sidebar</a></li>
                                        <li><a href="shop-list-right.html">Shop List – Right Sidebar</a></li>
                                        <li><a href="shop-list-left.html">Shop List – Left Sidebar</a></li>
                                        <li><a href="shop-fullwidth.html">Shop - Wide</a></li>
                                        <li><a href="#">Single Product <i class="fi-rs-angle-right"></i></a>
                                            <ul class="level-menu">
                                                <li><a href="shop-product-right.html">Product – Right Sidebar</a></li>
                                                <li><a href="shop-product-left.html">Product – Left Sidebar</a></li>
                                                <li><a href="shop-product-full.html">Product – No sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-filter.html">Shop – Filter</a></li>
                                        <li><a href="shop-wishlist.html">Shop – Wishlist</a></li>
                                        <li><a href="shop-cart.html">Shop – Cart</a></li>
                                        <li><a href="shop-checkout.html">Shop – Checkout</a></li>
                                        <li><a href="shop-compare.html">Shop – Compare</a></li>
                                    </ul>
                                </li>
                                <li class="position-static"><a href="#">Mega menu <i class="fi-rs-angle-down"></i></a>
                                    <ul class="mega-menu">
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="#">Women's Fashion</a>
                                            <ul>
                                                <li><a href="shop-product-right.html">Dresses</a></li>
                                                <li><a href="shop-product-right.html">Blouses & Shirts</a></li>
                                                <li><a href="shop-product-right.html">Hoodies & Sweatshirts</a></li>
                                                <li><a href="shop-product-right.html">Wedding Dresses</a></li>
                                                <li><a href="shop-product-right.html">Prom Dresses</a></li>
                                                <li><a href="shop-product-right.html">Cosplay Costumes</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="#">Men's Fashion</a>
                                            <ul>
                                                <li><a href="shop-product-right.html">Jackets</a></li>
                                                <li><a href="shop-product-right.html">Casual Faux Leather</a></li>
                                                <li><a href="shop-product-right.html">Genuine Leather</a></li>
                                                <li><a href="shop-product-right.html">Casual Pants</a></li>
                                                <li><a href="shop-product-right.html">Sweatpants</a></li>
                                                <li><a href="shop-product-right.html">Harem Pants</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="#">Technology</a>
                                            <ul>
                                                <li><a href="shop-product-right.html">Gaming Laptops</a></li>
                                                <li><a href="shop-product-right.html">Ultraslim Laptops</a></li>
                                                <li><a href="shop-product-right.html">Tablets</a></li>
                                                <li><a href="shop-product-right.html">Laptop Accessories</a></li>
                                                <li><a href="shop-product-right.html">Tablet Accessories</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-34">
                                            <div class="menu-banner-wrap">
                                                <a href="shop-product-right.html"><img src="{{asset('assets/imgs/banner/menu-banner.jpg')}}" alt="Evara"></a>
                                                <div class="menu-banner-content">
                                                    <h4>Hot deals</h4>
                                                    <h3>Don't miss<br> Trending</h3>
                                                    <div class="menu-banner-price">
                                                        <span class="new-price text-success">Save to 50%</span>
                                                    </div>
                                                    <div class="menu-banner-btn">
                                                        <a href="shop-product-right.html">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="menu-banner-discount">
                                                    <h3>
                                                        <span>35%</span>
                                                        off
                                                    </h3>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="blog-category-grid.html">Blog <i class="fi-rs-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-category-grid.html">Blog Category Grid</a></li>
                                        <li><a href="blog-category-list.html">Blog Category List</a></li>
                                        <li><a href="blog-category-big.html">Blog Category Big</a></li>
                                        <li><a href="blog-category-fullwidth.html">Blog Category Wide</a></li>
                                        <li><a href="#">Single Post <i class="fi-rs-angle-right"></i></a>
                                            <ul class="level-menu level-menu-modify">
                                                <li><a href="blog-post-left.html">Left Sidebar</a></li>
                                                <li><a href="blog-post-right.html">Right Sidebar</a></li>
                                                <li><a href="blog-post-fullwidth.html">No Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages <i class="fi-rs-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="page-about.html">About Us</a></li>
                                        <li><a href="page-contact.html">Contact</a></li>
                                        <li><a href="page-account.html">My Account</a></li>
                                        <li><a href="page-login-register.html">login/register</a></li>
                                        <li><a href="page-purchase-guide.html">Purchase Guide</a></li>
                                        <li><a href="page-privacy-policy.html">Privacy Policy</a></li>
                                        <li><a href="page-terms.html">Terms of Service</a></li>
                                        <li><a href="page-404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="page-contact.html">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="hotline d-none d-lg-block">
                    <p><i class="fi-rs-headset"></i><span>Hotline</span> 1900 - 888 </p>
                </div>
                <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2 d-block d-lg-none">
                            <div class="burger-icon burger-icon-white">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-mid"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="index.html"><img src="{{asset('assets/imgs/theme/logo.png')}}" alt="logo"></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="#">
                    <input type="text" placeholder="Search for items…">
                    <button type="submit"><i class="fi-rs-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <div class="main-categori-wrap mobile-header-border">
                    <a class="categori-button-active-2" href="#">
                        <span class="fi-rs-apps"></span> Browse Categories
                    </a>
                    <div class="categori-dropdown-wrap categori-dropdown-active-small">
                        <ul>
                            <li><a href="shop-grid-right.html"><i class="evara-font-dress"></i>Women's Clothing</a></li>
                            <li><a href="shop-grid-right.html"><i class="evara-font-tshirt"></i>Men's Clothing</a></li>
                            <li> <a href="shop-grid-right.html"><i class="evara-font-smartphone"></i> Cellphones</a></li>
                            <li><a href="shop-grid-right.html"><i class="evara-font-desktop"></i>Computer & Office</a></li>
                            <li><a href="shop-grid-right.html"><i class="evara-font-cpu"></i>Consumer Electronics</a></li>
                            <li><a href="shop-grid-right.html"><i class="evara-font-home"></i>Home & Garden</a></li>
                            <li><a href="shop-grid-right.html"><i class="evara-font-high-heels"></i>Shoes</a></li>
                            <li><a href="shop-grid-right.html"><i class="evara-font-teddy-bear"></i>Mother & Kids</a></li>
                            <li><a href="shop-grid-right.html"><i class="evara-font-kite"></i>Outdoor fun</a></li>
                        </ul>
                    </div>
                </div>
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li><a href="shop-grid-right.html">Tüm Ürünler</a></li>
                        <li><a href="shop-grid-right.html">Ev Dekorasyon</a></li>
                        <li><a href="shop-grid-right.html">Kargo Takip🚚</a></li>
                        <li><a href="shop-grid-right.html">İletişim</a></li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap mobile-header-border">
                <div class="single-mobile-header-info mt-30">
                    <a  href="page-contact.html">Silahtarağa Caddesi no:1/20, Eyüp/İstanbul 34050 </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="https://wa.me/905437434267">0543 743 42 67</a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="mailto:trendygoodshelp@gmail.com">trendygoodshelp@gmail.com</a>
                </div>
            </div>
            <div class="mobile-social-icon">
                <h5 class="mb-15 text-grey-4">Follow Us</h5>
                <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a>
                <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-youtube.svg')}}" alt=""></a>
            </div>
        </div>
    </div>
</div>

@yield('content')

<footer class="main">
    <section class="section-padding footer-mid">
        <div class="container pt-15 pb-20">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget-about font-md mb-md-5 mb-lg-0">
                        <div class="logo logo-width-1 wow fadeIn animated">
                            <a href="index.html"><img style="height: 50px" src="{{asset('assets/imgs/theme/logo.png')}}" alt="logo"></a>
                        </div>
                        <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">İletişim</h5>
                        <p class="wow fadeIn animated">
                            <strong>Adres: </strong>Silahtarağa Caddesi no:1/20, Eyüp/İstanbul 34050
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Telefon: </strong>0543 743 42 67
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Çalışma Saatleri: </strong>10:00 - 20:00, Pzt - Cmt
                        </p>
                        <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Bizi Takip Edin</h5>
                        <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                            <a href="https://www.facebook.com/trendygoodshop/"><img src="{{asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                            <a href="https://www.instagram.com/trendygoods_shop/"><img src="{{asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                            {{--                            <a href="https://www.tiktok.com/@trendygoodss"><img src="{{asset('assets/imgs/theme/icons/icon-tiktok.svg')}}" alt=""></a>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <h5 class="widget-title wow fadeIn animated">Yasal Bildiriler</h5>
                    <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                        <li><a href="#">Gizlilik Politikası</a></li>
                        <li><a href="#">Kargo Politikası</a></li>
                        <li><a href="#">Para İade Politikası</a></li>
                        <li><a href="#">Hizmet ve Şartlar</a></li>
                        <li><a href="#">İletişim</a></li>
                        <li><a href="#">Yasal Bildirim</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container pb-20 wow fadeIn animated">
        <div class="row">
            <div class="col-12 mb-20">
                <div class="footer-bottom"></div>
            </div>
            <div class="col-lg-6">
                <p class="float-md-left font-sm text-muted mb-0">&copy; {{now()->year}}, <strong class="text-brand">Trendy Goods</strong></p>
            </div>
            <div class="col-lg-6">
                <p class="text-lg-end text-start font-sm text-muted mb-0">
                </p>
            </div>
        </div>
    </div>
</footer>

<div class="whatsapp-button" id="whatsappButton">
    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png" alt="WhatsApp">
</div>

{{--<script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>--}}
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
{{--<script src="{{asset('assets/js/plugins/slick.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/plugins/jquery.syotimer.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/plugins/wow.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/plugins/jquery-ui.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/plugins/perfect-scrollbar.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/plugins/magnific-popup.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/plugins/select2.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/plugins/waypoints.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/plugins/scrollup.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/plugins/counterup.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/plugins/jquery.countdown.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/plugins/images-loaded.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/plugins/isotope.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/plugins/jquery.vticker-min.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/plugins/jquery.theia.sticky.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/plugins/jquery.elevatezoom.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/main.js?v=3.4')}}"></script>--}}
{{--<script src="{{asset('assets/js/shop.js?v=3.4')}}"></script>--}}


<script>
    document.getElementById('whatsappButton').addEventListener('click', function() {
        const currentUrl = window.location.href;
        const message = "Bu ürün hakkında daha fazla bilgi alabilir miyim\n\n" + currentUrl;
        const phoneNumber = "905437434267";
        window.open(`https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`, '_blank');
    })
</script>
@yield('scripts')
</body>

</html>
