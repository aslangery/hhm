<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Honey Hunters</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
    <header class="header-bg" >
        <div class="container">
            <div class="row">
                <div class="col-md-3 logo"><img src="{{asset('images/logo.png')}}"/> </div>
            </div>
        </div>
    </header>
    <section class="header-bg">
        <div class="container">
            <div class="row">
                @yield('form')
            </div>
        </div>
    </section>
    <main class="container">
        <div class="row">
            @yield('content')
        </div>
    </main>
    <footer class="footer-bg">
        <div class="container">
            <div class="footer-logo"><img src="{{asset('images/logo.png')}}"/> </div>
        </div>
    </footer>
</body>
</html>