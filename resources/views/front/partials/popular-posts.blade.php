<div class="widget widget-popular-posts">
    <h4 class="widget-title sidebar__widget-title">Popular Posts</h4>
    <ul class="widget-popular-posts__list">
        @foreach($popular_posts as $post)
        <li>
            <article class="clearfix">
                <div class="widget-popular-posts__img-holder">
                    <span class="widget-popular-posts__number">1</span>
                    <div class="thumb-container">
                        <a href="single-post.html">
                            <img data-src="{{ asset( $post->img_url ) }}" src="{{ asset( $post->img_url ) }}" alt="" class="lazyload">
                        </a>
                    </div>
                </div>
                <div class="widget-popular-posts__entry">
                    <h3 class="widget-popular-posts__entry-title">
                        <a href="single-post.html">{{ $post->title }}</a>
                    </h3>
                </div>
            </article>
        </li>
        @endforeach
    </ul>
</div>
