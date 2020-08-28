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
        <div class="dhs-topbar">
            <div class="dhs-navtoggler"><i class="fas fa-fw fa-bars"></i></div>
            <div class="dhs-logo"><h1>HelpDeck</h1></div>
            <div class="dhs-usericon"><img src="{{url('assets/images/user.jpg')}}" class="dhs-profilepicture"></div>
        </div>
        <div class="dhs-userdropdownmenu">
            <div class="dhs-userinfo">
                <h6 class="dhs-username">Decki Herdiawan Soepandi</h6>
                <span>PT. Ava Revota</span>
            </div>
            <hr>
            <a href="#" class="dhs-dropdownmenuitem"><i class="fas fa-fw fa-user"></i>Profile</a>
            <a href="#" class="dhs-dropdownmenuitem"><i class="fas fa-fw fa-cog"></i>Personal Settings</a>
            <a href="/" class="dhs-dropdownmenuitem"><i class="fas fa-fw fa-power-off"></i>Log Out</a>
        </div>
        <div class="dhs-sidebar">
            <a href="#" class="dhs-navlink"><i class="fas fa-fw fa-ticket-alt"></i><h4>Tickets</h4></a>
            <a href="#" class="dhs-navlink"><i class="fas fa-fw fa-user"></i><h4>Lists</h4></a>
        </div>

        @yield('section')

        <!-- Optional JavaScript -->
        <script src="{{url('assets/popper/popper.min.js')}}"></script>
        <script src="{{url('js/helpdeck.js')}}"></script>
    </body>
</html>