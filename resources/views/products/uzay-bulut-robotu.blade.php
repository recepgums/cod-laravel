<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Merriweather:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;700">
    <title>Uzay Bulut Robotu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
    <style>
        .delivery-info {
            text-align: center;
            font-size: 1.1em;
        }

        .delivery-info i {
            font-size: 1.5em;
            margin-right: 10px;
        }

        #delivery-dates {
            font-weight: bold;
        }

        .comments-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .comment-item {
            flex: 1 1 calc(50% - 20px); /* Kartlar arasında boşluk bırakır */
            box-sizing: border-box;
        }

        .comment-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 20px;
        }

        .comment-img {
            width: 100%;
            height: 200px; /* İstediğiniz yüksekliği ayarlayın */
            object-fit: cover;
        }

        .comment-content {
            padding: 15px;
            color: #000;
        }

        .product-rate {
            display: flex;
            align-items: center;
        }

        .product-rating {
            height: 12px;
            background-repeat: repeat-x;
            background-image: url('{{ asset('assets/imgs/theme/rating-stars.png') }}');
            background-position: 0 0;
        }

        .product-rating {
            height: 12px;
            background-repeat: repeat-x;
            background-image: url("{{ asset('assets/imgs/theme/rating-stars.png') }}");
            background-position: 0 0;
        }

        .comment-author {
            font-weight: bold;
            margin-top: 10px;
        }

        .comment-text {
            font-size: 0.9em;
            color: #666;
            margin-top: 5px;
        }

        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .text-brand {
            color: #088178 !important;
            font-weight: bolder;
            font-size: 30px;
        }

        ins {
            text-decoration: line-through;
            font-size: 18px;

        }

        h1, h2, h3, h4, h5, h6 {
            font-family: "Spartan", sans-serif;
            font-weight: 700;
            margin: 0 0 15px 0;
        }

        p, span, a, li, td, th, input, button {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            margin: 0;
            padding: 0;
        }

        strong {
            font-size: 18px;
        }

        .product-rating {
            background: url('{{asset('assets/imgs/page/star.png')}}') repeat-x;
            height: 20px;
        }

        .note {
            font-size: 1em;
        }

        .complete-order {
            padding: 10px 20px;
            font-size: 1.1em;
        }

        .modal-body .price {
            font-weight: bold;
            margin-left: auto;
        }

        .total-section {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 10px;
            background-color: #f8f9fa;
            margin-bottom: 10px;
        }

        .total-section .row {
            margin-bottom: 5px;
        }

        .total-section .row:last-child {
            margin-bottom: 0;
        }

        .total-section .label {
            font-weight: bold;
            color: #333;
        }

        .total-section .value {
            font-weight: bold;
            color: #333;
        }

        .total-section .discount {
            color: #ff5722;
            font-weight: bold;
        }

        .total-section .total {
            font-size: 1.2em;
            color: #28a745;
            font-weight: bold;
        }


        /* Custom styles to match the provided design */
        .product-detail-rating {
            padding-left: 5px;
        }

        .product-price-cover {
            padding: 15px 0;
            border-top: 1px solid #e2e9e1;
            border-bottom: 1px solid #e2e9e1;
        }

        .save-price {
            padding: 3px 10px;
            background-color: #ff5722;
            color: white;
            border-radius: 5px;
        }

        .short-desc p {
            margin-bottom: 5px;
        }

        .product_sort_info ul {
            padding-left: 0;
        }

        .product_sort_info ul li {
            list-style: none;
            margin-bottom: 5px;
        }

        .product-extra-link2 button {
            background-color: #28a745 !important;
            border: none;
            padding: 10px;
            font-size: 1.2em;
        }

        .product-option {
            border: 2px solid #a2a3a4;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 5px;
            background-color: #fff;
            cursor: pointer;
            transition: border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
        }

        .product-option.active {
            border-color: #ff5722;
            background-color: #fff7f2;
        }

        .product-option img {
            max-height: 60px;
            margin-right: 15px;
        }

        .product-option .discount {
            background-color: #ff5722;
            color: white;
            padding: 2px 5px;
            border-radius: 3px;
            font-size: 0.8em;
            margin-top: 5px;
        }

        .product-option .price {
            font-size: 1.2em;
            color: #ff5722;
        }

        .product-option .original-price {
            text-decoration: line-through;
            font-size: 0.9em;
            color: #999;
        }

        .product-option .details {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .product-option .details .info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 5px;
        }

        .product-option .details .title {
            font-weight: bold;
            font-size: 1.1em;
        }

        .shipping-section {
            margin-top: 20px;
        }

        .shipping-section .form-check {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            border: 2px solid #ddd;
            border-radius: 10px;
            margin-bottom: 10px;
            background-color: #fff;
            cursor: pointer;
            transition: border-color 0.3s ease-in-out;
        }

        .shipping-section .form-check.active {
            border-color: #28a745;
        }

        .shipping-section .form-check input[type="radio"] {
            margin-right: 10px;
        }

        .shipping-section .form-check-label {
            display: flex;
            justify-content: space-between;
            width: 100%;
            align-items: center;
        }

        .shipping-section .form-check input {
            margin-right: 10px;
        }

        .gallery-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            max-width: 100%;
            padding: 10px;
        }

        .main-image-container {
            width: 100%;
            max-height: 300px;
            overflow: hidden;
            position: relative;
        }

        .main-image-container img {
            width: 100%;
            height: 300px; /* Fixed height */
            object-fit: cover;
        }

        .thumbnail-wrapper {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .thumbnail-container {
            display: flex;
            gap: 5px;
            overflow-x: auto;
            scroll-behavior: smooth;
            flex: 1;
        }

        .thumbnail-container img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            cursor: pointer;
            flex-shrink: 0;
        }

        .arrow {
            cursor: pointer;
            font-size: 1.4em;
            user-select: none;
            padding: 0 5px;
        }

        .order-form {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 20px;
            padding: 15px 0;
        }

        .order-form .product-option img {
            max-height: 60px;
            margin-right: 15px;
        }

        .order-form .btn-close {
            float: right;
        }

        .product-rate {
            background-image: url("{{ asset('assets/imgs/theme/rating-stars.png') }}");
            background-position: 0 -12px;
            background-repeat: repeat-x;
            height: 12px;
            width: 60px;
            transition: all 0.5s ease-out 0s;
            -webkit-transition: all 0.5s ease-out 0s;
        }

        .d-inline-block {
            display: inline-block !important;
        }

        .product-rating {
            height: 12px;
            background-repeat: repeat-x;
            background-image: url("{{ asset('assets/imgs/theme/rating-stars.png') }}");
            background-position: 0 0;
        }

    </style>
</head>
<body>
<div class="gallery-container">
    <div class="main-image-container">
        <img id="mainImage" src="{{asset('assets/imgs/products/uzay-bulut-robotu/10.webp')}}" alt="product image">
    </div>
    <div class="thumbnail-wrapper">
        <span class="arrow" onclick="scrollThumbnails(-1)">&#10094;</span>
        <div class="thumbnail-container" id="thumbnailContainer">
            <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/10.webp')}}" alt="thumbnail image"
                 onclick="changeImage(this)">
            <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/13.webp')}}" alt="thumbnail image"
                 onclick="changeImage(this)">
            <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/13.webp')}}" alt="thumbnail image"
                 onclick="changeImage(this)">
            <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/kurulum.webp')}}" alt="thumbnail image"
                 onclick="changeImage(this)">
            <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/15.webp')}}" alt="thumbnail image"
                 onclick="changeImage(this)">
            <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/15.webp')}}" alt="thumbnail image"
                 onclick="changeImage(this)">
            <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/16.webp')}}" alt="thumbnail image"
                 onclick="changeImage(this)">
        </div>
        <span class="arrow" onclick="scrollThumbnails(1)">&#10095;</span>
    </div>
</div>
<div class="container-fluid">
    <h2 class="title-detail mt-4" style="margin-bottom: 5px">Uzay Bulut Robotu</h2>
    <div class="product-detail-rating d-flex justify-content-between align-items-center mb-3" style="padding: 10px 0;">
        <div class="product-rate-cover text-end d-flex align-items-center">
            <span class="font-small ml-3 text-muted"><strong>4.5</strong></span>
            <div class="product-rate d-inline-block mx-2">
                <div class="product-rating" style="width:90%;"></div>
            </div>
            <a class="font-small ml-3 text-muted" href="#reviews"> 123 değerlendirme</a>
        </div>
    </div>
    <div class="clearfix product-price-cover my-3">
        <div class="product-price primary-color">
            <span class="text-brand h4">889.00₺</span>
            <ins><span class="old-price font-md ml-3 text-muted">1399.00₺</span></ins>
            <span class="save-price font-md ml-3 text-white bg-danger p-1 rounded">35% indirim</span>
        </div>
    </div>
    <div class="short-desc mb-3">
        <div class="emoji-benefits-container">
            <p><strong>🌌 Tüm odayı kaplayan uzay ışığı</strong></p>
            <p><strong>🚦 8 farklı ayarlanabilir renk</strong></p>
            <p><strong>⏳ Uyku zamanlayıcısı özelliği</strong></p>
            <p><strong>🚚 Şeffaf kargo ile kapıda ödeme</strong></p>
        </div>
    </div>
    <div class="border-top my-3"></div>

    <div class="delivery-info mb-2">
        <i class="fas fa-shipping-fast"></i>
        <small id="delivery-dates"></small>
        <p>tarihleri arasında siparişin kapında!</p>
    </div>
    <div class="product-extra-link2 mb-3">
        <button type="button" class="btn btn-success btn-block bounce" onclick="scrollToOrderForm()">
            Kapıda Ödemeli Sipariş Ver
        </button>
    </div>


    <h6 class="section-title style-1 my-30 text-center" id="reviews">Müşteri yorumları (123)</h6>
    <div class="comments-container">
        <div class="comment-item">
            <div class="comment-card">
                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/1.webp')}}" class="comment-img"
                     alt="Comment Image">
                <div class="comment-content">
                    <div class="product-rate d-inline-block mb-1">
                        <div class="product-rating" style="width:100%"></div>
                    </div>
                    <h6 class="mb-1">Zeynep B.</h6>
                    <small>Ürünü gece 1 gibi sipariş ettim 13 saat sonra elime ulaştı. Çok
                        sağlam bir şekilde paketlenmişti. Çok kaliteli, çocukların
                        ilgisini çeken bir ürün kuzey ışıklarını eve getirdi, satıcıya
                        ilgisi için teşekkür ederim</small>
                </div>
            </div>
        </div>
        <div class="comment-item">
            <div class="comment-card">
                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/2.webp')}}" class="comment-img"
                     alt="Comment Image">
                <div class="comment-content">
                    <div class="product-rate d-inline-block mb-1">
                        <div class="product-rating" style="width:90%"></div>
                    </div>
                    <h6 class="mb-1">***** *</h6>
                    <small>Ürünü terettüd ederek aldım. Video aldatıcı olabilir diye
                        düşünüyordum ama çok güzel Lazer ve projeksiyon a sahipmiş.
                        Oğlum sadece ışıkları izlemek için bile erkenden yatağa koşuyor
                        ve kısa sürede kendi başına uyumaya başlıyor.</small>
                </div>
            </div>
        </div>
        <div class="comment-item">
            <div class="comment-card">
                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/3.webp')}}" class="comment-img"
                     alt="Comment Image">
                <div class="comment-content">
                    <div class="product-rate d-inline-block mb-1">
                        <div class="product-rating" style="width:90%"></div>
                    </div>
                    <h6 class="mb-1">Hatice E***</h6>
                    <small>Odasinda uyumakta zorluk ceken cocuklar icin cok faydali,
                        eskisinden daha cok vakit gecirmeye basladi odasinda. Gerçekten
                        karanlik ortamda harika bir görsel yansitiyor.</small>
                </div>
            </div>
        </div>
        <div class="comment-item">
            <div class="comment-card">
                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/4.webp')}}" class="comment-img"
                     alt="Comment Image">
                <div class="comment-content">
                    <div class="product-rate d-inline-block mb-1">
                        <div class="product-rating" style="width:90%"></div>
                    </div>
                    <h6 class="mb-1">Hatice E***</h6>
                    <small>Çoooooooook iyi</small>
                </div>
            </div>
        </div>
        <div class="comment-item">
            <div class="comment-card">
                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/5.webp')}}" class="comment-img"
                     alt="Comment Image">
                <div class="comment-content">
                    <div class="product-rate d-inline-block mb-1">
                        <div class="product-rating" style="width:90%"></div>
                    </div>
                    <h6 class="mb-1">Hatice E***</h6>
                    <small>çok çekinerek almıştım fakat Bi anda dünyanız değişiyor</small>
                </div>
            </div>
        </div>
        <div class="comment-item">
            <div class="comment-card">
                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/6.webp')}}" class="comment-img"
                     alt="Comment Image">
                <div class="comment-content">
                    <div class="product-rate d-inline-block mb-1">
                        <div class="product-rating" style="width:90%"></div>
                    </div>
                    <h6 class="mb-1">Hatice E***</h6>
                    <small>5 yıldız hak eden bir ürün...yildizlar harika görünüyor toplam 3 tane aldım hediye etmek
                        için.</small>
                </div>
            </div>
        </div>
    </div>

    <form method="post" action="{{route('orders.store')}}" class="order-form" id="order-form">
        @csrf
        <input type="hidden" name="quantity" id="quantity" value="1">
        <input type="hidden" name="product" value="Uzay Bulut Robotu">
        <h5 class="modal-title text-center pt-" id="paymentModalLabel">Kapıda Ödemeli Sipariş Formu</h5>
        <div class="modal-body">
            <div class="product-option active d-flex align-items-center mb-1" data-quantity="1">
                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/10.webp')}}" class="img-fluid"
                     alt="product image">
                <div class="details">
                    <div class="info">
                        <span class="title">1 Adet</span>
                        <span class="price">889.00TL</span>
                    </div>
                </div>
            </div>
            <div class="product-option d-flex align-items-center mb-3" data-quantity="2">
                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/10.webp')}}" class="img-fluid"
                     alt="product image">
                <div class="details">
                    <div class="info">
                        <span class="title">2 Adet
                        <br>
                    <div class="discount">Tanesi 299TL</div>
                        </span>
                        <span class="price">1,678.00TL
                        <br>
                            <div class="original-price">1,768.00TL</div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="total-section mb-3">
                <div class="row justify-content-between">
                    <div class="col-6 label">Ara Toplam</div>
                    <div class="col-6 value text-right">889.00TL</div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-6 label">Kargo</div>
                    <div class="col-6 value text-right" id="shipping-cost">Ücretsiz</div>
                </div>
                <div class="row justify-content-between" id="discounts">
                    <div class="col-6 label">İndirimler</div>
                    <div class="col-6 discount text-right" id="discount_amount"></div>
                </div>
                <div class="row justify-content-between total-row mt-2 pt-2 border-top">
                    <div class="col-6 label">Toplam</div>
                    <div class="col-6 total text-right" id="total-price">889.00TL</div>
                </div>
            </div>
            <div class="shipping-section mb-3">
                <div class="form-check active" onclick="selectPaymentType(this)">
                    <input type="radio" class="form-check-input" name="paymentTypeCash" data-additional-cost="0" checked>
                    <label class="form-check-label">
                        <span>Kapıda Nakit Ödeme</span>
                        <span>Ücretsiz</span>
                    </label>
                </div>
                <div class="form-check" onclick="selectPaymentType(this)">
                    <input type="radio" class="form-check-input" name="paymentTypeCard" data-additional-cost="19.00">
                    <label class="form-check-label">
                        <span>Kapıda Kartlı Ödeme</span>
                        <span>+19.00TL</span>
                    </label>
                </div>
            </div>


            <form>
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text">   <i class="fas fa-user"></i></span>
                        <input name="name" type="text" class="form-control" placeholder="Adınız Soyadınız">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        <input name="phone" type="tel" class="form-control" placeholder="Telefon Numaranız">
                    </div>
                </div>
                <h2 class="note text-center text-danger my-3">
                    Teslimat adresinizi <strong class="text-danger">EKSİKSİZ GİRİN!</strong>
                </h2>
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                        <select required name="city_id" class="form-control" id="citySelect">
                            <option value="">İl Seçiniz</option>
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                        <select required name="district_id" class="form-control" id="districtSelect">
                            <option value="">İlçe Seçiniz</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                        <select required name="neighborhood_id" class="form-control" id="neighborhoodSelect">
                            <option value="">Mahalle Seçiniz</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-home"></i></span>
                        <input name="address" required type="text" class="form-control"
                               placeholder="Sokak, Kapı Numarası ve Daire">
                    </div>
                </div>
                <div class="product-extra-link2">
                    <button type="submit" class="btn btn-success btn-block complete-order">
                        SİPARİŞİ TAMAMLAYIN - 889.00TL
                    </button>
                </div>
                <div class="mt-3 text-center">
                    Lütfen teslim almayacağınız siparişleri VERMEYİN!
                </div>
            </form>
        </div>
    </form>
</div>
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

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

<script>
    document.getElementById('whatsappButton').addEventListener('click', function() {
        const currentUrl = window.location.href;
        const message = "Bu ürün hakkında daha fazla bilgi alabilir miyim\n\n" + currentUrl;
        const phoneNumber = "905437434267";
        window.open(`https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`, '_blank');
    })
</script>
<script>
    function changeImage(thumbnail) {
        const mainImage = document.getElementById('mainImage');
        mainImage.src = thumbnail.src;
        const container = document.getElementById('thumbnailContainer');
        container.scrollLeft = thumbnail.offsetLeft - container.offsetLeft;
    }

    function scrollThumbnails(direction) {
        const container = document.getElementById('thumbnailContainer');
        const scrollAmount = 70; // Adjust based on thumbnail width and desired scroll amount
        container.scrollBy({left: direction * scrollAmount, behavior: 'smooth'});
    }

    function scrollToOrderForm() {
        const orderForm = document.getElementById('order-form');
        orderForm.scrollIntoView({behavior: 'smooth'});
    }
</script>
<script>
    function selectPaymentType(element) {
        const paymentOptions = document.querySelectorAll('.shipping-section .form-check');
        paymentOptions.forEach(option => {
            const radioInput = option.querySelector('input[type="radio"]');
            option.classList.remove('active');
            radioInput.checked = false;
        });
        element.classList.add('active');
        const selectedRadio = element.querySelector('input[type="radio"]');
        selectedRadio.checked = true;
        additionalCost = parseFloat(selectedRadio.dataset.additionalCost) || 0; // Update additional cost
        updateTotal(); // Recalculate total price
    }

    const productOptions = document.querySelectorAll('.product-option');
    const paymentOptions = document.querySelectorAll('input[name="paymentType"]');
    const totalElement = document.getElementById('total-price');
    const completeOrderButton = document.querySelector('.complete-order');

    // Base prices
    const prices = {
        '1': 889.00,
        '2': 1778.00
    };
    const discounts = {
        '1': 0,
        '2': 100.00
    };


    let selectedProduct = '1';
    let selectedShipping = '1';
    let additionalCost = 0;

    productOptions.forEach(option => {
        option.addEventListener('click', function () {
            productOptions.forEach(opt => opt.classList.remove('active'));
            this.classList.add('active');

            // Update the selected product
            selectedProduct = this.getAttribute('data-quantity');
            document.getElementById('quantity').value = selectedProduct;
            // Update the total price
            updateTotal();
        });
    });

    paymentOptions.forEach(option => {
        option.addEventListener('change', function () {
            // Update additional cost
            additionalCost = parseFloat(this.dataset.additionalCost) || 0;

            // Update the total price
            updateTotal();
        });
    });

    function updateTotal() {
        const totalPrice = prices[selectedProduct] - discounts[selectedProduct] + additionalCost;
        if (discounts[selectedProduct] > 0) {
            document.getElementById('discounts').style.display = 'flex';
            document.getElementById('discount_amount').innerText = '-' + discounts[selectedProduct].toFixed(2) + 'TL';
        } else {
            document.getElementById('discounts').style.display = 'none';
        }
        totalElement.innerText = totalPrice.toFixed(2) + 'TL';

        if (completeOrderButton) {
            completeOrderButton.innerText = 'SİPARİŞİ TAMAMLAYIN - ' + totalPrice.toFixed(2) + 'TL';
        }
    }

    updateTotal();

</script>

<script>
    document.getElementById('citySelect').addEventListener('change', function () {
        const cityId = this.value;
        const districtSelect = document.getElementById('districtSelect');
        const neighborhoodSelect = document.getElementById('neighborhoodSelect');

        districtSelect.innerHTML = '<option value="">İlçe</option>'; // Clear previous options
        neighborhoodSelect.innerHTML = '<option value="">Mahalle</option>'; // Clear previous options

        if (cityId) {
            fetch(`/city/${cityId}/districts`)
                .then(response => response.json())
                .then(data => {
                    data.forEach(district => {
                        const option = document.createElement('option');
                        option.value = district.id;
                        option.textContent = district.name;
                        districtSelect.appendChild(option);
                    });
                });
        }
    });

    document.getElementById('districtSelect').addEventListener('change', function () {
        const districtId = this.value;
        const neighborhoodSelect = document.getElementById('neighborhoodSelect');

        neighborhoodSelect.innerHTML = '<option value="">Mahalle</option>'; // Clear previous options

        if (districtId) {
            fetch(`/district/${districtId}/neighborhoods`)
                .then(response => response.json())
                .then(data => {
                    data.forEach(neighborhood => {
                        const option = document.createElement('option');
                        option.value = neighborhood.id;
                        option.textContent = neighborhood.name;
                        neighborhoodSelect.appendChild(option);
                    });
                });
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        const daysOfWeek = ['Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi'];
        const monthsOfYear = ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'];
        const today = new Date();

        // Calculate the dates
        const firstDeliveryDate = new Date(today);
        firstDeliveryDate.setDate(today.getDate() + 1);

        const lastDeliveryDate = new Date(today);
        lastDeliveryDate.setDate(today.getDate() + 3);

        // Get the days of the week
        const firstDay = daysOfWeek[firstDeliveryDate.getDay()];
        const lastDay = daysOfWeek[lastDeliveryDate.getDay()];

        // Get the months of the year
        const firstMonth = monthsOfYear[firstDeliveryDate.getMonth()];
        const lastMonth = monthsOfYear[lastDeliveryDate.getMonth()];

        // Format the dates
        const firstDate = firstDeliveryDate.getDate() + ' ' + firstMonth + ' ' + firstDay;
        const lastDate = lastDeliveryDate.getDate() + ' ' + lastMonth + ' ' + lastDay;

        // Set the content
        const deliveryDatesElement = document.getElementById('delivery-dates');
        deliveryDatesElement.innerHTML = `${firstDate} - ${lastDate}`;
    });


</script>
</body>
</html>
