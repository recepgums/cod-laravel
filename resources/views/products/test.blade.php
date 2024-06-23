<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uzay Bulut Robotu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }
        .header {
            background-color: #fff;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .header img {
            height: 50px;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .main-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .main-image {
            text-align: center;
            position: relative;
        }
        .main-image img {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 10px;
        }
        .thumbnail-slider {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .thumbnail-slider img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            cursor: pointer;
            margin: 0 5px;
            border: 2px solid transparent;
            border-radius: 10px;
        }
        .thumbnail-slider img.active {
            border: 2px solid orange;
        }
        .label {
            position: absolute;
            top: 10px;
            left: 10px;
            background: #ff0;
            padding: 5px;
            font-weight: bold;
            border-radius: 5px;
        }
        .free-shipping {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #000;
            color: #fff;
            padding: 5px;
            font-weight: bold;
            border-radius: 5px;
        }
        .product-info {
            padding: 20px;
        }
        .product-info h1 {
            font-size: 24px;
            margin: 0;
        }
        .product-info .price {
            font-size: 20px;
            color: red;
            margin: 10px 0;
        }
        .product-info .old-price {
            text-decoration: line-through;
            color: gray;
        }
        .product-info .description {
            margin-top: 10px;
        }
        .product-info .description ul {
            padding: 0;
            list-style: none;
        }
        .product-info .description ul li {
            margin-bottom: 10px;
        }
        .product-info button {
            background-color: green;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
            border-radius: 5px;
        }
        .review-section {
            margin-top: 40px;
        }
        .review-section h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .review-item {
            display: flex;
            margin-bottom: 20px;
            background: #fff;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .review-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin-right: 20px;
            border-radius: 8px;
        }
        .review-content {
            flex: 1;
        }
        .review-content h3 {
            margin: 0;
            font-size: 16px;
        }
        .review-content p {
            margin: 5px 0 0 0;
            font-size: 14px;
        }
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }
        @media (max-width: 768px) {
            .main-content {
                grid-template-columns: 1fr;
            }
            .product-info {
                padding: 10px;
            }
            .thumbnail-slider {
                flex-direction: column;
                align-items: center;
            }
            .thumbnail-slider img {
                margin: 5px 0;
            }
        }
    </style>
</head>
<body>

<div class="header">
    <img src="https://via.placeholder.com/150" alt="Logo">
</div>

<div class="container">
    <div class="main-content">
        <div class="main-image">
            <div class="label">ÇOK SATAN | TREND ÜRÜN</div>
            <div class="free-shipping">KARGO BEDAVA</div>
            <img src="https://trendygoods.com.tr/assets/imgs/products/uzay-bulut-robotu/10.webp" id="current-image" alt="Product Image">
        </div>
    </div>
    <div class="thumbnail-slider">
        <img src="https://trendygoods.com.tr/assets/imgs/products/uzay-bulut-robotu/10.webp" alt="Thumbnail 1" class="active">
        <img src="https://trendygoods.com.tr/assets/imgs/products/uzay-bulut-robotu/13.webp" alt="Thumbnail 2">
        <img src="https://trendygoods.com.tr/assets/imgs/products/uzay-bulut-robotu/kurulum.webp" alt="Thumbnail 3">
        <img src="https://trendygoods.com.tr/assets/imgs/products/uzay-bulut-robotu/15.webp" alt="Thumbnail 4">
        <img src="https://trendygoods.com.tr/assets/imgs/products/uzay-bulut-robotu/16.webp" alt="Thumbnail 5">
    </div>
    <div class="product-info">
        <h1>Uzay Bulut Robotu</h1>
        <div class="price">889.00TL</div>
        <div class="old-price">1399.00TL</div>
        <div class="description">
            <ul>
                <li>Tüm odayı kaplayan uzay ışığı</li>
                <li>8 farklı ayarlanabilir renk</li>
                <li>Uyku zamanlayıcısı özelliği</li>
                <li>Şeffaf kargo ile kapıda ödeme</li>
            </ul>
        </div>
        <button>Kapıda Ödeme ile Satın Al</button>
    </div>

    <div class="review-section">
        <h2>Yorumlar</h2>
        <div class="review-item">
            <img src="https://via.placeholder.com/80" alt="Reviewer Image">
            <div class="review-content">
                <h3>Necla K.</h3>
                <p>Ürünü gece 1 gibi sipariş ettim 13 saat sonra elime ulaştı. Çok sağlam bir şekilde paketlenmişti. Çok kaliteli, çocukların ilgisini çeken bir ürün kuzey ışıklarını eve getirdi, satıcıya ilgisi için teşekkür ederim.</p>
            </div>
        </div>
        <div class="review-item">
            <img src="https://via.placeholder.com/80" alt="Reviewer Image">
            <div class="review-content">
                <h3>Ahmet B.</h3>
                <p>Odasında uyumakta zorluk çeken çocuklar için çok faydalı, eskisinden daha çok vakit geçirmeye başladı odasında. Gerçekten karanlık ortamda harika bir görsel yansıtıyor.</p>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <p>&copy; 2024 Trendy Goods. Tüm hakları saklıdır.</p>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.thumbnail-slider img').on('click', function() {
            $('.thumbnail-slider img').removeClass('active');
            $(this).addClass('active');
            $('#current-image').attr('src', $(this).attr('src'));
        });

        $('.thumbnail-slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            dots: false,
            centerMode: true,
            focusOnSelect: true
        });
    });
</script>

</body>
</html>
