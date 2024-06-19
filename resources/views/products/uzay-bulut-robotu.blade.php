@extends('layouts.app')
@section('styles')
    <style>
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }

        .bounce {
            animation: bounce 3s infinite;
        }

        .comment-item {
            margin-bottom: 20px;
        }

        .comment-img {
            max-height: 300px;
            object-fit: cover;
        }
        .product-option.active {
            border: 2px solid #007bff;
            background-color: #e9ecef;
        }
        .comment-content {
            padding: 7px;
        }
        .form-check-input:checked + .form-check-label {
            background-color: #e9ecef;
            border-color: #ced4da;
        }
        .comment-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .comment-card img{
            width: 100%;
        }
        .form-container {
               max-width: 400px;
               margin: auto;
           }
        .form-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
        }
        .product-option {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .product-option img {
            width: 50px;
            height: 50px;
        }
        .product-option.active {
            border-color: #007bff;
        }
        .product-option .price {
            text-align: right;
        }
        .product-option .discount {
            color: red;
            font-size: 12px;
        }
        .total-section, .shipping-section {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .total-section .total {
            font-weight: bold;
        }
        .complete-order {
            background-color: #28a745;
            color: white;
            font-weight: bold;
        }
        .note {
            font-size: 16px;
        }
        .online-payment {
            background-color: #000;
            color: white;
            margin-top: 10px;
        }
    </style>
@endsection
@section('content')
    <main class="main">
        <div class="page-header breadcrumb-wrap d-none d-md-block">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Fashion
                    <span></span> Abstract Print Patchwork Dress
                </div>
            </div>
        </div>
        <section class="mt-md-5 mb-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-10">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/10.png')}}"
                                                     alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/13.png')}}"
                                                     alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/15.png')}}"
                                                     alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/16.png')}}"
                                                     alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/16.png')}}"
                                                     alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/16.png')}}"
                                                     alt="product image">
                                            </figure>
                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails pl-15 pr-15">
                                            <div><img src="{{asset('assets/imgs/products/uzay-bulut-robotu/10.png')}}"
                                                      alt="product image"></div>
                                            <div><img src="{{asset('assets/imgs/products/uzay-bulut-robotu/13.png')}}"
                                                      alt="product image"></div>
                                            <div><img src="{{asset('assets/imgs/products/uzay-bulut-robotu/15.png')}}"
                                                      alt="product image"></div>
                                            <div><img src="{{asset('assets/imgs/products/uzay-bulut-robotu/16.png')}}"
                                                      alt="product image"></div>
                                            <div><img src="{{asset('assets/imgs/products/uzay-bulut-robotu/16.png')}}"
                                                      alt="product image"></div>
                                            <div><img src="{{asset('assets/imgs/products/uzay-bulut-robotu/16.png')}}"
                                                      alt="product image"></div>
                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">Uzay Bulut Robotu</h2>
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand d-none d-md-block">
                                                <span> Stoklar azalıyor!: <a href="#">12 adet kaldı</a></span>
                                            </div>
                                            <div class="product-rate-cover text-end">
                                                <span class="font-small ml-5 text-muted"><strong>4.5</strong></span>
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:90%">
                                                    </div>
                                                </div>
                                                <a class="font-small ml-5 text-muted" href="#reviews"> 123 değerlendirme</a>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span class="text-brand">889.00₺</span></ins>
                                                <ins><span class="old-price font-md ml-5">1399.00₺</span></ins>
                                                <span
                                                    class="save-price  font-md color3 ml-5 text-white bg-danger p-1 border-radius-10">35% indirim</span>
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            <div class="emoji-benefits-container">
                                                <p><strong>🌌 Tüm odayı kaplayan uzay ışığı</strong></p>
                                                <p><strong>🚦 8 farklı ayarlanabilir renk</strong></p>
                                                <p><strong>⏳ Uyku zamanlayıcısı özelliği</strong>
                                                <p><strong>🚚 Şeffaf kargo ile kapıda ödeme</strong></p>
                                            </div>
                                        </div>
                                        <div class="product_sort_info font-xs mb-30">
                                            <ul>
                                                <li class="mb-10"><i class="fi-rs-box mr-5"></i> Şeffaf Kargo
                                                    Güvencesiyle
                                                </li>
                                                <li class="mb-10"><i class="fi-rs-refresh mr-5"></i> Ücretsiz Değişim
                                                    İmkanı
                                                </li>
                                                <li><i class="fi-rs-credit-card mr-5"></i> Kapıda Ödemeli</li>
                                            </ul>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                        <div class="">
                                            <div class="product-extra-link2">
                                                <button type="button" class="button button-add-to-cart bounce" style="width: 100%;background-color: rgba(29, 158, 6, 1) !important;" data-bs-toggle="modal" data-bs-target="#paymentModal">
                                                    Kapıda Ödemeli Sipariş Ver
                                                </button>
                                            </div>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="paymentModalLabel">KAPIDA ÖDEME</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="product-option active" data-quantity="1">
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/10.png')}}" alt="product image">
                                                                <div class="ms-3">
                                                                    <strong>1 Adet</strong>
                                                                </div>
                                                            </div>
                                                            <div class="price">
                                                                889.00TL
                                                            </div>
                                                        </div>
                                                        <div class="product-option" data-quantity="2">
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/10.png')}}" alt="product image">
                                                                <div class="ms-3">
                                                                    <strong>2 Adet</strong>
                                                                    <div class="discount">+100₺ indirim</div>
                                                                </div>
                                                            </div>
                                                            <div class="price">
                                                                <small class="text-decoration-line-through">1,780.00TL</small>
                                                                <br>
                                                                1,678.00TL
                                                            </div>
                                                        </div>
                                                        <div class="total-section">
                                                            <div class="d-flex justify-content-between">
                                                                <div>Ara Toplam</div>
                                                                <div>889.00TL</div>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <div>Kargo</div>
                                                                <div id="shipping-cost">Ücretsiz</div>
                                                            </div>
                                                            <div class="d-flex justify-content-between total">
                                                                <div>Toplam</div>
                                                                <div id="total-price">889.00TL</div>
                                                            </div>
                                                        </div>
                                                        <div class="shipping-section">
                                                            <div class="mb-3">
                                                                <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="paymentType" data-additional-cost="0" checked>
                                                                    Kapıda Nakit Ödeme <strong class="text-end "> (Ücretsiz)</strong>
                                                                </label>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="paymentType" data-additional-cost="19.00">
                                                                    Kapıda Kartlı Ödeme <strong class=" text-end"> (+19.00TL)</strong>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <form>
                                                            <div class="mb-3">
                                                                <input type="text" class="form-control" placeholder="Adınız Soyadınız">
                                                            </div>
                                                            <div class="mb-3">
                                                                <input type="text" class="form-control" placeholder="Telefon Numaranız">
                                                            </div>
                                                            <h2 class="note text-center">
                                                                Teslimat adresinizi <strong class="text-danger">EKSİKSİZ GİRİN!</strong>
                                                            </h2>
                                                            <div class="mb-3">
                                                                <select name="city" class="form-control">
                                                                    <option value="">İL</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <select name="city" class="form-control">
                                                                    <option value="">İLÇE</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <input type="text" class="form-control" placeholder="Tam Adresiniz">
                                                            </div>
                                                            <div class="detail-extralink">
                                                                <div class="product-extra-link2" style="width: 100%;">
                                                                    <button type="submit" class="button button-add-to-cart complete-order" style="width: 100%;background-color: rgba(29, 158, 6, 1) !important;padding:8px 20px">
                                                                        SİPARİŞİ TAMAMLAYIN - 889.00TL
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="mt-3">
                                                                Lütfen teslim almayacağınız siparişleri VERMEYİN!
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 m-auto entry-main-content">
                                    <div class="product__description rte quick-add-hidden">
                                        <p>
                                            <img alt=""
                                                src="https://cdn.shopify.com/s/files/1/0660/0566/3908/files/image_2024-06-14_133644313.png?v=1718361409">
                                            <h3>【En İyi Uyku Arkadaşı】</h3>
                                            Astronot galaksisi gece lambası projektörü, çocuk odasındaki duvarda ve tavanda fantastik bir bulutsu ve yıldızlı gökyüzü yansıtır, geceleri rahat bir uyku ve rahatlama hissi yaratır, bu da olası çocukları sakinleştirir. karanlıktan korkun ve sizin veya bebeklerin daha iyi uyumasına yardımcı olun.
                                        </p>
                                        <p>
                                            <img
                                                alt=""
                                                src="https://cdn.shopify.com/s/files/1/0660/0566/3908/files/kurulum.gif?v=1718391242">
                                        <h3>【Benzersiz Tasarım】</h3>
                                            Astranot yıldızlı gece lambası projektörü, projeksiyon açısını ayarlamanız için döndürülebilmesi için kafası gövdeye manyetik olarak bağlı olan yeni ve benzersiz bir tasarıma sahiptir. Bulutsu ve yıldız projeksiyonu farklı projektör lenslerinden gelir, birlikte veya ayrı ayrı çalışabilirler, bu da sizin için daha fazla projeksiyon seçeneği yaratır.
                                        </p>
                                    </div>
                                    <div class="description mb-50">
                                        <hr class="wp-block-separator is-style-dots">
                                        <p>test</p>
                                        <h4 class="mt-30">Kargo Teslimi</h4>
                                        <hr class="wp-block-separator is-style-wide">
                                        <p>Ürünleri göndermeden önce hepsini tek tek kontrol ediyoruz</p>
                                        <strong>Onay alınmayan siparişler gönderilmeyecektir</strong>
                                    </div>
                                    <h3 class="section-title style-1 mb-30">Ürün Özellikleri</h3>
                                    <table class="font-md mb-30">
                                        <tbody>
                                        <tr class="stand-up">
                                            <th>Boyutu</th>
                                            <td>
                                                <p>24 x 12.5 x 11.5 cm</p>
                                            </td>
                                        </tr>
                                        <tr class="stand-up">
                                            <th>Ağırlığı</th>
                                            <td>
                                                <p>590 gram</p>
                                            </td>
                                        </tr>
                                        <tr class="folded-w-wheels">
                                            <th>Çalışma Türü</th>
                                            <td>
                                                <p>Usb Kablosu Prize Takılı</p>
                                            </td>
                                        </tr>
                                        <tr class="frame">
                                            <th>Renk Seçeneği</th>
                                            <td>
                                                <p>Beyaz</p>
                                            </td>
                                        </tr>
                                        <tr class="weight-wo-wheels">
                                            <th>Işık Rengi</th>
                                            <td>
                                                <p>8 Farklı Işık Rengi Kumandası ile Değiştirilebilir</p>
                                            </td>
                                        </tr>
                                        <tr class="weight-wo-wheels">
                                            <th>Özelliği</th>
                                            <td>
                                                <p>Tüm Odayı kapsar</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <h5 class="section-title style-1 mb-30 mt-30" id="reviews">Müşteri yorumları (123)</h5>
                                    <div class="row">
                                        <div class="col-6 comment-item">
                                            <div class="comment-card">
                                                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/1.png')}}"
                                                     class="img-fluid comment-img" alt="Comment Image">
                                                <div class="comment-content">
                                                    <div class="product-rate d-inline-block mb-1">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <h6 class="mb-1"><a href="#">Necla K*****</a></h6>
                                                    <small>Ürünü gece 1 gibi sipariş ettim 13 saat sonra elime ulaştı. Çok
                                                        sağlam bir şekilde paketlenmişti. Çok kaliteli, çocukların
                                                        ilgisini çeken bir ürün kuzey ışıklarını eve getirdi, satıcıya
                                                        ilgisi için teşekkür ederim</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 comment-item">
                                            <div class="comment-card">
                                                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/2.png')}}"
                                                     class="img-fluid comment-img" alt="Comment Image">
                                                <div class="comment-content">
                                                    <div class="product-rate d-inline-block mb-1">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <h6 class="mb-1"><a href="#">Necla K*****</a></h6>
                                                    <small>Ürünü terettüd ederek aldım. Video aldatıcı olabilir diye
                                                        düşünüyordum ama çok güzel Lazer ve projeksiyon a sahipmiş.
                                                        Oğlum sadece ışıkları izlemek için bile erkenden yatağa koşuyor
                                                        ve kısa sürede kendi başına uyumaya başlıyor.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 comment-item">
                                            <div class="comment-card">
                                                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/3.png')}}"
                                                     class="img-fluid comment-img" alt="Comment Image">
                                                <div class="comment-content">
                                                    <div class="product-rate d-inline-block mb-1">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <h6 class="mb-1"><a href="#">Necla K*****</a></h6>
                                                    <small>Odasinda uyumakta zorluk ceken cocuklar icin cok faydali,
                                                        eskisinden daha cok vakit gecirmeye basladi odasinda. Gerçekten
                                                        karanlik ortamda harika bir görsel yansitiyor.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 comment-item">
                                            <div class="comment-card">
                                                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/4.png')}}"
                                                     class="img-fluid comment-img" alt="Comment Image">
                                                <div class="comment-content">
                                                    <div class="product-rate d-inline-block mb-1">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <h6 class="mb-1"><a href="#">Necla K*****</a></h6>
                                                    <small>Çoooooooook iyi</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 comment-item">
                                            <div class="comment-card">
                                                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/5.png')}}"
                                                     class="img-fluid comment-img" alt="Comment Image">
                                                <div class="comment-content">
                                                    <div class="product-rate d-inline-block mb-1">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <h6 class="mb-1"><a href="#">Necla K*****</a></h6>
                                                    <small>çok çekinerek almıştım fakat Bi anda dünyanız değişiyor</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 comment-item">
                                            <div class="comment-card">
                                                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/6.png')}}"
                                                     class="img-fluid comment-img" alt="Comment Image">
                                                <div class="comment-content">
                                                    <div class="product-rate d-inline-block mb-1">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <h6 class="mb-1"><a href="#">Necla K*****</a></h6>
                                                    <small>5 yıldız hak eden bir ürün...yildizlar harika görünüyor toplam 3 tane aldım hediye etmek için.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 comment-item">
                                            <div class="comment-card">
                                                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/7.png')}}"
                                                     class="img-fluid comment-img" alt="Comment Image">
                                                <div class="comment-content">
                                                    <div class="product-rate d-inline-block mb-1">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <h6 class="mb-1"><a href="#">Necla K*****</a></h6>
                                                    <small>bu kadar güzel beklemiyordum çok çokk güzel</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 comment-item">
                                            <div class="comment-card">
                                                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/8.png')}}"
                                                     class="img-fluid comment-img" alt="Comment Image">
                                                <div class="comment-content">
                                                    <div class="product-rate d-inline-block mb-1">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <h6 class="mb-1"><a href="#">Necla K*****</a></h6>
                                                    <small>kargolama ve ürün fotoğraflardaki gibi beğendim tavsiye ederim</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 comment-item">
                                            <div class="comment-card">
                                                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/9.png')}}"
                                                     class="img-fluid comment-img" alt="Comment Image">
                                                <div class="comment-content">
                                                    <div class="product-rate d-inline-block mb-1">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <h6 class="mb-1"><a href="#">Necla K*****</a></h6>
                                                    <small>Sevgilim çok beğendi çok sağ olun 😍</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 comment-item">
                                            <div class="comment-card">
                                                <img src="{{asset('assets/imgs/products/uzay-bulut-robotu/reviews/10.png')}}"
                                                     class="img-fluid comment-img" alt="Comment Image">
                                                <div class="comment-content">
                                                    <div class="product-rate d-inline-block mb-1">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <h6 class="mb-1"><a href="#">Necla K*****</a></h6>
                                                    <small>Esma Temiz'in paylaşımında görmüştüm.Sipariş verdikten hemen sonra kargoya verildi.Bugün teslim aldım.Sağlam bir şekilde geldi.Çoookk beğendik.Beğenmeseydik daha mı iyi olurdu acaba🙂 En küçük kızıma almıştım.Büyük kızım ve oğluma da alıyorum.Kısacası sorunsuz geldi ve aydınlatmada da problem yok</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-60">
                                <div class="col-12">
                                    <h3 class="section-title style-1 mb-30">Promosyon Ürünleri</h3>
                                </div>
                                <div class="col-12">
                                    <div class="row related-products">
                                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap small hover-up">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img">
                                                        <a href="shop-product-right.html" tabindex="0">
                                                            <img class="default-img"
                                                                 src="{{asset('assets/imgs/products/trendsand-kum-sanatı/yenifistarl4.jpg')}}"
                                                                 alt="">
                                                            <img class="hover-img"
                                                                 src="{{asset('assets/imgs/products/trendsand-kum-sanatı/short.gif')}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="hot">Trend Ürün</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="shop-product-right.html" tabindex="0">
                                                            Trendsand Kum Sanatı
                                                        </a></h2>
                                                    <div class="rating-result" title="82%">
                                                        <span>
                                                        </span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>339.00TL </span>
                                                        <span class="old-price">545.00TL</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap small hover-up">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img">
                                                        <a href="shop-product-right.html" tabindex="0">
                                                            <img class="default-img"
                                                                 src="{{asset('assets/imgs/products/cosmos-yildiz-yagmuru/1.png')}}"
                                                                 alt="">
                                                            <img class="hover-img"
                                                                 src="{{asset('assets/imgs/products/cosmos-yildiz-yagmuru/1.png')}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="sale">-22%</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="shop-product-right.html" tabindex="0">Cosmos Yıldız Yağmuru</a></h2>
                                                    <div class="rating-result" title="90%">
                                                        <span>
                                                        </span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>938.00TL </span>
                                                        <span class="old-price">1450.00TL</span>
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
        </section>
    </main>
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const productOptions = document.querySelectorAll('.product-option');
            const paymentOptions = document.querySelectorAll('input[name="paymentType"]');
            const totalElement = document.getElementById('total-price');
            const completeOrderButton = document.querySelector('.detail-extralink .complete-order');

            // Base prices
            const prices = {
                '1': 889.00,
                '2': 1678.00
            };

            let selectedProduct = '1';
            let additionalCost = 0;

            productOptions.forEach(option => {
                option.addEventListener('click', function () {
                    productOptions.forEach(opt => opt.classList.remove('active'));
                    this.classList.add('active');

                    // Update the selected product
                    selectedProduct = this.getAttribute('data-quantity');

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
                const totalPrice = prices[selectedProduct] + additionalCost;
                totalElement.innerText = totalPrice.toFixed(2) + 'TL';

                if (completeOrderButton) {
                    completeOrderButton.innerText = 'SİPARİŞİ TAMAMLAYIN - ' + totalPrice.toFixed(2) + 'TL';
                }
            }

            // Initial calculation
            updateTotal();
        });
    </script>
@endsection
