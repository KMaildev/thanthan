@extends('layouts.app')
@section('content')
    <section id="breadcrumb-section" class="breadcrumb-area breadcrumb-left">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="breadcrumb-content">
                        <div class="breadcrumb-heading wow fadeInLeft">
                            <h2>Our Partners</h2>
                        </div>
                        <ol class="breadcrumb-list wow fadeInRight">
                            <li><a href="{{ route('welcome') }}"><i class="fa fa-home"></i> Homepage</a>
                                &nbsp;-&nbsp;</li>
                            <li class="active">Our Partners </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
