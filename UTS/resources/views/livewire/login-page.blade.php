<div class="container first">
    <div class="box">
        <form wire:submit.prevent="loginUser">
            <h1 class="text-center">Login Page</h1>
            <img class="logo" src="https://i.ibb.co/9gW1RPX/pngwing-com-removebg-preview.png" />

            @error('username')
            <div class="alert alert-danger alert-dismissible fade show ini-alert" role="alert">
                <p class="alert-message">{{$message}}</p>
                <button type="button" class="btn-close alert-button" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @enderror
            <div class="div-informasi">
                <label class="label-login">Username: </label>
                <input class="form-control @error('username') is-invalid @enderror" placeholder="Please input the Username" type="text" wire:model.defer="username"/>
            </div>
            @error('password')
            <div class="alert alert-danger alert-dismissible fade show ini-alert" role="alert">
                <p class="alert-message">{{$message}}</p>
                <button type="button" class="btn-close alert-button" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @enderror
            <div class="div-informasi">
                <label class="label-login">Password: </label>
                <input class="form-control @error('password') is-invalid @enderror" placeholder="Please input the Password" type="password" wire:model.defer="password"/>
            </div>

            <a href="{{route('register')}}" class="toRegister">Don't have an account? click here to Register!</a>
            <br />
            <button type="submit" class="btn btn-primary login-btn">Login</button>
            </div>


        </form>
    </div>
</div>
