<div >
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('getAllData') }}">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li><a href="cart" class="navbar-brand">Cart</a></li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>


    <div class="row">
        <div class="col-md-12">
             @if(session()->has('message'))
                 <div class="alert alert-success">
                    {{session('message')}}
                 </div>
            @endif
        </div>

    </div>

    <form wire:submit.prevent="addToCart">
        <div class="">
            <div class="row">
                <div class="">
                    <a href="{{route('getAllData')}}"><i class="fa fa-arrow-left fa-lg back-home"></i></a>
                    <img src={{ $thumbnail }} class="detail-picture" alt="...">
                    <hr class="garis" />
                    <div class="container">
                        <h2 class="card-text">$. {{ number_format($price) }}</h2>
                        <h4 class="card-title title-laptop">{{ $title }}</h4>
                        <div class="rating-stock">
                            <div class="bintang">
                                <p class="fa fa-star checked"></p>
                                <p class="rating-detail">{{ $rating }}</p>
                            </div>
                            <p class="info-stock">Stock: {{ $stock }}</p>
                        </div>
                        <hr/>
                        <h5>Product Details</h5>
                        <p class="card-text">{{ $description }}</p>
                    </div>
                    <div class="add-cart">
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


</div>
