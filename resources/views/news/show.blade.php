@extends('layouts.app')
@section('title', ' - News')
@section('content')
    <section id="post-section" class="post-section av-py-default">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-10 mx-auto">
                    <article class="post-items">
                        <figure class="post-image post-image-absolute">
                            <div class="featured-image">
                                <a href="javascript:void(0);" class="post-hover">
                                    <img src="{{ $new->photo ?? '' }}" alt="post_item">
                                </a>
                            </div>
                        </figure>
                        <div class="post-content">
                            <h5 class="post-title">
                                {{ $new->title ?? '' }}
                            </h5>
                            <div class="post-footer">
                                <p>
                                    {!! $new->description ?? '' !!}
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section id="post-section" class="post-section shapes-section">
        <div class="av-container">

            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="heading-default text-center wow fadeInUp">
                        <h3>Other <span class="primary-color">News</span></h3>
                        <span class="separator"><span><span></span></span></span>
                    </div>
                </div>
            </div>

            <div class="av-columns-area">
                @foreach ($news as $key => $new)
                    <div class="av-column-4 av-md-column-6">
                        <article class="post-items">
                            <figure class="post-image post-image-absolute">
                                <div class="featured-image">
                                    <a href="{{ route('news.show', $new->id) }}" class="post-hover">
                                        <img src="{{ $new->photo ?? '' }}" alt="post_item">
                                    </a>
                                </div>
                            </figure>
                            <div class="post-content">
                                <h5 class="post-title">
                                    <a href="{{ route('news.show', $new->id) }}" rel="bookmark">
                                        {{ $new->title ?? '' }}
                                    </a>
                                </h5>
                                <div class="post-footer">
                                    <p>
                                        {!! Str::limit($new->description, 130, '...') !!}
                                    </p>
                                    <a href="{{ route('news.show', $new->id) }}" class="more-link">Read More</a>
                                    <span class="post-count">
                                        {{ $key + 1 }}
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="shape20"><img src="{{ asset('assets/images/blog/clipArt/shape20.png') }}" alt="image"></div>
        <div class="shape21"><img src="{{ asset('assets/images/blog/clipArt/shape21.png') }}" alt="image"></div>
        <div class="shape22"><img src="{{ asset('assets/images/blog/clipArt/shape22.png') }}" alt="image"></div>
        <div class="shape23"><img src="{{ asset('assets/images/blog/clipArt/shape23.png') }}" alt="image"></div>
    </section>

    <br><br>
@endsection
@section('script')
@endsection
