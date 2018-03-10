@extends('layouts.main-layout')
@section('title', 'Post')
@section('content')
<section class="section-wrap pt-60 pb-20">
    <div class="container">
        <div class="row">

            {{-- post content --}}
            <div class="col-md-8 blog__content mb-30">
                {{-- standard post --}}
                <article class="entry"  >

                    <div class="single-post__entry-header  entry__header">

                        <h1 class="single-post__entry-title">
                            {{ $post->title }}
                        </h1>

                        <ul class="single-post__entry-meta entry__meta">
                            <li>
                                <div class="entry-author">
                                    <a href="javascript:void(0)" class="entry-author__url">
                                        <img src="{{ asset('img/blog/author.png') }}" class="entry-author__img" alt="">
                                        <span>by</span>
                                        <span class="entry-author__name">{{ $post->author }}</span>
                                    </a>
                                </div>
                            </li>
                            <li class="entry__meta-date">
                                {{ $post->date }}
                            </li>
                            <li>
                                <span>in</span>
                                <a href="/category/{{ $post->category_id }}" class="entry__meta-category">{{ $post->category }}</a>
                            </li>
                        </ul>
                    </div>

                    <div class="entry__img-holder">
                        <figure>
                            <img src="{{ asset( $post->img_url ) }}" alt="" class="entry__img">
                            <figcaption>A photo collection samples</figcaption>
                        </figure>
                    </div>

                    <div class="entry__article-holder">

                        {{-- Share --}}
                        <div class="entry__share">
                            <div class="entry__share-inner">
                                <div class="socials">
                                    <a href="#" class="social-facebook entry__share-social" aria-label="facebook"><i class="ui-facebook"></i></a>
                                    <a href="#" class="social-twitter entry__share-social" aria-label="twitter"><i class="ui-twitter"></i></a>
                                    <a href="#" class="social-google-plus entry__share-social" aria-label="google+"><i class="ui-google"></i></a>
                                    <a href="#" class="social-instagram entry__share-social" aria-label="instagram"><i class="ui-instagram"></i></a>
                                </div>
                            </div>
                        </div> {{-- share --}}

                        <div class="entry__article">
                            {{ $post->content }}
                            {{-- tags --}}
                            <div class="entry__tags">
                                Tags:
                                <a href="#" rel="tag">mobile</a>
                                <a href="#" rel="tag">gadgets</a>
                                <a href="#" rel="tag">satelite</a>
                            </div> {{-- end tags --}}

                        </div> {{-- end entry article --}}
                    </div>

                    {{-- Related Posts --}}
                    @include('.front.partials.related_posts')
                    {{-- end related posts --}}

                </article>
                {{-- end standard post --}}

            </div> {{-- end col --}}

            {{-- Sidebar --}}
            <aside class="col-md-4 sidebar sidebar--right">

                {{-- Widget Popular Posts --}}
                @include('.front.partials.popular-posts')
                {{-- end widget popular posts --}}

                {{-- Widget socials --}}
                @include('.front.partials.social-profiles')
                {{-- end widget socials --}}

                {{-- Widget Banner --}}
                <div class="widget widget_media_image">
                    <a href="#">
                        <img src="{{ asset('img/blog/placeholder_300.jpg') }}" alt="">
                    </a>
                </div>
                {{-- end widget banner --}}

            </aside> {{-- end sidebar --}}

        </div> {{-- end row --}}
    </div> {{-- end container --}}
</section>
@endsection
