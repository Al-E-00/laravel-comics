@php
$banner_icons = [
    [
        "name" => "digital comics",
        "img" => "images/buy-comics-digital-comics.png"
    ],
    [
        "name" => "shop dc",
        "img" => "images/buy-comics-subscriptions.png"
    ],
    [
        "name" => "comic shop locator",
        "img" => "images/buy-comics-shop-locator.png"
    ],
    [
        "name" => "merchandise",
        "img" => "images/buy-comics-merchandise.png"
    ],
];

@endphp

@extends('layouts.app')

@section('page_title', $comic['title'] . 'comic detail')

@section('page_content')

    <div class="container-fluid">
        <div class="row background-jumbotron">

        </div>
        <div class="row">
            <div class="col custom-comic-image-section p-0 custom-container-dimension">
                <img class="custom-single-comic-image" src="{{ asset($comic['thumb']) }}">
                <div class="custom-division-line-header-comic"></div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5>{{ $comic['title'] }}</h5>
                <div>
                    <span>
                        U.S. Price: {{ $comic['price'] }}
                    </span>
                    <span>
                        {{ $comic['availability'] }}
                    </span>
                    <button>Check Availability</button>
                </div>
                <p>
                    {{ $comic['description'] }}
                </p>
            </div>
            <div class="col">
                <img src="{{ asset('images/adv.jpg') }}" alt="{{ asset($comic['title']) }}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h6>Talent</h6>
                <div>
                    <span class="title-descriptive-section">
                        Art by:
                    </span>
                    <span class="content-descriptive-section">
                        @foreach ($comic['artists'] as $artist)
                            {{ $artist }}
                    </span>
                    @if (!$loop->last)
                        <span>,</span>
                    @endif
                    @endforeach
                </div>

                <div>
                    <span class="title-descriptive-section">
                        Written by:
                    </span>
                    <span class="content-descriptive-section">
                        @foreach ($comic['writers'] as $writer)
                            {{ $writer }}
                    </span>
    
                    @if (!$loop->last)
                        <span>,</span>
                    @endif
                    @endforeach
                </div>


            </div>
            <div class="col">
                <h6>Specs</h6>
                <div>
                    <span class="title-descriptive-section">
                        Series: 
                    </span>
                    <span class="content-descriptive-section">
                        {{ $comic['series'] }}
                    </span>
                </div>
                <div>
                    <span class="title-descriptive-section">
                        U.S. Price:
                    </span>
                    <span class="content-descriptive-section">
                        {{ $comic['price']}}
                    </span>
                </div>
                <div>
                    <span class="title-descriptive-section">
                        On Sale Date:
                    </span>
                    <span>
                        {{ $comic['sale_date'] }}
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex">
                @foreach($banner_icons as $banner)
                <div>
                    <span>
                        {{ $banner['name'] }}
                    </span>
                    <img src="{{ asset($banner['img']) }}" alt="">
                </div>
                @endforeach
            </div>
        </div>
        <div>

        @endsection
