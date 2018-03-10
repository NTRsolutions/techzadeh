@extends('layouts.main-layout')
@section('title', 'Home')
@section('content')
    {{-- Hero Slider --}}
    @include('.front.partials.slider')
    {{-- end hero slider --}}

    {{-- Ad Banner 728 --}}
    <div class="text-center">
        <a href="#">
            <img src="{{ asset('img/blog/placeholder_728.jpg') }}" alt="">
        </a>
    </div>

    {{-- Content --}}
    <section class="section-wrap pb-0">
        <div class="container">
            <div class="row">

                {{-- Posts --}}
                <div class="col-md-8 blog__content mb-30">

                    <h3 class="section-title">Latest Posts</h3>

                    @foreach( $posts as $post )
                    <article class="entry post-list">
                        <div class="entry__img-holder post-list__img-holder">
                            <a href="/post/{{ $post->id }}">
                                <div class="thumb-container">
                                    <img data-src="{{ asset($post->img_url) }}" src="{{ asset($post->img_url) }}" class="entry__img lazyload" alt="" />
                                </div>
                            </a>
                        </div>

                        <div class="entry__body post-list__body">
                            <div class="entry__header">
                                <a href="/category/{{ $post->category_id }}" class="entry__meta-category">{{ $post->category }}</a>
                                <h2 class="entry__title">
                                    <a href="/post/{{ $post->id }}">{{ $post->title }}</a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-date">
                                        {{ $post->date }}
                                    </li>
                                    <li class="entry__meta-author">
                                        by <a href="javascript:void(0)">{{ $post->author }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="entry__excerpt">
                                <p>{{ $post->subtitle }}</p>
                            </div>
                        </div>
                    </article>
                    @endforeach

                </div> {{-- end posts --}}

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
                    </div> {{-- end widget banner --}}

                </aside> {{-- end sidebar --}}

            </div>
        </div>
    </section>
    {{-- end content --}}

    {{-- Latest Videos --}}
    {{--@include('.front.partials.videos')--}}

    {{-- Ad Banner 728 --}}
    <div class="text-center pb-60">
        <a href="#">
            <img src="{{ asset('img/blog/placeholder_728.jpg') }}" alt="">
        </a>
    </div>
@endsection