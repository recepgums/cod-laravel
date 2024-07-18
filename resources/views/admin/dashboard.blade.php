<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Orders List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css"/>

    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-messaging.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <style>
        .table input,
        .table select,
        .table textarea {
            width: 100%;
            box-sizing: border-box;
            padding: 5px;
        }
        .table td {
            vertical-align: middle;
        }
        .table th,
        .table td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .table .tags {
            width: 150px;
        }
    </style>

    <script>
        $(document).ready(function () {
            var $prog = $('.tags').select2({
                tags: true,
                tokenSeparators: [','],
                ajax: {
                    url: '/tags',
                    dataType: 'json',
                    delay: 250,
                    processResults: function (data) {
                        return {
                            results: data.map(function (tag) {
                                return {id: tag.id, text: tag.name};
                            })
                        };
                    },
                    cache: true
                },
                createTag: function (params) {
                    var term = $.trim(params.term);
                    if (term === '') {
                        return null;
                    }

                    // Send AJAX request to create new tag
                    $.ajax({
                        url: '/tags',
                        type: 'POST',
                        data: {
                            name: term,
                            _token: $('meta[name="csrf-token"]').attr('content') // Include CSRF token
                        },
                        success: function (data) {
                            // Add the new tag to the Select2 options
                            var newOption = new Option(data.name, data.id, false, true);
                            $('.tags').append(newOption).trigger('change');
                        }
                    });

                    return {
                        id: term,
                        text: term,
                        newTag: true // Add additional parameters
                    };
                }
            });
            $(".tags").on("click", function () {
                $prog.val(["ht", "js"]).trigger("change");
            });
        });
    </script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link {{ Request::is('/admin') ? 'active' : '' }}" href="{{ url('/admin') }}">Order <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link {{ Request::is('product') ? 'active' : '' }}" href="{{ route('admin.products.index') }}">Products</a>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="modal fade" id="createOrderModal" tabindex="-1" role="dialog" aria-labelledby="createOrderModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createOrderModalLabel">Create Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createOrderForm" method="post" action="{{route('admin.order.store')}}">
                        @csrf
                        <div class="row">
                            <div class="col-6 form-group">
                                <label for="name">İsim</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-6 form-group">
                                <label for="phone">Telefon</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="col-6 form-group">
                                <label for="city_id">İl</label>
                                <select class="form-control" name="city_id" id="citySelect2">
                                    <option >IL secin</option>

                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}" >{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <label for="district_id">İlçe</label>
                                <select class="form-control" name="district_id" id="districtSelect2">
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <label for="neighborhood_id">Mahalle</label>
                                <select class="form-control" name="neighborhood_id" id="neighborhoodSelect2">

                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <label for="address">Address</label>
                                <textarea type="text" class="form-control" id="address" name="address"
                                          required></textarea>
                            </div>
                            <div class="col-6 form-group">
                                <label for="products">Ürünler</label>
                                <input type="text" class="form-control" id="products" name="products" required>
                            </div>
                            <div class="col-6 form-group">
                                <label for="total_price">Toplam</label>
                                <input type="number" class="form-control" id="total_price" name="total_price" required>
                            </div>
                            <div class="col-6 form-group">
                                <label for="total_price">Ödeme Tipi</label>
                                <select name="payment_type" id="" class="form-control">
                                    <option value="nakit">Nakit</option>
                                    <option value="kart">Kart</option>
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <label for="is_done">Status</label>
                                <select class="form-control" id="is_done" name="is_done">
                                    <option value="1">Completed</option>
                                    <option value="0">Pending</option>
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <label for="is_done">Note</label>
                                <textarea class="form-control" name="note"></textarea>
                            </div>
                            <div class="col-6 form-group">
                                <label for="tags">Tags</label>
                                <select class="form-control tags" style="width: 100%" multiple="multiple" name="tags[]">
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" style="float: right">Create Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <h1 class="mb-4">Orders List</h1>
        <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#createOrderModal">
            Create Order
        </button>
        <table class="table table-bordered table-striped" id="ordersTable">
            <thead>
            <tr>
                <th>#</th>
                <th>Name/Phone</th>
                <th>IL/ILCE/Mahalle</th>
                <th>Address</th>
                <th>Products/Price</th>
                <th>Note/Etiketler</th>
                <th>Referral</th>
                <th>Actions</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <form action="{{ route('admin.order.update', ['order' => $order->id]) }}" method="post">
                        @csrf
                        <td><small>{{ $order->created_at }}</small></td>
                        <td>
                            <input type="text" name="name" value="{{ $order->name }}" class="form-control">
                            <input type="text" name="phone" value="{{ $order->phone }}" class="form-control">
                        </td>
                        <td>
                            <select class="form-control" name="city_id" id="citySelect">
                                <option >il secin</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}"
                                            @if($city->id == $order->city_id) selected @endif>{{ $city->name }}</option>
                                @endforeach
                            </select>
                            <select class="form-control" name="district_id" id="districtSelect">
                                @if($order->district_id)
                                    <option value="{{ $order?->district_id }}"
                                            selected>{{ $order?->district?->name }}</option>
                                @else
                                    <option value="">Ilce Seçiniz</option>
                                @endif
                            </select>
                            <select class="form-control" name="neighborhood_id" id="neighborhoodSelect">
                                @if($order->neighborhood_id)
                                    <option value="{{ $order?->neighborhood_id }}"
                                            selected>{{ $order?->neighborhood?->name }}</option>
                                @else
                                    <option value="">Mahalle Seçiniz</option>
                                @endif
                            </select>
                        </td>
                        <td>
                            <textarea name="address" class="form-control">{{ $order->address }}</textarea>
                        </td>
                        <td>
                            <input type="text" name="products" value="{{ $order->products }}" class="form-control">
                            <input type="number" name="total_price" value="{{ $order->total_price }}"
                                   class="form-control">
                        </td>
                        <td>
                            <textarea name="note" class="form-control">{{ $order->note }}</textarea>

                            <select class="form-control tags" name="tags[]" multiple="multiple">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}"
                                            @if(in_array($tag->id, $order->tags->pluck('id')->toArray())) selected @endif>{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                          <span>{{str_contains($order->ref_url, 'ttclid') ? "Tiktok" : (str_contains($order->ref_url,'facebook') ? "Facebook" : "")}}</span>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-success btn-sm">Update</button>
                            <br>
                            <button type="button" class="btn btn-danger btn-sm delete-order" data-order-id="{{ $order->id }}">Delete</button>
                            <br>
                        </td>
                    </form>
                    <td>
                        <form action="{{route('admin.order.festStore',$order)}}" method="post">
                            @csrf
                            <a href="#" id="whatsappOrderBtn-{{ $order->id }}" target="_blank" class="btn btn-primary btn-sm">WhatsApp</a>
                            <button class="btn btn-info">Fest</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $orders->links('pagination::bootstrap-4') }}

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous" defer></script>
<script>
    if (false) {
        var firebaseConfig = {
            apiKey: "AIzaSyAYGL1vnfYahFKhx-AjCiFofWKC4pTZzBk",
            authDomain: "laravel-cod.firebaseapp.com",
            projectId: "laravel-cod",
            storageBucket: "laravel-cod.appspot.com",
            messagingSenderId: "785094377338",
            appId: "1:785094377338:web:f9cf741c3a035bc2f860c3",
            measurementId: "G-NL62W764H7"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        const messaging = firebase.messaging();

        // Request permission to receive notifications
        messaging.requestPermission()
            .then(function () {
                console.log('Notification permission granted.');
                return messaging.getToken();
            })
            .then(function (token) {
                console.log('FCM Token:', token);
                // Send the token to your server to save it
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                if (csrfToken) {
                    fetch(`{{route('save.fcm_token')}}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            token: token
                        })
                    }).then(response => response.json())
                        .then(data => {
                            console.log('Token saved successfully:', data);
                        }).catch(error => {
                        console.error('Error saving token:', error);
                    });
                } else {
                    console.error('CSRF token not found in meta tag.');
                }
            })
            .catch(function (err) {
                console.log('Unable to get permission to notify.', err);
            });

        // Handle incoming messages
        messaging.onMessage(function (payload) {
            console.log('Message received. ', payload);
            // Customize notification here
            var notificationTitle = payload.notification.title;
            var notificationOptions = {
                body: payload.notification.body,
                icon: payload.notification.icon
            };

            var notification = new Notification(notificationTitle, notificationOptions);
        });

        // Register service worker
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/firebase-messaging-sw.js')
                .then(function (registration) {
                    console.log('Registration successful, scope is:', registration.scope);
                })
                .catch(function (err) {
                    console.log('Service worker registration failed, error:', err);
                });
        }
    }
</script>

<script>
    document.getElementById('citySelect')?.addEventListener('change', function () {
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
                        option.value = district.fest_id;
                        option.textContent = district.name;
                        districtSelect.appendChild(option);
                    });
                });
        }
    });

    document.getElementById('districtSelect')?.addEventListener('change', function () {
        const districtId = this.value;
        const neighborhoodSelect = document.getElementById('neighborhoodSelect');

        neighborhoodSelect.innerHTML = '<option value="">Mahalle</option>'; // Clear previous options

        if (districtId) {
            fetch(`/district/${districtId}/neighborhoods`)
                .then(response => response.json())
                .then(data => {
                    data.forEach(neighborhood => {
                        const option = document.createElement('option');
                        option.value = neighborhood.fest_id;
                        option.textContent = neighborhood.name;
                        neighborhoodSelect.appendChild(option);
                    });
                });
        }
    });
    document.getElementById('citySelect2').addEventListener('change', function () {
        const cityId = this.value;
        const districtSelect = document.getElementById('districtSelect2');
        const neighborhoodSelect = document.getElementById('neighborhoodSelect2');

        districtSelect.innerHTML = '<option value="">İlçe</option>'; // Clear previous options
        neighborhoodSelect.innerHTML = '<option value="">Mahalle</option>'; // Clear previous options

        if (cityId) {
            fetch(`/city/${cityId}/districts`)
                .then(response => response.json())
                .then(data => {
                    data.forEach(district => {
                        const option = document.createElement('option');
                        option.value = district.fest_id;
                        option.textContent = district.name;
                        districtSelect.appendChild(option);
                    });
                });
        }
    });

    document.getElementById('districtSelect2').addEventListener('change', function () {
        const districtId = this.value;
        const neighborhoodSelect = document.getElementById('neighborhoodSelect2');

        neighborhoodSelect.innerHTML = '<option value="">Mahalle</option>'; // Clear previous options

        if (districtId) {
            fetch(`/district/${districtId}/neighborhoods`)
                .then(response => response.json())
                .then(data => {
                    data.forEach(neighborhood => {
                        const option = document.createElement('option');
                        option.value = neighborhood.fest_id;
                        option.textContent = neighborhood.name;
                        neighborhoodSelect.appendChild(option);
                    });
                });
        }
    });

    $('.delete-order').on('click', function () {
        var orderId = $(this).data('order-id');
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        var deleteUrl = '{{ route("admin.order.orderDestroy", ":id") }}'.replace(':id', orderId);

        // Ask for confirmation
        if (confirm('Are you sure you want to delete this order?')) {
            $.ajax({
                url: deleteUrl,
                type: 'post',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content') // Include CSRF token
                },
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function (response) {
                    // Handle success (e.g., remove the row from the table)
                    alert('Order deleted successfully.');
                    location.reload(); // Optionally, you can reload the page or remove the row from the table
                },
                error: function (xhr, status, error) {
                    // Handle error
                    alert('Error deleting order.');
                }
            });
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        var orders = @json($orders); // Assuming you pass the orders data from Laravel to JavaScript

        orders.data.forEach(function(order) {
            var orderBtn = document.getElementById('whatsappOrderBtn-' + order.id);
            var phoneNumber = order.phone.startsWith('9') ? order.phone : '9' + order.phone;
            var message = 'Merhaba ' + order.name + ',\n\n' + order.total_price + ' tutarındaki ' + order.products + ' siparişinizi aldık. Siparişinizi onaylıyor musunuz?';

            var whatsappLink = 'https://wa.me/' + phoneNumber + '?text=' + encodeURIComponent(message);

            orderBtn.setAttribute('href', whatsappLink);
        });
    });

</script>

<script>
    $(document).ready(function() {
        $('#ordersTable').DataTable({
            "order": [],
            "paging": false,
        });
    });
</script>

</body>
</html>
