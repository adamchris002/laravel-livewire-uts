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
                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li><a href="history" class="navbar-brand">History</a></li>
                </ul>
                <form class="d-flex" role="search" method="GET">
                    <button class="btn btn-danger" type="button">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="mt-5 container">
    <h4 class="judul-cart">My Cart</h4>
    
    <br />
    <table id="cart" class="container table table-hover">
    <thead class="thead-dark">
        <tr>
            <th style="width:90%">Product(s)</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($history as $cart)
        <tr data-id="{{ $cart }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3"><img src="{{ $cart->thumbnail }}" width="180" height="100"/></div>
                            <div class="col-sm-3">
                                <h4>{{ $cart->title }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ number_format($cart->price) }}</td>
                    <td data-th="Quantity">{{ $cart->quantity}}</td>
                    <td data-th="Subtotal">${{$cart->price * $cart->quantity}}</td>
                </tr>
            @endforeach
    </tbody>
</div>

</div>