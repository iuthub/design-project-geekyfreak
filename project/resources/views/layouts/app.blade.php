<!doctype html>
<html lang="{{ app()->getLocale() }}"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GEEKYFREAK</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        <!-- 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> -->
    </head>
    <body>
        <div class="clearfix bg-dark">
             <nav class="navbar navbar-expand-sm bg-dark navbar-dark float-left">
              <!-- Brand/logo -->
              <a class="navbar-brand" href="/">HOME</a>
              
              <!-- Links -->
              <ul class="navbar-nav clearfix">
                <li class="nav-item">
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
                </ul>
            </nav>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark float-right">
              <form class="form-inline" action="/action_page.php">
                <input class="form-control" type="text" placeholder="Search">
                <button class="btn btn-secondary" type="submit">Search</button>
              </form>
            </nav>
        </div>
           
            <div class="container">
            <div class="content">
                @yield('content')
            </div>
        </div>
        
    </body>
</html>
