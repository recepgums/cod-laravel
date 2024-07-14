<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Products List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css"/>

    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-messaging.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <style>
        .table input,
        .table select,
        .table textarea {
            width: 100%;
            box-sizing: border-box;
            padding: 5px;
        }
.cke_notification.cke_notification_warning{
    display: none;
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
        .custom-card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .custom-card .card-header, .custom-card .card-body {
            border-radius: 15px;
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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Order <span
                    class="sr-only">(current)</span></a>
            <a class="nav-item nav-link {{ Request::is('product') ? 'active' : '' }}"
               href="{{ route('admin.products.index') }}">Products</a>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="modal fade" id="createProductModal" tabindex="-1" role="dialog"
         aria-labelledby="createProductModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createProductModalLabel">Create Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createProductForm" method="post" action="{{route('admin.products.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6 form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-6 form-group">
                                <label for="phone">Slug</label>
                                <input type="text" class="form-control" name="slug" required>
                            </div>
                            <div class="col-6 form-group">
                                <label for="template">Template</label>
                                <select class="form-control" name="template" id="template">
                                    <option value="image">Resim</option>
                                    <option value="reviews">Reviews</option>
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <label for="products">quantity price</label>
                                <textarea type="text" name="quantity_price" class="form-control"></textarea>
                            </div>
                            <div class="col-6 form-group">
                                <label for="products">quantity discount</label>
                                <textarea type="text" name="quantity_discount" class="form-control"></textarea>
                            </div>
                            <div class="col-6 form-group">
                                <button type="submit" class="btn btn-primary" style="float: right">Create Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <h1 class="mb-4">Products List</h1>
        <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#createProductModal">
            Create Product
        </button>

        <div class="row">
            @foreach($products as $product)
                <div class="col-sm-12 col-md-6 mt-4">
                    <div class="card custom-card">
                        <div class="card-header">
                            <small>#{{ $product->id }}</small>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseProduct{{ $product->id }}" aria-expanded="false" aria-controls="collapseProduct{{ $product->id }}">
                                {{$product->name}}
                            </button>
                        </div>
                        <div id="collapseProduct{{ $product->id }}" class="collapse">
                            <div class="card-body">
                            <form action="{{ route('admin.products.update', ['product' => $product]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Product Name">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" name="slug" value="{{ $product->slug }}" class="form-control" placeholder="Slug">
                                </div>
                                <div class="form-group">
                                    <label for="template">Template</label>
                                    <select class="form-control" name="template" id="template">
                                        <option @if($product->template == "image") selected @endif value="image">Resim</option>
                                        <option @if($product->template == "reviews") selected @endif value="reviews">Reviews</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" name="price" value="{{ $product->price }}">
                                </div>
                                <div class="form-group">
                                    <label for="old_price">Old Price</label>
                                    <input type="number" class="form-control" name="old_price" value="{{ $product->old_price }}">
                                </div>
                                <div class="form-group">
                                    <label for="emoji_benefits">Emoji Benefits</label>
                                    <textarea class="form-control text-editor" name="emoji_benefits" id="emojiContent" rows="10">{{ $product->emoji_benefits }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea class="form-control text-editor" name="content" id="content" rows="10">{{ $product->content }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="images">Images</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="images" name="images[]" multiple>
                                        <label class="custom-file-label" for="images">Choose files</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Quantity Offers</label>
                                    <div class="form-row mb-2">
                                        <div class="col-6 form-group">
                                            <label for="products">quantity price</label>
                                            <textarea type="text" name="quantity_price" class="form-control">{{$product->getSettings('quantity_price')}}</textarea>
                                        </div>
                                        <div class="col-6 form-group">
                                            <label for="products">quantity discount</label>
                                            <textarea type="text" name="quantity_discount" class="form-control">{{$product->getSettings('quantity_discount')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Product Comments</label>
                                    <div class="row">
                                        <div class="col-4">
                                            <input type="text" name="comment_url" class="form-control" placeholder="trendyol url">
                                        </div>
                                        <div class="col-4">
                                            <input type="checkbox" id="only_image" value="only_image" name="only_image" >
                                        </div>
                                        <div class="col-4">
                                            <input type="number" name="count" class="form-control" placeholder="count">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <button type="button" class="btn btn-danger delete-product" data-product-slug="{{ $product->slug }}">Delete</button>
                                </div>
                            </form>

                            <div class="form-group">
                                <label>Uploaded Images</label>
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseProductImage{{ $product->id }}" aria-expanded="false" aria-controls="collapseProduct{{ $product->id }}">
                                    Uploaded Images
                                </button>
                                <div id="collapseProductImage{{ $product->id }}" class="collapse">
                                    <div class="row">
                                    @foreach($product->getMedia('product_images')->sortBy(fn($media) => $media->getCustomProperty('order')) as $media)
                                        <div class="col-4">
                                            <form action="{{ route('admin.products.update_media', $media->id) }}" method="post" class="mt-2">
                                                @csrf
                                                @method('put')
                                                <input type="number" name="order" value="{{ $media->getCustomProperty('order') }}" class="form-control mt-2" placeholder="Order">
                                                <button type="submit" class="btn btn-success btn-sm">Update</button>
                                            </form>
                                            <img src="{{ $media->getUrl() }}" class="img-thumbnail" alt="Image">

                                            <form action="{{ route('admin.products.delete_media', $media->id) }}" method="post" class="mt-2">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>

                                        </div>
                                    @endforeach
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseComments{{ $product->id }}" aria-expanded="false" aria-controls="collapseProduct{{ $product->id }}">
                                    collapseComments
                                </button>
                                <div id="collapseComments{{ $product->id }}" class="collapse">
                                    @foreach($product->comments as $comment)
                                        <form action="{{route('comment.update',$comment)}}" method="post">
                                            @csrf
                                            <div class="comment-container mb-2 p-2 border rounded">
                                                <input type="hidden" name="id" value="{{ $comment->id }}">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <input type="text" name="rating" id="rating_{{ $comment->id }}" value="{{ $comment->rating }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" name="author" id="author_{{ $comment->id }}" value="{{ $comment->author }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                    <textarea name="content" rows="5" id="content_{{ $comment->id }}" class="form-control">
                                                        {{ $comment->content }}
                                                    </textarea>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col">
                                                        <img src="{{$comment->photo_url_1}}" height="200">
                                                        <input type="text" name="photo_url_1" id="photo_url_1_{{ $comment->id }}" value="{{ $comment->photo_url_1 }}" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col">
                                                        <label for="order_{{ $comment->id }}">Order</label>
                                                        <input type="number" name="order" id="order_{{ $comment->id }}" value="{{ $comment->order }}" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous" defer></script>
<script>
    $(document).on('click', '.delete-product', function() {
        var productSlug = $(this).data('product-slug');
        alert('Delete product with Slug: ' + productSlug);
    });
    $(document).ready(function() {
        $('.delete-media').on('click', function() {
            var mediaId = $(this).data('media-id');
            var button = $(this);

            $.ajax({
                url: '{{ route("admin.products.delete_media", ":id") }}'.replace(':id', mediaId),
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    _method: 'DELETE'
                },
                success: function(response) {
                    // Remove the image container on success
                    button.closest('.col-4').remove();
                },
                error: function(xhr) {
                    alert('Error deleting media: ' + xhr.responseText);
                }
            });
        });

        const addOfferButton = document.getElementById('addOfferButton');
        const quantityOffersList = document.getElementById('quantityOffersList');
        const quantityOfferTemplate = document.querySelector('.quantity-offer-template').innerHTML;

        addOfferButton.addEventListener('click', function () {
            const newOffer = document.createElement('div');
            newOffer.classList.add('quantity-offer');
            newOffer.innerHTML = quantityOfferTemplate;
            quantityOffersList.appendChild(newOffer);

            newOffer.querySelector('.remove-offer').addEventListener('click', function () {
                newOffer.remove();
            });
        });

        @if(isset($product) && $product?->offers)
            @foreach($product?->offers  as $offer)
            const existingOffer = document.createElement('div');
            existingOffer.classList.add('quantity-offer');
            existingOffer.innerHTML = quantityOfferTemplate;
            existingOffer.querySelector('input[name="quantity[]"]').value = "{{ $offer->quantity }}";
            existingOffer.querySelector('select[name="discount[]"]').value = "{{ $offer->discount }}";
            existingOffer.querySelector('input[name="amount[]"]').value = "{{ $offer->amount }}";
            existingOffer.querySelector('input[name="label[]"]').value = "{{ $offer->label }}";
            existingOffer.querySelector('input[name="badge[]"]').value = "{{ $offer->badge }}";
            quantityOffersList.appendChild(existingOffer);

            existingOffer.querySelector('.remove-offer').addEventListener('click', function () {
                existingOffer.remove();
            });
            @endforeach
        @endif
    });
    $('.custom-file-input').on('change', function() {
        var fileName = $(this).val().split('\\').pop();
        $(this).siblings('.custom-file-label').addClass('selected').html(fileName);
    });
</script>
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
    $('.delete-product').on('click', function () {
        var productSlug = $(this).data('product-slug');
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        var deleteUrl = '{{ route("admin.product.destroy", ":slug") }}'.replace(':slug', productSlug);

        // Ask for confirmation
        if (confirm('Are you sure you want to delete this order?')) {
            $.ajax({
                url: deleteUrl,
                type: 'delete',
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


</script>

<script>
    $(document).ready(function () {
        $('#productsTable').DataTable();
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.text-editor').forEach(function(el) {
            CKEDITOR.replace(el);
        });
    });
</script>
</body>
</html>
