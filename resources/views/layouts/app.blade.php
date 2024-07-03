<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Merriweather:wght@400;700&display=swap">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;700&display=swap" as="style"
          onload="this.onload=null;this.rel='stylesheet'">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- TikTok Pixel Code Start -->
    <script>
        !function (w, d, t) {
            w.TiktokAnalyticsObject = t;
            var ttq = w[t] = w[t] || [];
            ttq.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once", "ready", "alias", "group", "enableCookie", "disableCookie", "holdConsent", "revokeConsent", "grantConsent"], ttq.setAndDefer = function (t, e) {
                t[e] = function () {
                    t.push([e].concat(Array.prototype.slice.call(arguments, 0)))
                }
            };
            for (var i = 0; i < ttq.methods.length; i++) ttq.setAndDefer(ttq, ttq.methods[i]);
            ttq.instance = function (t) {
                for (
                    var e = ttq._i[t] || [], n = 0; n < ttq.methods.length; n++) ttq.setAndDefer(e, ttq.methods[n]);
                return e
            }, ttq.load = function (e, n) {
                var r = "https://analytics.tiktok.com/i18n/pixel/events.js", o = n && n.partner;
                ttq._i = ttq._i || {}, ttq._i[e] = [], ttq._i[e]._u = r, ttq._t = ttq._t || {}, ttq._t[e] = +new Date, ttq._o = ttq._o || {}, ttq._o[e] = n || {};
                n = document.createElement("script")
                ;n.type = "text/javascript", n.async = !0, n.src = r + "?sdkid=" + e + "&lib=" + t;
                e = document.getElementsByTagName("script")[0];
                e.parentNode.insertBefore(n, e)
            };


            ttq.load('COCFFQBC77U3RPP2KRIG');
            ttq.page();
        }(window, document, 'ttq');
    </script>

    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1512181132850860');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=YOUR_PIXEL_ID&ev=PageView&noscript=1"/>
    </noscript>
    @yield('styles')
</head>
<body>
<div class="header text-center">
    <a href="/"><img style="height: 50px" src="{{asset('assets/imgs/theme/logo.png')}}" alt="logo"></a>
</div>

@yield('content')

<footer class="main mt-3">
    <section class="section-padding footer-mid">
        <div class="container pt-15 pb-20">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-widget">
                        <div class="logo logo-width-1 wow fadeIn animated text-center mb-2">
                            <a href="index.html"><img style="height: 50px" src="{{asset('assets/imgs/theme/logo.png')}}"
                                                      alt="logo"></a>
                        </div>
                        <p class="wow fadeIn animated">
                            <i class="fas fa-map-marker-alt"></i>
                            <strong>Adres: </strong>Silahtarağa Caddesi no:1/20, Eyüp/İstanbul 34050
                        </p>
                        <p class="wow fadeIn animated">
                            <i class="fas fa-phone-alt"></i>
                            <strong>Telefon: </strong>0543 743 42 67
                        </p>
                        <p class="wow fadeIn animated">
                            <i class="fas fa-clock"></i>
                            <strong>Çalışma Saatleri: </strong>10:00 - 20:00, Pzt - Cmt
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <ul class="footer-list">
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
</footer>
<div class="whatsapp-button" id="whatsappButton">
    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png" alt="WhatsApp">
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous" defer></script>
<script>
    document.getElementById('whatsappButton').addEventListener('click', function () {
        const currentUrl = window.location.href;
        const message = "Bu ürün hakkında daha fazla bilgi alabilir miyim\n\n" + currentUrl;
        const phoneNumber = "905437434267";
        fbq('track', 'Click to Whatsapp', {
            content_name: 'Uzay Bulut Robotu',  // Name of the product
            content_ids: ['1234'],               // Product ID
            content_type: 'product',
            value: 889.00,                       // Total price
            currency: 'TRY'                      // Currency
        });

        window.open(`https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`, '_blank');
    })

    var orderBtn = document.getElementById('whatsappOrderBtn');
    var titleText = document.title;
    var phoneNumber = '+905437434267';
    var message = 'Merhaba, ' + titleText + ' siparişi vermek istiyorum';
    fbq('track', 'Click to Whatsapp', {
        content_name: 'Uzay Bulut Robotu',  // Name of the product
        content_ids: ['1234'],               // Product ID
        content_type: 'product',
        value: 889.00,                       // Total price
        currency: 'TRY'                      // Currency
    });

    var whatsappLink = 'https://wa.me/' + phoneNumber + '?text=' + encodeURIComponent(message);

    orderBtn.setAttribute('href', whatsappLink);
</script>
@yield('scripts')
</body>
</html>
