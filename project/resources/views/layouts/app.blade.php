<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <?php
  $bg = array('01.jpg', '02.jpg', '03.jpg', '04.jpg', '05.jpg','06.jpg', '07.jpg', '08.jpg', '09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
<style type="text/css">body{
  background: url("BG/<?php echo $selectedBg; ?>") no-repeat;
    background-position: center;  
           background-repeat: no-repeat;     
               background-size: cover;     
               width: 100%;
               height: 100%;  
                 background-attachment: fixed;
               position: sticky;
               }
</style>

    <div id="app">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark  navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                  
                         <li class="nav-item ">
                  <a class="nav-link" href="{{url('news')}}">News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('movies')}}">Movies</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('manga')}}">Manga</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('comics')}}">Comics</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('contacts')}}">Contacts</a>
                </li> 
                        <!-- Links -->
             
                                  
                            </ul>

                    <!-- Right Side Of Navbar -->
                 <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                             <li><a class="nav-link" data-toggle="modal" data-target="#myModal1">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" data-toggle="modal" data-target="#myModal2">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="modal fade" id="myModal2" role="dialog">
             <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registration</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                <div class="modal-body">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="DoB" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth')}}</label>
                            
                            <div class="col-md-6 text-md-left">
                            <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required autofocus>
                               @if ($errors->has('dob'))
                               <span class="help-block">
                               <strong>{{ $errors->first('dob') }}</strong>
                               </span>
                                @endif
                        </div>
                    </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="modal fade" id="myModal1" role="dialog">
             <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             
            </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <button class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#myModal2">
                                     {{ __('Register') }}
                                </button>
                            </div>
                            <div class="col-md-8 offset-md-4">          
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
