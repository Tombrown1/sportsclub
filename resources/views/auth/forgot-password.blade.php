<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title> Login  </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="icon" type="image/png" href="{{ asset('backend/favicon.ico') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/css/signup_style.css') }}">
  <!-- Google Font: Source Sans Pro -->

</head>
  <body>
     <div class="sign-up-form">
        <img src="{{asset('images/logo3.png')}}" alt="">
        <h3>Reset Password</h3>
            <form action="{{route('password.email')}}" method="post">
                @csrf
                @if(session('status')) 
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <input type="email" class="input-box" name="email" placeholder="Enter Your Email">
                <span class="text-danger">@error('email'){{$message}}@enderror</span>                
              
                <button type="submit" class="login-btn">Send Password Link </button> 
              
            </form>
     </div>

  </body>
</html>
