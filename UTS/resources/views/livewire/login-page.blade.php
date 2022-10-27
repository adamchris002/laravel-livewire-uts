<div class="container box">
    <form wire:submit.prevent="loginUser">
        <h1 class="text-center">Register Login</h1>
        <img class="logo" src="https://i.ibb.co/9gW1RPX/pngwing-com-removebg-preview.png" />

        <div class="text-center div-informasi mb-3">
            <label class="label-login">Username: </label>
            <input class="form-control @error('username') is-invalid @enderror" placeholder="Please input the Username" type="text" wire:model.defer="username"/>
            @error('username')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="text-center div-informasi mb-3">
            <label class="label-login">Password: </label>
            <input class="form-control @error('password') is-invalid @enderror" placeholder="Please input the Password" type="password" wire:model.defer="password"/>
            @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        </div>

        <a href="{{route('register')}}" class="toRegister">Don't have an account? click here to Register!</a>
        <br />
        <button type="submit" class="btn btn-primary login-btn">Login</button>
    </form>
</div>
