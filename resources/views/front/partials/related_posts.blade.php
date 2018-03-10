<div class="related-posts">
    <h5 class="related-posts__title">You might like</h5>
    <div class="row row-20">
        @foreach($suggested as $item)
        <div class="col-md-4">
            <article class="related-posts__entry entry">
                <a href="/post/{{ $item->id }}">
                    <div class="thumb-container">
                        <img src="{{ asset( $item->img_url ) }}" data-src="{{ asset( $item->img_url ) }}" alt="" class="entry__img lazyload">
                    </div>
                </a>
                <div class="related-posts__text-holder">
                    <h2 class="related-posts__entry-title">
                        <a href="/post/{{ $item->id }}">{{ $item->title }}</a>
                    </h2>
                </div>
            </article>
        </div>
        @endforeach
    </div>
</div>