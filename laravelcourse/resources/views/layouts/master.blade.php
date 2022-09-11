<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title','HomePage')</title>
        <!--Styles-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
                            <li>
                                <a href="/product/show">Products List</a>
                            </li>
                            <li>
                                <a href="/product/create">Create a Product</a>
                            </li>
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


