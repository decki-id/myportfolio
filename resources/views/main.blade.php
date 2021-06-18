<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS -->
        <link rel="stylesheet" href="{{url('css/style.css')}}">
        <link rel="stylesheet" href="{{url('css/red.css')}}">

        <!-- Color Switcher -->
        <link rel="stylesheet" class="alternative-color" id="Red" title="Red" href="{{url('css/red.css')}}" disabled="true">
        <link rel="stylesheet" class="alternative-color" id="Yellow" title="Yellow" href="{{url('css/yellow.css')}}" disabled="true">
        <link rel="stylesheet" class="alternative-color" id="Green" title="Green" href="{{url('css/green.css')}}" disabled="true">
        <link rel="stylesheet" class="alternative-color" id="Blue" title="Blue" href="{{url('css/blue.css')}}" disabled="true">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{url('assets/fontawesome-513/css/all.css')}}">

        <link rel="icon" type="image/jpg" href="{{url('assets/images/decki-revota.jpg')}}">
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="main-container">
            <div class="sidebar">
                <div class="logo">
                    <a href="/" id="decki">Decki</a>
                    <a href="/" id="herdiawans">Herdiawans</a>
                </div>
                <div class="nav-toggler"><i class="fas fa-fw fa-bars"></i></div>
                <div class="nav">
                    <ul>
                        <li>
                            <a href="/" class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                                <i class="fas fa-fw fa-home"></i>Home
                            </a>
                        </li>
                        <li>
                            <a href="/about" class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}">
                                <i class="fas fa-fw fa-user"></i>About
                            </a>
                        </li>
                        <li>
                            <a href="/certificates" class="{{ Route::currentRouteName() == 'certificates' ? 'active' : '' }}">
                                <i class="fas fa-fw fa-id-card"></i>Certificates
                            </a>
                        </li>
                        <li>
                            <a href="/portfolios" class="{{ Route::currentRouteName() == 'portfolios' ? 'active' : '' }}">
                                <i class="fas fa-fw fa-laptop"></i>Portfolios
                            </a>
                        </li>
                        <li>
                            <a href="/blogs" class="{{ Route::currentRouteName() == 'blogs' ? 'active' : '' }}">
                                <i class="fas fa-fw fa-newspaper"></i>Blogs
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="copyright">
                    &copy {{ date('Y') }}<br>Deckiherdiawans.<br>All Rights Reserved.
                </div>
            </div>
        </div>

        <div class="content">
            @yield('section')
        </div>

       <div class="style-switcher">
           <div class="switcher-toggle"><i class="fas fa-cog fa-spin"></i></div>
           <h5>Color Switcher</h5>
           <ul>
               <li><a href="javascript:void(0);" title="Red" id="color_toggle-red" onclick="setActiveColor('Red')"></a></li>
               <li><a href="javascript:void(0);" title="Yellow" id="color_toggle-yellow" onclick="setActiveColor('Yellow')"></a></li>
               <li><a href="javascript:void(0);" title="Green" id="color_toggle-green" onclick="setActiveColor('Green')"></a></li>
               <li><a href="javascript:void(0);" title="Blue" id="color_toggle-blue" onclick="setActiveColor('Blue')"></a></li>
           </ul>
           <hr>
           <h5>Body Skin</h5>
           <label><input type="radio" class="body-skin" id="light" name="body-skin" value="light" checked>Light</label>
           <label><input type="radio" class="body-skin" id="dark" name="body-skin" value="dark">Dark</label>
       </div>

        <!-- Optional JavaScript -->
        <script src="{{url('js/script.js')}}"></script>
    </body>
</html>