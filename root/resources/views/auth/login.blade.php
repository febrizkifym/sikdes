<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <style>
        *{
            font-family:"Nunito", sans-serif;
            margin:0;
        }
        body{
            background:url({{asset('images/blurry.jpg')}}) no-repeat center center fixed;
            background-size:cover;
            color:#3c3c3c;
        }
        .brand{
            position:relative;
            top:25px;
            text-align: center;
        }
        .loginbox{
            position:relative;
            top:25px;
            margin:10px auto;
            padding:35px;border-radius:5px;
            width:300px;
            background-color:#FFF;
            box-shadow:0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .loginbox > span{
            display:block;
            text-align:center;
            font-weight: bold;
            font-size:1.3em;
            margin-bottom:25px;
        }
        .loginbox > span.copyright{
            display:block;
            text-align: left;
            margin-top:20px;
            font-size:10pt;
            font-weight: 800;
            color:rgba(0, 0, 0, 0.24);
        }
        input,button{
            display:block;
            padding:5px 15px;
        }
        input{
            font-size:12pt;
            width:265px;height:30px;
            margin:10px 0;
        }
        button{
            width:100%;
            font-size:14pt;font-weight:bold;
            text-transform: uppercase;letter-spacing: 1px;
            background-color:#3e65e8;
            color:#FFF;
            border: 1px solid #3E65E8;
        }
        button:hover{
            cursor:pointer;
        }
        .container{
            background-color:rgba(255, 255, 255, 0.50);
            display:block;
            width:600px;height:100vh;
            margin:0 auto;
        }
        img.brand{
            display:block;
            margin:0 auto;
            margin-top:15px;
            width:100px;
        }
        .invalid-feedback{
            color:#770000;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="brand">
        <h1>Sistem Informasi Kependudukan<br>Desa Tingkohubu</h1>
    </div>
    <img src="{{asset('images/logo2.png')}}" alt="" class="brand">
    <div class="loginbox">
        <span>{{ __('Login') }}</span>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Username / Email Address" required autofocus>
            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
            @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
            <button class="submit" type="submit">Login</button>
        </form>
        <span class="copyright">Copyright. 2019</span>
    </div>
</div>
</body>
</html>