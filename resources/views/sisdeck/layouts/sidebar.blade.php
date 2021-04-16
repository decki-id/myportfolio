<aside class="main-sidebar position-fixed" id="sidebar-wrapper">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/storage/{{ Auth::user()->profile->image }}" class="rounded-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                @if (Auth::guest())
                    <p>SisDeck</p>
                @else
                    <p>{{ Auth::user()->username }}</p>
                @endif
                <!-- Status -->
                <a href="#"><i class="fas fa-fw fa-circle text-success mr-1"></i>Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control dhs_search-input" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- Sidebar Menu -->

        <div class="sidebar-menu" data-widget="tree">
            @include('/sisdeck/layouts/menu')
        </div>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>