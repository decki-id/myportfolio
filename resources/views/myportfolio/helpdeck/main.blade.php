<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS -->
        <link rel="stylesheet" href="{{url('css/helpdeck.css')}}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{url('assets/fontawesome-513/css/all.css')}}">

        <link rel="icon" type="image/png" href="{{url('assets/images/decki-revota.jpg')}}">
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="topbar">
            <div class="nav-toggler"><i class="fas fa-fw fa-bars"></i></div>
            <div class="logo"><h1>HelpDeck</h1></div>
            <div class="user-dropdown">
                <img src="{{url('assets/images/user.jpg')}}" class="profile-picture">
            </div>
        </div>
        <div class="sidebar">

        </div>

        @yield('section')

        <!-- Optional JavaScript -->
        <script src="{{url('assets/popper/popper.min.js')}}"></script>
        <script src="{{url('js/helpdeck.js')}}"></script>
    </body>
</html>