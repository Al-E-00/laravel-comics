@extends('layouts.app')

@section('page_title', $comic['title'] . 'comic detail')

@section('page_content')

<div class="container-fluid">
    <div class="row background-jumbotron">
        
    </div>
    <div class="row">
        <div class="col custom-comic-image-section p-0">
            <img class="custom-single-comic-image" src="{{ asset($comic['thumb']) }}" alt="">
            <div class="custom-division-line-header-comic"></div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h4>{{ $comic['title'] }}</h4>
            <div class="check-availability-banner">
                <span>U.S. Price: {{ $comic['price'] }}</span>
                <span> {{ $comic['availability'] }} </span>
                <button>Check Availability</button>
            </div>
            <span> {{ $comic['description'] }} </span>
        </div>
        <div class="col">
            <h6>Advertisement</h6>
            <img src="{{ asset('images/adv.jpg') }}" alt="">
        </div>
    </div>
<div>

@endsection