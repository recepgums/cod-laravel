@foreach($comments as $comment)
    <div class="comment-item">
        <div class="comment-card">
            <img src="{{ $comment->photo_url_1 }}" class="comment-img" alt="Comment Image">
            <div class="comment-content">
                <div>
                    <div class="product-rate d-inline-block mb-1">
                        <div class="product-rating" style="width:{{ (int)$comment->rating * 20 }}%"></div>
                    </div>
                    <h6 class="mb-1">{{ $comment->author }}</h6>
                </div>
                <small>{{ $comment->content }}</small>
            </div>
        </div>
    </div>
@endforeach
