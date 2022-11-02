<div>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li><a href="cart" class="navbar-brand">Cart</a></li>
                    <li><a href="history" class="navbar-brand">History</a></li>
                </ul>
                <form class="d-flex" role="search" method="GET">
                    @csrf
                    <input wire:model="search" class="form-control me-2" type="search" name="search" placeholder="Search"
                           aria-label="Search">
                    <a href="{{route("page.login")}}" class="btn btn-danger">Logout</a>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <h4 class="judul-smartphones">Products</h4>
            @foreach ($products as $hp)
                <div class="col-lg-4 ">
                    <div class="card mr-2 mb-2 ini-card" style="width: 18rem;">
                        <a href="{{ route('detail', $hp->id) }}">
                            <img src={{ $hp->thumbnail }} class="img-thumbnail" width="150px" max-height="425px"
                                 alt="...">
                        </a>
                        <div class="card-body">

                            <h5 class="card-title">{{ $hp->title }}</h5>
                            <p class="card-text">{{ $hp->description }}</p>
                            <p class="card-text stock">Stock: {{$hp->stock}}</p>
                            <span class="rating">
                                <p class="fa fa-star checked"></p>
                                <p class="rating-text">{{ $hp->rating }}</p>
                            </span>
                            <div class="button-price">
                                <a href="{{ route('detail', $hp->id) }}" class="btn btn-primary">Details</a>
                                <p class="card-text ini-text"> $. {{number_format($hp->price) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</div>
