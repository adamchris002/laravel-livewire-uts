<div >
    <nav class="navbar navbar-light bg-light justify-content-between navigasi">
  <a class="navbar-brand" href="{{ route('getAllData') }}">Home</a>
  <form class="form-inline">
    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
  </form>
</nav>


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
                    <div class="row">
        <div class="col-md-12 d-flex justify-content-center mt-5">
             @if(session()->has('message'))
                 <div class="alert alert-success">
                    {{session('message')}}
                 </div>
            @endif
        </div>

    </div>
                    <div class="add-cart">
                        <input wire:model="quantity" id="number" type="number" class="form-control quantity update-cart" value="1" />
                        <br />
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


</div>
