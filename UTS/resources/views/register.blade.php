<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link href="/css/main.css" rel="stylesheet">
</head>

<body class="antialiased">
    <header>
        <h1 class="text-center">Register Page</h1>
    </header>
    <div class="container box">
        <h1 class="text-center">Register Form</h1>
        <img class="logo" src="https://i.ibb.co/9gW1RPX/pngwing-com-removebg-preview.png" />
        <div class="text-center div-informasi">
            <label class="label-login">Name: </label>
            <input class="form-control" placeholder="Please input the Name" type="string" />
        </div>
        <div class="text-center div-informasi">
            <label class="label-login">E-mail: </label>
            <input class="form-control" placeholder="Please input the E-mail Adress" type="string" />
        </div>
        <div class="text-center div-informasi">
            <label class="label-login">Username: </label>
            <input class="form-control" placeholder="Please input the Username" type="string" />
        </div>
        <div class="text-center div-informasi mb-3">
            <label class="label-login">Password: </label>
            <input class="form-control" placeholder="Please input the Password" type="password" />
        </div>
        <div class="form-check d-flex justify-content-center mb-2">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="toa" class="text-body"><u>Terms of service</u></a>
                  </label>
        </div>
        <a href="/" class="toRegister">Already have an account? click here to Login!</a>
        <br />
        <a href="" class="btn btn-primary login-btn">Register</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
