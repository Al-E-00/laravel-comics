@php

$headerLinks = [
    [
        'text' => 'characters',
        'link' => '/',
        'name' => 'characters'
    ],
    [
        'text' => 'comics',
        'link' => '/',
        'name' => 'comics'
    ],
    [
        'text' => 'movies',
        'link' => '/',
        'name' => 'movies'
    ],
    [
        'text' => 'tv',
        'link' => '/',
        'name' => 'tv'
    ],
    [
        'text' => 'games',
        'link' => '/',
        'name' => 'games'
    ],
    [
        'text' => 'collectibles',
        'link' => '/',
        'name' => 'collectibles'
    ],
    [
        'text' => 'videos',
        'link' => '/',
        'name' => 'videos'
    ],
    [
        'text' => 'fans',
        'link' => '/',
        'name' => 'fans'
    ],
    [
        'text' => 'news',
        'link' => '/',
        'name' => 'news'
    ],
    [
        'text' => 'shop',
        'link' => '/',
        'name' => 'shop'
    ],
]

@endphp


{{-- HEADER-> included inside our website
    THIS IS VISIBLE IN EVERY PAGE OF OUR WEBSITE --}}

<div class="container-fluid">
    <div class="row custom-first-line-header">
        <div class="col text-end">
            <a class="custom-link" href="#">Dc power <span class="custom-text">sm</span> visa<span><i class="fa-regular fa-registered"></i></span></a>
            <a class="custom-link" href="#">addition dc sites</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div>
                <div class="d-flex justify-content-between custom-nav-style">
                    <img class="logo-image-navbar" src='{{ asset("images/dc-logo.png") }}' alt="Logo DC">
                    <ul class="d-flex gap-4 m-0 list-unstyled align-items-center">
                        <li>
                            {{-- add active class if the link is active --}}
                            @foreach ($headerLinks as $headerlink)
                            <a class="links-navbar {{Request::route()->getName() === $headerlink['name'] ? 'active' : '' }}" href="{{ $headerlink['link'] }}" class="">{{ $headerlink['text'] }}</a>
                            @endforeach
                        </li>
                    </ul>
        
                </div>
            </div>
        </div>
    </div>
</div>
