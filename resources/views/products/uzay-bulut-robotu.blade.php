@extends('layouts.productapp')
@section('title')
    Uzay Bulut Robotu
@endsection

@section('styles')
    <style>
        .footer-list {
            list-style: none; /* Varsayılan liste stilini kaldır */
            padding: 0;
        }

        .footer-list li {
            padding: 10px; /* İç boşluk ekle */
            background-color: #f9f9f9; /* Hafif arka plan rengi ekle */
            border-radius: 5px; /* Köşeleri yuvarla */
            transition: background-color 0.3s ease; /* Geçiş efekti ekle */
            display: flex;
            align-items: center;
        }

        .footer-list li a {
            color: #007bff; /* Bağlantı rengi */
            text-decoration: none; /* Alt çizgiyi kaldır */
            transition: color 0.3s ease; /* Geçiş efekti ekle */
            display: flex;
            align-items: center;
        }

        .footer-list li a:hover {
            color: #0056b3; /* Fare üzerine geldiğinde bağlantı rengini değiştir */
        }

        .footer-list li a::before {
            content: '\f0a9'; /* Font Awesome ikonu */
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            margin-right: 10px; /* Metin ile ikon arasına boşluk ekle */
            color: #007bff; /* İkon rengi */
        }

        .footer-list li:hover {
            background-color: #e9ecef; /* Fare üzerine geldiğinde arka plan rengini değiştir */
        }

        .btn-whatsapp {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 10px;
            margin: 10px auto;
            border: 2px solid #25D366; /* WhatsApp yeşili */
            border-radius: 10px;
            background-color: white;
            color: #25D366; /* WhatsApp yeşili */
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-whatsapp i {
            margin-right: 10px;
            font-size: 20px;
        }

        .btn-whatsapp:hover {
            background-color: #25D366; /* WhatsApp yeşili */
            color: white;
        }

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

        .section-title {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
        }

        .section-title span {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            position: relative;
            padding: 0 20px;
        }

        .section-title::before,
        .section-title::after {
            content: '';
            flex: 1;
            border-bottom: 2px solid #FF4500; /* Line color */
            margin: 0 10px;
        }

        .kargo-bedava {
            font-size: 10px;
            border: 1px solid #595555;
            border-radius: 5px;
            background-color: #fff;
            padding: 2px;
        }

        .contact-widget {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
        }

        .contact-widget .logo {
            margin-bottom: 20px;
        }

        .contact-widget h5 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #333;
        }

        .contact-widget p {
            margin: 10px 0;
            font-size: 16px;
            color: #666;
        }

        .contact-widget p i {
            color: #007bff;
            margin-right: 10px;
        }

        .contact-widget p strong {
            font-weight: bold;
            color: #333;
        }

        .header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: white;
            z-index: 1000;
            transition: top 0.3s;
        }

        .header.hidden {
            top: -60px; /* Üst kısım yüksekliğine göre ayarla */
        }

        .content {
            margin-top: 60px; /* Üst kısım yüksekliğine göre ayarla */
        }

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
            padding: 0;
            box-sizing: border-box;
            max-width: 600px;
            margin: 0 auto;
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
            background-color: rgb(235, 235, 235);
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
            font-weight: 700;
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
            padding: 10px 20px;
            border: 2px solid #ddd;
            border-radius: 3px;
            margin-bottom: 10px;
            background-color: #fff;
            cursor: pointer;
            transition: border-color 0.3s ease-in-out;
        }

        .shipping-section .form-check.active {
            border-color: #28a745;
        }

        .shipping-section .form-check input[type="radio"] {
            background-color: #28a745;
            border-color: #28a745;
            padding-left: 1px;
        }

        .shipping-section .form-check-label {
            display: flex;
            justify-content: space-between;
            width: 100%;
            align-items: center;
        }

        .shipping-section .form-check span {
            flex: 1;
            text-align: left;
        }

        .shipping-section .form-check span:last-child {
            text-align: right;
            color: #000;
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
            overflow: hidden;
            position: relative;
        }

        .main-image-container img {
            width: 100%;
            object-fit: cover;
        }

        .thumbnail-wrapper {
            display: flex;
            align-items: center;
            width: 100%;
            gap: 10px; /* Thumbnails arasında daha fazla boşluk */
        }

        .thumbnail-container {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            scroll-behavior: smooth;
            flex: 1;
            padding: 10px; /* İç boşluk ekleyerek daha geniş bir görünüm */
            scrollbar-width: none; /* Firefox için yatay kaydırma çubuğunu gizler */
            -ms-overflow-style: none; /* Internet Explorer 10+ için yatay kaydırma çubuğunu gizler */
        }

        .thumbnail-container::-webkit-scrollbar {
            display: none; /* Chrome, Safari ve Opera için yatay kaydırma çubuğunu gizler */
        }

        .thumbnail-container img {
            width: 100px; /* Daha büyük thumbnailler */
            height: 100px;
            object-fit: cover;
            cursor: pointer;
            flex-shrink: 0;
            border-radius: 15px; /* Yuvarlak köşeler */
            border: 2px solid #ddd; /* İnce bir çerçeve */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Hafif gölge efekti */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Hover efekti için geçişler */
        }

        .thumbnail-container img:hover {
            transform: scale(1.05); /* Hover üzerinde hafif büyütme */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Hover üzerinde daha belirgin gölge */
        }

        .arrow {
            cursor: pointer;
            font-size: 2em; /* Daha büyük oklar */
            user-select: none;
            padding: 0 10px;
            color: #333; /* Daha belirgin ok rengi */
            transition: color 0.3s ease; /* Geçiş efekti */
        }

        .arrow:hover {
            color: #000; /* Hover üzerinde ok rengi değişimi */
        }

        .order-form {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 20px;
            padding: 15px 0;
        }

        .tag-container {
            display: inline-block;
            padding: 2px 5px;
            font-size: 14px;
            font-weight: bold;
            border: 2px solid #a21717;
            color: #a21717;
            margin: 0 auto;
            text-align: center;
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

        .countdown-container {
            background-color: #ae5a40;
            color: #fff;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: 10px auto; /* Ortaya hizalamak için */
            font-family: Arial, sans-serif; /* Sadece bu element için font ayarı */
        }

        .countdown-container h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .countdown-container p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .countdown {
            display: flex;
            justify-content: space-around;
            font-size: 24px;
            font-weight: bold;
        }

        .countdown div {
            text-align: center;
            flex: 1;
        }

        .countdown div span {
            display: block;
            font-size: 36px; /* Daha büyük font boyutu */
            margin-top: 5px;
        }
    </style>
@endsection

@section('content')
    <div class="gallery-container mt-5">
        <div class="main-image-container">
            <img id="mainImage" src="{{asset('assets/imgs/products/uzay-bulut-robotu/10.webp')}}" height="400"
                 alt="product image" loading="lazy">
        </div>
        <div class="thumbnail-wrapper">
            <span class="arrow" onclick="scrollThumbnails(-1)">&#10094;</span>
            <div class="thumbnail-container" id="thumbnailContainer">
                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/10.webp')}}" height="400"
                     alt="thumbnail image"
                     onclick="changeImage(this)">
                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/13.webp')}}" height="400"
                     alt="thumbnail image"
                     onclick="changeImage(this)">
                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/kurulum.webp')}}" height="400"
                     alt="thumbnail image"
                     onclick="changeImage(this)">
                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/15.webp')}}" height="400"
                     alt="thumbnail image"
                     onclick="changeImage(this)">
                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/16.webp')}}" height="400"
                     alt="thumbnail image"
                     onclick="changeImage(this)">
            </div>
            <span class="arrow" onclick="scrollThumbnails(1)">&#10095;</span>
        </div>
    </div>
    <div class="text-center">
        <div class="tag-container text-center mx-auto">ÇOK SATAN | TREND ÜRÜN</div>
    </div>
    <div class="container-fluid">
        <h2 class="title-detail mt-4" style="margin-bottom: 0px">Uzay Bulut Robotu</h2>
        <div class="product-detail-rating d-flex justify-content-between align-items-center mb-3">
            <div class="product-rate-cover text-end d-flex align-items-center">
                <span class="font-small ml-1 text-muted"><strong>4.5</strong></span>
                <div class="product-rate d-inline-block mx-2">
                    <div class="product-rating" style="width:90%;"></div>
                </div>
                <a class="font-small ml-3 text-muted" href="#reviews">( 123 değerlendirme)</a>
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
        <div class="section-title">
            <span>ÇOK AL & AZ ÖDE</span>
        </div>
        <div class="">
            <div class="product-option active d-flex align-items-center mb-1" data-quantity="1">
                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/10.webp')}}" width="60" height="60"
                     class="img-fluid"
                     alt="product image">
                <div class="details">
                    <div class="info">
                        <span class="title">1 Adet <small class="kargo-bedava">Kargo Bedava</small></span>
                        <span class="price">889.00TL</span>
                    </div>
                </div>
            </div>
            <div class="product-option d-flex align-items-center mb-3" data-quantity="2">
                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/10.webp')}}" width="60" height="60"
                     class="img-fluid"
                     alt="product image">
                <div class="details">
                    <div class="info">
                        <span class="title">2 Adet <small class="kargo-bedava">Kargo Bedava</small>
                        <br>
                    <div class="discount" style="max-width: 115px">+100TL indirim</div>
                        </span>
                        <span class="price">1,678.00TL
                        <br>
                            <div class="original-price">1,768.00TL</div>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-top my-3"></div>

        <div class="delivery-info mb-4">
            <i class="fas fa-shipping-fast"></i>
            <small id="delivery-dates"></small>
            <p>tarihleri arasında siparişin kapında!</p>
        </div>
        <div class="product-extra-link2 mb-3">
            <button type="button" class="btn btn-success btn-block bounce" onclick="scrollToOrderForm()">
                Kapıda Ödemeli Sipariş Ver
            </button>
        </div>
        <div class="mb-3">
            <a href="" class="btn-whatsapp" id="whatsappOrderBtn">
                <i class="fab fa-whatsapp"></i>
                Whatsapp ile Sipariş Ver
            </a>
        </div>

        <div class="countdown-container">
            <h1>Lansmana Özel %35 İndirim!</h1>
            <p>Kaçırmayın! İndirimin Bitmesine:</p>
            <div class="countdown">
                <div>
                    <span id="days">00</span>
                    Gün
                </div>
                <div>
                    <span id="hours">00</span>
                    Saat
                </div>
                <div>
                    <span id="minutes">00</span>
                    Dakika
                </div>

                <div>
                    <span id="seconds">00</span>
                    Saniye
                </div>
            </div>
        </div>


        <div style="background-color: #e5e5e5;border-radius: 20px" class="p-3">
            <div class="col-12 text-center mb-2">
                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/6.webp')}}" width="300" alt="">
            </div>
            <small>
                <em>Ürünü terettüd ederek aldım. Video aldatıcı olabilir diye düşünüyordum ama çok güzel Lazer ve
                    projeksiyon a sahipmiş.
                    Oğlum sadece ışıkları izlemek için bile erkenden yatağa koşuyor ve kısa sürede kendi başına uyumaya
                    başlıyor.</em>
            </small>
            <br>
            <hr>
            <span class="text-muted">
        Aslı T*****
        <div class="product-rate d-inline-block mb-1">
            <div class="product-rating" style="width:100%"></div>
        </div>
        </span>
        </div>

        <h6 class="section-title style-1 my-30 text-center" id="reviews">Müşteri yorumları (123)</h6>
        <div class="comments-container">
            <div class="comment-item">
                <div class="comment-card">
                    <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/1.webp')}}" width="200"
                         height="200" class="comment-img"
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
                    <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/2.webp')}}" width="200"
                         height="200" class="comment-img"
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
                    <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/3.webp')}}" width="200"
                         height="200" class="comment-img"
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
                    <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/4.webp')}}" width="200"
                         height="200" class="comment-img"
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
                    <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/5.webp')}}" width="200"
                         height="200" class="comment-img"
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
                    <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/6.webp')}}" width="200"
                         height="200" class="comment-img"
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
        <div class="mb-2 description">
            <p>
                <img alt="" style="max-width: 100%" src="{{asset('assets/imgs/products/uzay-bulut-robotu/13.webp')}}">
                <br><br>
                <img alt="" style="max-width: 100%" width="500" height="300"
                     src="https://cdn.shopify.com/s/files/1/0660/0566/3908/files/kurulum.gif?v=1718391242">
            </p>
        </div>
        <form method="post" action="{{route('orders.store')}}" class="order-form" id="order-form">
            @csrf
            <input type="hidden" name="quantity" id="quantity" value="1">
            <input type="hidden" name="total_price" id="total_price" value="889">
            <input type="hidden" name="products" value="Uzay Bulut Robotu">
            <h5 class="modal-title text-center pt-" id="paymentModalLabel">Kapıda Ödemeli Sipariş Formu</h5>
            <div class="modal-body">
                <div class="product-option active d-flex align-items-center mb-1" data-quantity="1">
                    <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/10.webp')}}" width="60" height="60"
                         class="img-fluid"
                         alt="product image">
                    <div class="details">
                        <div class="info">
                            <span class="title">1 Adet <small class="kargo-bedava">Kargo Bedava</small></span>
                            <span class="price">889.00TL</span>
                        </div>
                    </div>
                </div>
                <div class="product-option d-flex align-items-center mb-3" data-quantity="2">
                    <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/10.webp')}}" width="60" height="60"
                         class="img-fluid"
                         alt="product image">
                    <div class="details">
                        <div class="info">
                        <span class="title">2 Adet <small class="kargo-bedava">Kargo Bedava</small>
                        <br>
                    <div class="discount" style="max-width: 115px">+100TL indirim</div>
                        </span>
                            <span class="price">1,678.00TL
                        <br>
                            <div class="original-price">1,768.00TL</div>
                        </span>
                        </div>
                    </div>
                </div>
                <div class="total-section mb-1">
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
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="paymentType" data-additional-cost="0"
                                   checked>
                            <span>Kapıda Nakit Ödeme</span>
                            <span>Ücretsiz</span>
                        </label>
                    </div>
                    <div class="form-check" onclick="selectPaymentType(this)">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="paymentType"
                                   data-additional-cost="19.00">
                            <span>Kapıda Kartlı Ödeme</span>
                            <span>19.00TL</span>
                        </label>
                    </div>
                </div>


                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text">   <i class="fas fa-user"></i></span>
                        <input name="name" type="text" required class="form-control" placeholder="Adınız Soyadınız">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        <input name="phone" required type="tel" class="form-control" placeholder="Telefon Numaranız">
                    </div>
                </div>
                {{--<h2 class="note text-center text-danger my-3">
                    Teslimat adresinizi <strong class="text-danger">EKSİKSİZ GİRİN!</strong>
                </h2>--}}
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
                        <select name="neighborhood_id" class="form-control" id="neighborhoodSelect">
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
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById('order-form').addEventListener('submit', function(event) {
            fbq('track', 'Purchase', {
                content_name: 'Uzay Bulut Robotu',  // Name of the product
                content_ids: ['1234'],               // Product ID
                content_type: 'product',
                value: 889.00,                       // Total price
                currency: 'TRY'                      // Currency
            });
        });
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
                fbq('track', 'AddToCart', {
                    content_name: 'Uzay Bulut Robotu',  // Optional: Add product details
                    content_ids: ['1234'],         // Optional: Add product ID(s)
                    content_type: 'product',
                    value: 889.90,                  // Optional: Add the price of the product
                    currency: 'TRY'                // Optional: Add the currency
                });
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
                const selectedQuantity = this.getAttribute('data-quantity');

                productOptions.forEach(opt => opt.classList.remove('active'));

                productOptions.forEach(opt => {
                    if (opt.getAttribute('data-quantity') === selectedQuantity) {
                        opt.classList.add('active');
                    }
                });

                selectedProduct = selectedQuantity;
                document.getElementById('quantity').value = selectedProduct;

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

            const totalPriceInput = document.getElementById('total_price');
            if (totalPriceInput) {
                totalPriceInput.value = totalPrice.toFixed(2);
            }

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

            function startCountdown(duration) {
                var countdown = duration, days, hours, minutes, seconds;
                setInterval(function () {
                    days = Math.floor(countdown / (24 * 60 * 60));
                    hours = Math.floor((countdown % (24 * 60 * 60)) / (60 * 60));
                    minutes = Math.floor((countdown % (60 * 60)) / 60);
                    seconds = Math.floor(countdown % 60);

                    document.getElementById('days').textContent = days < 10 ? '0' + days : days;
                    document.getElementById('hours').textContent = hours < 10 ? '0' + hours : hours;
                    document.getElementById('minutes').textContent = minutes < 10 ? '0' + minutes : minutes;
                    document.getElementById('seconds').textContent = seconds < 10 ? '0' + seconds : seconds;

                    if (--countdown < 0) {
                        countdown = duration;
                    }
                }, 1000);
            }

            // 2 dakikalık geri sayım (120 saniye)
            startCountdown(120000);

            let lastScrollTop = 0;
            window.addEventListener("scroll", function () {
                const header = document.querySelector(".header");
                let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                if (scrollTop > lastScrollTop) {
                    // Scroll down
                    header.classList.add("hidden");
                } else {
                    // Scroll up
                    header.classList.remove("hidden");
                }
                lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
            }, false);
        });

    </script>
@endsection
