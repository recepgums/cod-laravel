<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Evara - eCommerce HTML Template</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css?v=3.4')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
</head>

<body>
<main class="main">
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-product-fillter">
                        <div class="totall-product text-center">
                            <h3> Siparişinizi aldık <strong class="text-brand">🥳🥳🥳</strong></h3>
                            <br>
                            <h4>Sipariş verenlere özel aşağıdaki ürünlerden dilediklerinizi <strong
                                    class="text-success">+100TL</strong> indirim ile sepetinize ekleyebilirsiniz.</h4>
                            <p>Adresiniz kayıtlı olduğu için tekrar adres girmenize gerek yok. Sepete ekle butonuna
                                basarak aynı kargoda bu ürünleri alabilirsiniz</p>
                            <small class="text-danger">Bu fiyatlar sadece sipariş verenlere özeldir!</small>
                        </div>
                    </div>
                    <div class="row product-grid-3">
                        <div class="col-lg-3 col-md-4">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="#">
                                            <img class="default-img"
                                                 src="{{asset('assets/imgs/products/trendsand-kum-sanati/yenifirsat2.jpg')}}"
                                                 alt="">
                                            <img class="hover-img"
                                                 src="{{asset('assets/imgs/products/trendsand-kum-sanati/yenifistarl4.jpg')}}"
                                                 alt="">
                                        </a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">+100.00TL indirimli</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap pt-2">
                                    <h2>
                                        <a href="#">TrendSand Kum Sanatı</a>
                                    </h2>
                                    <div class="rating-result" title="96%">
                                    <span>
                                        <span>4.8</span>
                                    </span>
                                    </div>
                                    <div class="product-price">
                                        <span>248,00TL </span>
                                        <span class="old-price">348,00TL</span>
                                    </div>
                                </div>
                                <div class="row mb-30 mx-auto">
                                    <div class="col-6">
                                        <button class="btn w-100 btn-sm add-to-cart" data-product-name="TrendSand Kum Sanati"><i
                                                class="fi-rs-shopping-bag mr-5"></i>Sepete Ekle
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn w-100 btn-sm btn-secondary" data-toggle="collapse"
                                                data-target="#details-1">Detaylarını Gör <i
                                                class="fi-rs-angle-down mr-5"></i></button>
                                    </div>
                                </div>
                                <div id="details-1" class="collapse px-3 pb-2">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{route('finish-order',['order' => $order])}}" method="post">
                @csrf
                <button class="btn w-100 btn-sm btn-success"><i
                        class="fi-rs-check mr-5"></i>
                    Siparişim Tamamla
                </button>
            </form>
        </div>
    </section>
</main>


<footer class="main">
    <section class="section-padding footer-mid">
        <div class="container pt-15 pb-20">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget-about font-md mb-md-5 mb-lg-0">
                        <div class="logo logo-width-1 wow fadeIn animated">
                            <a href="index.html"><img style="height: 50px" src="{{asset('assets/imgs/theme/logo.png')}}"
                                                      alt="logo"></a>
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
                            <a href="https://www.facebook.com/trendygoodshop/"><img
                                    src="{{asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                            <a href="https://www.instagram.com/trendygoods_shop/"><img
                                    src="{{asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
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
                <p class="float-md-left font-sm text-muted mb-0">&copy; {{now()->year}}, <strong class="text-brand">Trendy
                        Goods</strong></p>
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

<script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/slick.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.syotimer.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/wow.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/js/plugins/magnific-popup.js')}}"></script>
<script src="{{asset('assets/js/plugins/select2.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/waypoints.js')}}"></script>
<script src="{{asset('assets/js/plugins/counterup.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/images-loaded.js')}}"></script>
<script src="{{asset('assets/js/plugins/isotope.js')}}"></script>
<script src="{{asset('assets/js/plugins/scrollup.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.vticker-min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.theia.sticky.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.elevatezoom.js')}}"></script>
<!-- Template  JS -->
<script src="{{asset('assets/js/shop.js?v=3.4')}}"></script>
<script src="{{asset('assets/js/main.js?v=3.4')}}"></script>
<script>
    document.getElementById('whatsappButton').addEventListener('click', function () {
        const currentUrl = window.location.href;
        const message = "Bu ürün hakkında daha fazla bilgi alabilir miyim\n\n" + currentUrl;
        const phoneNumber = "905437434267";
        window.open(`https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`, '_blank');
    })
    $(document).ready(function() {
        $('.add-to-cart').on('click', function() {
            var button = $(this); // Store the reference to the button
            var productName = button.data('product-name');

            $.ajax({
                url: `{{route('add-to-cart',['order' => $order->id])}}`,
                type: 'POST',
                data: {
                    product_name: productName,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    // Show success message
                    alert('Ürün başarıyla sepete eklendi!');
                    button.text('Sepete Eklendi').prop('disabled', true).addClass('btn-success');
                },
                error: function(response) {
                    // Show error message
                    alert('Ürün sepete eklenirken bir hata oluştu.');
                }
            });
        });

        // Add event listener for "Detaylarını Gör" button
        $('[data-toggle="collapse"]').on('click', function() {
            var target = $(this).data('target');
            $(target).collapse('toggle');
        });
    });

</script>
</body>

</html>
