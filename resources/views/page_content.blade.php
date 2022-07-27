@extends('layouts.app')

@section('page_content')

<div>
    <div class="row background-jumbotron">
        
    </div>
    <div class="row main-jumbotron">
        <div class="banner-custom bg-primary">
            <h5 class="text-uppercase m-0">Current series</h5>
        </div>
        <a href="#" class="col g-3 p-0 d-flex justify-content-center flex-wrap">
            @foreach($comics as $comic)
                    @include('partials.cards', [
                        "comic" => $comic
                    ])
            @endforeach
        </a>
        <div class="banner-custom-load-more bg-primary">
            <h5 class="text-uppercase m-0">Load More</h5>
        </div>
    </div>
</div>
<div>
    @include('partials.link_navbar')
</div>


@endsection