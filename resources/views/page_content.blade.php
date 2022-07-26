@extends('layouts.app')

@section('page_content')

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="full-background-jumbotron">
            </div>
        </div>  
        <div class="row">
            <div class="col">
                @dump($comics)
            </div>
        </div>
    </div>
</div>

@endsection