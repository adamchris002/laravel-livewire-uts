<div class="container box">
    <form wire:submit.prevent="registerUser">
        <h1 class="text-center">Register Form</h1>
        <img class="logo" src="https://i.ibb.co/9gW1RPX/pngwing-com-removebg-preview.png" />
        <div class="text-center div-informasi">
            <label class="label-login">Name: </label>
            <input class="form-control @error('name') is-invalid @enderror" placeholder="Please input the Name" type="string"  wire:model="name" />
            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="text-center div-informasi">
            <label class="label-login">E-mail: </label>
            <input class="form-control @error('email') is-invalid @enderror" placeholder="Please input the E-mail Adress" type="string" wire:model="email"/>
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="text-center div-informasi">
            <label class="label-login">Username: </label>
            <input class="form-control @error('username') is-invalid @enderror"  placeholder="Please input the Username" type="string" wire:model="username"/>
            @error('username')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="text-center div-informasi mb-3">
            <label class="label-login">Password: </label>
            <input class="form-control @error('password') is-invalid @enderror" placeholder="Please input the Password" type="password" wire:model="password"/>
            @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-check d-flex justify-content-center mb-2">
            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
            <label class="form-check-label" for="form2Example3g">
                I agree all statements in <a href="toa" class="text-body"><u>Terms of service</u></a>
            </label>
        </div>
        <a href="/" class="toRegister">Already have an account? click here to Login!</a>
        <br />
        <button type="submit" class="btn btn-primary login-btn">Register</button>
    </form>
</div>
