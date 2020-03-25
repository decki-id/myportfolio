<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{url('assets/bootstrap-441/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('css/style.css')}}">

        <link rel="icon" type="image/png" href="{{url('assets/images/decki-revota.png')}}">
        <title>@yield('title')</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container">
                <a class="navbar-brand" href="/">Deckiherdiawans</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link nav-custom" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-custom" href="#">More About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-custom" href="#">My Blog</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Portfolio</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/myportfolio/students">CRUD Students</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>                            
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('section')

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{url('assets/jquery/jquery-3.4.1.min.js')}}"></script>
        <script src="{{url('assets/popper/popper.min.js')}}"></script>
        <script src="{{url('assets/bootstrap-441/js/bootstrap.min.js')}}"></script>
        <script src="{{url('assets/ckeditor/ckeditor.js')}}"></script>
        <script>
            ClassicEditor
                .create (document.querySelector('#message'))
                .then (message => {
                    console.log(message);
                })
                .catch (error => {
                    console.error(error);
                });
        </script>
    </body>
</html>