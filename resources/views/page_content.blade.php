@extends('layouts.app')

@section('page_content')

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="full-background-jumbotron">
            </div>
        </div>  
        <div class="row row-cols-6">
                @foreach($comics as $comic)
                    @include('partials.cards', [
                        "comic" => $comic
                    ])
                @endforeach
        </div>
    </div>
</div>
<div>
    @include('partials.link_navbar')
</div>


@endsection