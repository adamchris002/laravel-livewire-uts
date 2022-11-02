<div>

<div>
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

            </div>
        </div>
    </nav>
</div>

<div class="col-md-12 d-flex justify-content-center mt-5">
             @if(session()->has('message'))
                 <div class="alert alert-success">
                    {{session('message')}}
                 </div>
            @endif
        </div>


<div class="mt-5 container">
    <h4 class="judul-cart">My Cart</h4>

    <br />
    <table id="cart" class="container table table-hover">
    <thead class="thead-dark">
        <tr>
            <th style="width:70%">Product(s)</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%">Subtotal</th>
            <th style="width:60%">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($order as $cart)
        <tr data-id="{{ $cart }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3"><img src="{{ $cart->thumbnail }}" width="180" height="100"/></div>
                            <div class="col-sm-3">
                                <input class="history-element" value="{{$cart->title}}" disabled>
                            </div>
                        </div>
                    </td>
                    <td><input class="history-element" value="${{$cart->price}}" disabled></td>
                    <td><input class="history-element" value="{{($cart->quantity)}}" disabled></td>
                    <td><input class="history-element" value="{{$cart->price * $cart->quantity}}" disabled></td>
                    <td class="actions">
                    <button wire:click="delete({{$cart->id}})" class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                    <button class="btn btn-warning" wire:click="checkOut({{$cart->id}})">Checkout</button>
                    </td>
                </tr>
            @endforeach
    </tbody>

</div>


</div>
