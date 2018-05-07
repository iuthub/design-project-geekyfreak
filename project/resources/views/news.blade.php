<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>News</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    </head>
    <body>
       

            <div class="content">
                 <div class="links">
                    <a href="{{url('news')}}">News</a>
                    <a href="{{url('movies')}}">Movies</a>
                    <a href="{{url('manga')}}">Manga</a>
                    <a href="{{url('comics')}}">Comics</a>
                    <a href="{{url('contacts')}}">Contacts</a>
                </div>
                <div class="welcoming">
                    NEWS
                </div>

               
            </div>
        </div>
    </body>
</html>