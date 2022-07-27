@extends('layouts.app')

@section('page_content')

<div>
    <div class="row background-jumbotron">
        
    </div>
    <div class="row main-jumbotron">
        <div class="banner-custom bg-primary">
            <h5 class="text-uppercase m-0">Current series</h5>
        </div>
        @foreach($comics as $comic)
        <a href="{{ route('comics.show', $comic['id']) }}" class="col g-3 p-0 d-flex justify-content-center flex-wrap">
                    @include('partials.cards', [
                        "comic" => $comic
                    ])
        </a>
            @endforeach
        <div class="banner-custom-load-more bg-primary">
            <h5 class="text-uppercase m-0">Load More</h5>
        </div>
    </div>
</div>
<div>
    @include('partials.link_navbar')
</div>


@endsection