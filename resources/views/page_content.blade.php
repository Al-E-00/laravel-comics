@imoport()

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="full-background-jumbotron">

            </div>
        </div>  
        <div class="row">
            <div class="col">
                @foreach ($products as $product)
                @include('partials.productCard', [
                    "prodotto" => $product
                ])
                @endforeach
            </div>
        </div>
    </div>
</div>