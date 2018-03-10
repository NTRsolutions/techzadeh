@extends('layouts.main-layout')
@section('title', 'Categories')
@section('content')
<section class="section-wrap pt-50 pb-30">
    <div class="container">
        <section class="featured-posts-masonry">
            <div class="container">

                <h1>Categories</h1>

                @foreach($categories as $item)
                <div class="featured-posts-masonry__item featured-posts-masonry__item--sm">
                    <article class="entry featured-posts-masonry__entry">
                        <div class="thumb-bg-holder" style="background-image: url({{ asset( $item->img_url ) }});">
                            <a href="/category/{{ $item->id }}" class="thumb-url"></a>
                            <div class="bottom-gradient"></div>
                        </div>

                        <div class="thumb-text-holder">
                            <h1 class="thumb-entry-title">
                                <a href="/category/{{ $item->id }}">{{ $item->name }}</a>
                            </h1>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</section>
@endsection