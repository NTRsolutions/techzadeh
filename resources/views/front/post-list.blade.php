@extends('layouts.main-layout')
@section('title', $category->name)
@section('content')
<section class="section-wrap pb-30">
    <div class="container">
        <div class="row">

            {{-- Posts --}}
            <div class="col-md-8 blog__content mb-30">
                <h1 class="page-title">{{ $category->name }}</h1>

                <div class="row mt-30">

                    @foreach($posts as $post)
                    <div class="col-md-6">
                        <article class="entry">
                            <div class="entry__img-holder">
                                <a href="/post/{{ $post->id }}">
                                    <div class="thumb-container">
                                        <img data-src="{{ asset( $post->img_url ) }}" src="{{ asset( $post->img_url ) }}" class="entry__img lazyloaded" alt="">
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body">
                                <div class="entry__header">
                                    <a href="/category/{{ $category->id }}" class="entry__meta-category">{{ $category->name }}</a>
                                    <h2 class="entry__title">
                                        <a href="/post/{{ $post->id }}">{{ $post->title }}</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            {{ $post->date }}
                                        </li>
                                        <li class="entry__meta-author">
                                            by <a href="#">{{ $post->author }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>{{ $post->subtitle }}</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach

                </div>

                {{-- Pagination --}}
                <div class="pagination clearfix">
                    <div class="pagination__link right">
                        <a href="#" class="btn btn-lg btn-color">
                            <span>Older Posts</span>
                        </a>
                    </div>
                </div>

            </div>
            {{-- end posts --}}

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
                        <img src="img/blog/placeholder_300.jpg" alt="">
                    </a>
                </div>
                {{-- end widget banner --}}

            </aside>
            {{-- end sidebar --}}

        </div>
    </div>
</section>
@endsection