<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{url('assets/bootstrap-441/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('css/style.css')}}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{url('assets/fontawesome-513/css/all.css')}}">

        <link rel="icon" type="image/png" href="{{url('assets/images/decki-revota.png')}}">
        <title>@yield('title')</title>
    </head>
    <body>
        <nav class="navbar navbar-side navbar-expand-sm navbar-light bg-white fixed-top">
            <div class="navbar-nav ml-auto navbar-right-top">
                <div class="nav-item dropdown nav-user">
                    <a href="#" class="nav-link nav-user-img" id="navbarDropdownMenuLink" data-toggle="dropdown">
                        <img src="{{url('assets/images/decki-revota.png')}}" class="user-avatar-md rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-user nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink">
                        <div class="nav-user-info">
                            <h6 class="mb-0 text-white">Decki Herdiawan Soepandi</h6>
                            <span>d.herdiawan.s@gmail.com</span>
                        </div>
                        <a href="#" class="dropdown-item"><i class="fas fa-fw fa-user mr-2"></i>Profile</a>
                        <a href="http://127.0.0.1:8000" class="dropdown-item"><i class="fas fa-fw fa-power-off mr-2"></i>Log Out</a>
                    </div>
                </div>
            </div>
        </nav>
        <ul class="nav sidebar flex-column navbar-dark bg-dark">
            <a class="navbar-brand center" href="/">Deckiherdiawans<br>Students</a>
            <div class="sidebar-divider"></div>
            <a class="nav-link side-link active" href="#"><i class="fas fa-fw fa-user-graduate mr-2"></i>Students</a>
            <div class="sidebar-divider"></div>
            <a class="nav-link side-link" href="#">Link</a>
            <div class="sidebar-divider"></div>
            <a class="nav-link side-link" href="#">Link</a>
            <div class="sidebar-divider"></div>
        </ul>

        @yield('section')

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{url('assets/jquery/jquery-3.4.1.min.js')}}"></script>
        <script src="{{url('assets/popper/popper.min.js')}}"></script>
        <script src="{{url('assets/bootstrap-441/js/bootstrap.min.js')}}"></script>
        <script src="{{url('js/script.js')}}"></script>
    </body>
</html>