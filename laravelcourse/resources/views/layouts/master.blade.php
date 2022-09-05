<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title','HomePage')</title>
        <!--Styles-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="{{asset('css/customStyle.css')}}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{route('home.index')}}">
                        {{config('app.name','Laravel')}}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{__('Togglenavigation')}}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!--LeftSideOfNavbar-->
                        <ul class="navbar-nav mr-auto">
                            <!--FutureLeftSideLinks-->
                        </ul>
                        <!--RightSideOfNavbar-->
                        <ul class="navbar-nav ml-auto">
                            <!--FutureauthenticationLinks-->
                        </ul>
                    </div>
                </div>
            </nav>
            <mainc class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
    <!--Scripts-->
    </html> 


