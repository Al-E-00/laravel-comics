@php
$banner_icons = [
    [
        'name' => 'digital comics',
        'img' => 'images/buy-comics-digital-comics.png',
    ],
    [
        'name' => 'shop dc',
        'img' => 'images/buy-comics-subscriptions.png',
    ],
    [
        'name' => 'comic shop locator',
        'img' => 'images/buy-comics-shop-locator.png',
    ],
    [
        'name' => 'merchandise',
        'img' => 'images/buy-comics-merchandise.png',
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
        <div class="row custom-container-dimension description-section">
            <div class="col-8 comic-description-section">
                <h5 class="custom-title-style">{{ $comic['title'] }}</h5>
                <div class="custom-banner-check-availability">
                    <span class="text-color-light ps-3">
                        U.S. Price:
                    </span>
                    <span class="text-white ps-1">
                        {{ $comic['price'] }}
                    </span>
                    <span class="text-color-light is-available-write">
                        {{ $comic['availability'] }}
                    </span>
                    <button class="text-white button-check-availability">Check Availability <i
                            class="fa-solid fa-caret-down custom-icon-for-button-availability"></i></button>
                </div>
                <p class="comic-full-description">
                    {{ $comic['description'] }}
                </p>
            </div>
            <div class="col advertisement-section">
                <h6>Advertisement</h6>
                <img src="{{ asset('images/adv.jpg') }}" alt="{{ asset($comic['title']) }}">
            </div>
        </div>
        <div class="row custom-container-dimension talent-and-specs-section">
            <div class="col">
                <h6>Talent</h6>
                <div class="single-descriptive-sections-talent">
                    <div class="row">
                        <div class="col-4">
                            <span class="title-descriptive-section">
                                Art by:
                            </span>
                        </div>
                        <div class="col">
                            @foreach ($comic['artists'] as $artist)
                            <span class="content-descriptive-section">
                                    {{ $artist }}
                            </span>
                            @if (!$loop->last)
                                <span class="content-descriptive-section">,</span>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="single-descriptive-sections-talent">
                    <div class="row">
                        <div class="col-4">
                            <span class="title-descriptive-section">
                                Written by:
                            </span>
                        </div>
                        <div class="col">
                            @foreach ($comic['writers'] as $writer)
                            <span class="content-descriptive-section">
                                    {{ $writer }}
                            </span>

                            @if (!$loop->last)
                                <span class="content-descriptive-section">,</span>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>


            </div>
            <div class="col">
                <h6>Specs</h6>
                <div class="single-descriptive-sections-specs">
                    <div class="row">
                        <div class="col-4">
                            <span class="title-descriptive-section">
                                Series:
                            </span>
                        </div>
                        <div class="col">
                            <span class="content-descriptive-section  text-custom">
                                {{ $comic['series'] }}
                            </span>        
                        </div>
                    </div>
                </div>
                <div class="single-descriptive-sections-specs">
                    <div class="row">
                        <div class="col-4">
                            <span class="title-descriptive-section">
                                U.S. Price:
                            </span>
                        </div>
                        <div class="col">
                            <span class="content-descriptive-section">
                                {{ $comic['price'] }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="single-descriptive-sections-specs">
                    <div class="row">
                        <div class="col-4">
                            <span class="title-descriptive-section">
                                On Sale Date:
                            </span>
                        </div>
                        <div class="col">
                            <span>
                                {{ $comic['sale_date'] }}
                            </span>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <div class="row custom-container-dimension banner-icons-section">
            <div class="col d-flex p-0">
                @foreach ($banner_icons as $banner)
                    <div class="single-banner-style">
                                <span class="text-banner-section">
                                    {{ $banner['name'] }}
                                </span>

                                <img class="images-banner-section" src="{{ asset($banner['img']) }}" alt="">


                    </div>
                @endforeach
            </div>
        </div>
        <div>

        @endsection
