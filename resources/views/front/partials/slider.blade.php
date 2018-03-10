<section class="hero">
    <div id="owl-hero" class="owl-carousel owl-theme">

        @foreach($latest_posts as $post)
        <div class="hero__slide">
            <article class="hero__slide-entry entry">
                <div class="thumb-bg-holder" style="background-image: url({{ asset( $post->img_url ) }})">
                    <a href="/category/{{ $post->id }}" class="thumb-url"></a>
                    <div class="bottom-gradient"></div>
                </div>

                <div class="thumb-text-holder">
                    <a href="/category/{{ $post->category_id }}" class="entry__meta-category entry__meta-category--label">{{ $post->category }}</a>
                    <h2 class="thumb-entry-title">
                        <a href="/category/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                </div>
            </article>
        </div>
        @endforeach

    </div> {{-- end owl --}}
</section>