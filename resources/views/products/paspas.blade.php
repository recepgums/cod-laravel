@extends('layouts.productapp')
@section('title')
    Süper Su Emici Banyo Paspası
@endsection

@section('styles')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
@endsection

@section('content')
    <div class="gallery-container mt-5">
        <div class="main-image-container">
            <img id="mainImage" src="{{asset('assets/imgs/products/miknatisli-lamba/1.webp')}}" height="500"
                 alt="product image" loading="lazy">
        </div>
        <div class="thumbnail-wrapper">
            <span class="arrow" onclick="scrollThumbnails(-1)">&#10094;</span>
            <div class="thumbnail-container" id="thumbnailContainer">
                <img src="{{asset('assets/imgs/products/miknatisli-lamba/1.webp')}}" height="500"
                     alt="thumbnail image"
                     onclick="changeImage(this)">
                <img src="{{asset('assets/imgs/products/miknatisli-lamba/usage.gif')}}" height="500"
                     alt="thumbnail image"
                     onclick="changeImage(this)">
                <img src="{{asset('assets/imgs/products/miknatisli-lamba/2.webp')}}" height="500"
                     alt="thumbnail image"
                     onclick="changeImage(this)">
                <img src="{{asset('assets/imgs/products/miknatisli-lamba/3.webp')}}" height="500"
                     alt="thumbnail image"
                     onclick="changeImage(this)">
                <img src="{{asset('assets/imgs/products/miknatisli-lamba/4.webp')}}" height="500"
                     alt="thumbnail image"
                     onclick="changeImage(this)">
                <img src="{{asset('assets/imgs/products/miknatisli-lamba/5.webp')}}" height="500"
                     alt="thumbnail image"
                     onclick="changeImage(this)">
            </div>
            <span class="arrow" onclick="scrollThumbnails(1)">&#10095;</span>
        </div>
    </div>
    <div class="text-center">
        <div class="tag-container text-center mx-auto">ÇOK SATAN | TREND ÜRÜN</div>
        <p>
            <small>son 24 saatte <strong style="color: darkred">38 adet</strong> satıldı</small>
        </p>
    </div>
    <div class="container-fluid">
        <h2 class="title-detail mt-4" style="margin-bottom: 0px"> Süper Su Emici Banyo Paspası</h2>
        <div class="product-detail-rating d-flex justify-content-between align-items-center mb-3">
            <div class="product-rate-cover text-end d-flex align-items-center">
                <span class="font-small ml-1 text-muted"><strong>4.8</strong></span>
                <div class="product-rate d-inline-block mx-2">
                    <div class="product-rating" style="width:90%;"></div>
                </div>
                <a class="font-small ml-3 text-muted" href="#reviews">( 242 değerlendirme)</a>
            </div>
        </div>
        <div class="clearfix product-price-cover my-3">
            <div class="product-price primary-color">
                <span class="text-brand h4">299.00₺</span>
                <ins><span class="old-price font-md ml-3 text-muted">320.00₺</span></ins>
                <span class="save-price font-md ml-3 text-white bg-danger p-1 rounded">23% indirim</span>
            </div>
        </div>
        <div class="short-desc mb-3">
            <div class="emoji-benefits-container">
                <p><strong>💙 1 Alana Bir Bedava Kampanya!</strong></p>
                <p><strong>💳 Kapıda Ödeme İmkanı</strong></p>
                <p><strong>💦 Süper Emici ve Lekeye Dayanıklı</strong></p>
                <p><strong>💨 Ultra Hızlı Kuruma</strong></p>
                <p><strong>🛹 Kaymaz Taban</strong></p>
                <p><strong>🧽 Kolay Temizlenebilir</strong></p>
            </div>
        </div>
        <div class="section-title">
            <span>ÇOK AL & AZ ÖDE</span>
        </div>
        <div class="">
            <div class="product-option active d-flex align-items-center mb-1" data-quantity="1">
                <img src="{{asset('assets/imgs/products/miknatisli-lamba/1.webp')}}" width="60" height="60"
                     class="img-fluid"
                     alt="product image">
                <div class="details">
                    <div class="info">
                        <span class="title">2 Adet <small class="kargo-bedava">Kargo Bedava</small></span>
                        <span class="price">299.00TL
                        <br>
                        <div class="original-price">320.00TL</div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="product-option d-flex align-items-center mb-1" data-quantity="2">
                <img src="{{asset('assets/imgs/products/miknatisli-lamba/1.webp')}}" width="60" height="60"
                     class="img-fluid"
                     alt="product image">
                <div class="details">
                    <div class="info">
                        <span class="title">4 Adet <small class="kargo-bedava">Kargo Bedava</small>
                        <br>
                    <div class="discount" style="max-width: 115px">Tanesi 299TL</div>
                        </span>
                        <span class="price">399.00TL
                        <br>
                            <div class="original-price">640.00TL</div>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-top my-3"></div>

        <div class="delivery-info mb-4">
            <i class="fas fa-shipping-fast"></i>
            Şimdi sipariş verirsen <br>
            <small id="delivery-dates"></small>
            <p>tarihleri arasında siparişin kapında!</p>
        </div>
        <div class="product-extra-link2 mb-3">
            <button type="button" class="btn btn-success btn-block bounce"  data-toggle="modal" data-target="#fullScreenModal" {{--onclick="scrollToOrderForm()"--}}>
                Kapıda Ödemeli Sipariş Ver
            </button>
        </div>
        <div class="mb-3">
            <a href="" class="btn-whatsapp" id="whatsappOrderBtn">
                <i class="fab fa-whatsapp"></i>
                Whatsapp ile Sipariş Ver
            </a>
        </div>
       {{-- <div style="background-color: #e5e5e5;border-radius: 20px" class="p-3">
            <div class="col-12 text-center mb-2">
                <img src="{{asset('assets/imgs/products/miknatisli-lamba/reviews/3.webp')}}" width="300" alt="">
            </div>
            <small>
                <em>Sağlam bi şekilde geldi Çok güzel aydınlatıyor uzun süre yanıyor ışimi gördü...
                    Sarı ışık beyaz ışık karışık birsürü modu var teşekkür ederim 🙏🏼</em>
            </small>
            <br>
            <hr>
            <span class="text-muted">
        Nur A*****
        <div class="product-rate d-inline-block mb-1">
            <div class="product-rating" style="width:100%"></div>
        </div>
        </span>
        </div>--}}

        <div class="container text-center my-2">
            <img src="{{asset('assets/imgs/products/miknatisli-lamba/usage.gif')}}" alt="" width="300">
        </div>
        <div class="product-extra-link2 mb-3">
            <button type="button" class="btn btn-success btn-block bounce"  data-toggle="modal" data-target="#fullScreenModal" {{--onclick="scrollToOrderForm()"--}}>
                Şimdi Sipariş Ver
            </button>
        </div>
        <h6 class="section-title style-1 my-30 text-center" id="reviews">Tüm Değerlendirmeler (242)</h6>
        <div class="comments-container">
            <div class="comment-item">
                <div class="comment-card">
                    <img src="{{asset('assets/imgs/products/miknatisli-lamba/reviews/8.webp')}}" width="200"
                         height="200" class="comment-img"
                         alt="Comment Image">
                    <div class="comment-content">
                        <div class="product-rate d-inline-block mb-1">
                            <div class="product-rating" style="width:100%"></div>
                        </div>
                        <h6 class="mb-1">Zeynep B.</h6>
                        <small>Ürünü gece 1 gibi sipariş ettim 13 saat sonra elime ulaştı. Çok
                            sağlam bir şekilde paketlenmişti. Çok kaliteli, çocukların
                            ilgisini çeken bir ürün </small>
                    </div>
                </div>
            </div>
            <div class="comment-item">
                <div class="comment-card">
                    <img src="{{asset('assets/imgs/products/miknatisli-lamba/reviews/1.webp')}}" width="200"
                         height="200" class="comment-img"
                         alt="Comment Image">
                    <div class="comment-content">
                        <div class="product-rate d-inline-block mb-1">
                            <div class="product-rating" style="width:100%"></div>
                        </div>
                        <h6 class="mb-1">***** *</h6>
                        <small>1 alana 1 bedava kampanyasından aldım. Ürüne bayıldım gerçekten çok hızlı kuruyor ve dedikleri gibi kayma yapmıyor. Sürekli banyonun ıslaklığından
                            şikayetçi birisi iseniz tavsiye ederim ayrıca abdest alırken de etraf çok su olmuyor ürün gayet başarılı </small>
                    </div>
                </div>
            </div>
            <div class="comment-item">
                <div class="comment-card">
                    <img src="{{asset('assets/imgs/products/miknatisli-lamba/reviews/6.webp')}}" width="200"
                         height="200" class="comment-img"
                         alt="Comment Image">
                    <div class="comment-content">
                        <div class="product-rate d-inline-block mb-1">
                            <div class="product-rating" style="width:100%"></div>
                        </div>
                        <h6 class="mb-1">Şevval T.</h6>
                        <small>Çok pratik kesinlikle tavsiye ediyorum kızımın masasına aldım.Şarjı da çok iyi bir kaç kademesi var.göz yormuyor çok faydalı.kutudan usb şarj kablosu çıkıyor.Biz çok sevdik.Pişmsn olmazsınız.</small>
                    </div>
                </div>
            </div>
            <div class="comment-item">
                <div class="comment-card">
                    <img src="{{asset('assets/imgs/products/miknatisli-lamba/reviews/9.webp')}}" width="200"
                         height="200" class="comment-img"
                         alt="Comment Image">
                    <div class="comment-content">
                        <div class="product-rate d-inline-block mb-1">
                            <div class="product-rating" style="width:100%"></div>
                        </div>
                        <h6 class="mb-1">Bahri K.</h6>
                        <small>Ürün çok iyi kaliteli düşünmeden alabilirsiniz çift taraflı yapışkanı var 30cm civarı
                            gerek ışık kalitesi gerek görüntüsü ışık modları beyaz,sarı,beyaz-sarı ve Çakar şeklinde yanıp sönen beyaz sarı ışık hepsinin aydınlatması çok güzel asla pişman etmez</small>
                    </div>
                </div>
            </div>
            <div class="comment-item">
                <div class="comment-card">
                    <img src="{{asset('assets/imgs/products/miknatisli-lamba/reviews/7.webp')}}" width="200"
                         height="200" class="comment-img"
                         alt="Comment Image">
                    <div class="comment-content">
                        <div class="product-rate d-inline-block mb-1">
                            <div class="product-rating" style="width:90%"></div>
                        </div>
                        <h6 class="mb-1">Ayşegül T. Ü.</h6>
                        <small>çok beğendim tam yerini buldu</small>
                    </div>
                </div>
            </div>
            <div class="comment-item">
                <div class="comment-card">
                    <img src="{{asset('assets/imgs/products/miknatisli-lamba/reviews/3.webp')}}" width="200"
                         height="200" class="comment-img"
                         alt="Comment Image">
                    <div class="comment-content">
                        <div class="product-rate d-inline-block mb-1">
                            <div class="product-rating" style="width:90%"></div>
                        </div>
                        <h6 class="mb-1">hilal ö.</h6>
                        <small>Mutfağa çok iyi oldu. Çok beğendik. 3 tane daha sipariş vereceğim.</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="fullScreenModal" tabindex="-1" role="dialog" aria-labelledby="fullScreenModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="fullScreenModalLabel">Kapıda Ödemeli Sipariş Formu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="overflow: scroll">
                        <form method="post" action="{{route('orders.store')}}" class="order-form" id="order-form">
                            @csrf
                            <input type="hidden" name="quantity" id="quantity" value="1">
                            <input type="hidden" name="total_price" id="total_price" value="399">
                            <input type="hidden" name="products" value="Miknatisli Lamba">
                            <div class="">
                                <div class="product-option active d-flex align-items-center mb-1" data-quantity="1">
                                    <img src="{{asset('assets/imgs/products/miknatisli-lamba/1.webp')}}" width="60" height="60"
                                         class="img-fluid"
                                         alt="product image">
                                    <div class="details">
                                        <div class="info">
                                            <span class="title">1 Adet <small class="kargo-bedava">Kargo Bedava</small></span>
                                            <span class="price">399.00TL
                                            <br>
                                            <div class="original-price">520.00TL</div>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-option d-flex align-items-center mb-1" data-quantity="2">
                                    <img src="{{asset('assets/imgs/products/miknatisli-lamba/1.webp')}}" width="60" height="60"
                                         class="img-fluid"
                                         alt="product image">
                                    <div class="details">
                                        <div class="info">
                        <span class="title">2 Adet <small class="kargo-bedava">Kargo Bedava</small>
                        <br>
                    <div class="discount" style="max-width: 115px">Tanesi 299TL</div>
                        </span>
                                            <span class="price">599.00TL
                        <br>
                            <div class="original-price">1,040.00TL</div>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-option d-flex align-items-center mb-3" data-quantity="3">
                                    <img src="{{asset('assets/imgs/products/miknatisli-lamba/1.webp')}}" width="60" height="60"
                                         class="img-fluid"
                                         alt="product image">
                                    <div class="details">
                                        <div class="info">
                        <span class="title">3 Adet <small class="kargo-bedava">Kargo Bedava</small>
                        <br>
                    <div class="discount" style="max-width: 115px">+400TL kazançlı</div>
                        </span>
                                            <span class="price">799.00TL
                        <br>
                            <div class="original-price">1,560.00TL</div>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-section mb-1">
                                    <div class="row justify-content-between">
                                        <div class="col-6 label">Ara Toplam</div>
                                        <div class="col-6 value text-right">399.00TL</div>
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
                                        <div class="col-6 total text-right" id="total-price">399.00TL</div>
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
                                        <input name="phone" required type="tel" class="form-control" placeholder="0__________">
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
                                <div class="product-extra-link2 fixed-bottom-button ">
                                    <button type="submit" class="btn btn-success btn-block complete-order">
                                        SİPARİŞİ TAMAMLAYIN - 399.00TL
                                    </button>
                                </div>
                                <div class="mt-3 text-center">
                                    Lütfen teslim almayacağınız siparişleri VERMEYİN!
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById('order-form').addEventListener('submit', function(event) {
            let totalPriceText = document.getElementById('total-price').textContent;
            let priceWithoutTL = totalPriceText.replace('TL', '').trim();

            ttq.track('CompletePayment', {
                content_name: 'Mıknatıslı Led Lamba',
                content_id: '1235',
                content_type: 'product',
                value: priceWithoutTL,
                currency: 'TRY'
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
            let totalPriceText = document.getElementById('total-price').textContent;
            let priceWithoutTL = totalPriceText.replace('TL', '').trim();

                fbq('track', 'AddToCart', {
                    content_name: 'Uzay Bulut Robotu',  // Optional: Add product details
                    content_ids: ['1235'],
                    content_type: 'product',
                    value: priceWithoutTL,                       // Total price
                    currency: 'TRY'
                });

            ttq.track('AddToCart', {
                content_name: 'Mıknatıslı Led Lamba',
                content_id: '1235',
                content_type: 'product',
                value: priceWithoutTL,
                currency: 'TRY'
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
            '1': 399.00,
            '2': 798.00,
            '3': 1197.00,
        };
        const discounts = {
            '1': 0,
            '2': 199.00,
            '3': 398.00
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

            // Function to calculate delivery dates, skipping Sunday
            function calculateDeliveryDate(startDate, offsetDays) {
                let deliveryDate = new Date(startDate);
                let addedDays = 0;

                while (addedDays < offsetDays) {
                    deliveryDate.setDate(deliveryDate.getDate() + 1);
                    if (deliveryDate.getDay() !== 0) { // Skip Sundays
                        addedDays++;
                    }
                }

                return deliveryDate;
            }

            // Calculate the dates
            const firstDeliveryDate = calculateDeliveryDate(today, 1);
            const lastDeliveryDate = calculateDeliveryDate(today, 2);

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

          /*  function startCountdown(duration) {
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

            startCountdown(120000);*/
        });

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
        $('input[name="phone"]').mask('0 (999) 999 9999');

    </script>
@endsection
