<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home Page</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="/css/main.css" rel="stylesheet">
</head>

<body>
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
                </ul>
                <form class="d-flex" role="search" method="GET">
                    @csrf
                    <input class="form-control me-2" type="search" name="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-success me-2" type="submit">Search</button>
                    <button class="btn btn-danger" type="button">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <h4 class="judul-smartphones">Smartphones</h4>
            @foreach ($smartphones->products as $hp)
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
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <p class="card-text ini-text"> $. {{ $hp->price }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <h4 class="judul-smartphones">Laptops</h4>
            @foreach ($laptops->products as $lp)
                <div class="col-lg-4 ">
                    <div class="card mr-2 mb-2 ini-card" style="width: 18rem;">
                        <a href="{{ route('detailLaptop', $lp->id) }}">
                            <img src={{ $lp->thumbnail }} class="img-thumbnail" width="150px" max-height="425px"
                                alt="...">
                        </a>
                        <div class="card-body">

                            <h5 class="card-title">{{ $lp->title }}</h5>
                            <p class="card-text">{{ $lp->description }}</p>
                            <p class="card-text stock">Stock: {{$lp->stock}}</p>
                            <span class="rating">
                                <p class="fa fa-star checked"></p>
                                <p class="rating-text">{{ $lp->rating }}</p>
                            </span>
                            <div class="button-price">
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <p class="card-text ini-text"> $. {{ $lp->price }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
