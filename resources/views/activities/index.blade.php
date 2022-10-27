@extends('layouts.app')
@section('title', ' - Activities')
@section('content')
    <section id="portfolio-section" class="portfolio-section av-py-default portfolio-home shapes-section">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="heading-default text-center wow fadeInUp">
                        <h3>Our <span class="primary-color">Activities</span></h3>
                        <span class="separator"><span><span></span></span></span>
                        <p>
                            Than Than Services Agency
                        </p>
                    </div>
                </div>
            </div>

            <div class="av-filter-wrapper-1">
                <div class="av-columns-area wow fadeInUp">
                    <div class="av-column-12">
                        @foreach ($activities as $activitie)
                            <h6>
                                {{ $activitie->title ?? '' }}
                            </h6>
                            <p>
                                {!! $activitie->description ?? '' !!}
                            </p>
                            <div id="av-filter-init-1" class="av-columns-area av-filter-init">
                                @php
                                    $values = explode(',', $activitie->photo);
                                @endphp
                                @foreach ($values as $photo)
                                    <div
                                        class="av-column-4 av-sm-column-6 av-filter-item all year2000 year2010 year2015 year2020">
                                        <figure class="portfolio-item mgf-popup">
                                            <div class="portfolio-inner">
                                                <div class="portfolio-thumb" tabindex="0">
                                                    <div class="portfolio-thumb-img">
                                                        <img src="{{ $photo }}" alt="portfolio_item"
                                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                                    </div>
                                                    <div class="portfolio-thumber">
                                                        <div class="portfolio-thumb-content">
                                                            <a href="{{ $photo }}" class="image"
                                                                title="{{ $activitie->title ?? '' }}">
                                                                <i class="fa fa-search-plus"></i>
                                                            </a>
                                                            <p>
                                                                {{ $activitie->title ?? '' }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                @endforeach
                            </div>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
@section('script')
@endsection
