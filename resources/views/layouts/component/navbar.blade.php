<nav class="navbar navbar-default navbar-fixed-top" style="background-color: white">
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu"></i></button>
        </div>
        <!-- logo -->
        <div class="navbar-brand">
            {{-- <a href="index.html"><img src="{{ asset('main/assets/img/logo.png')}}" alt="DiffDash Logo"
            class="img-responsive logo"></a> --}}
        </div>
        <!-- end logo -->
        <div class="navbar-right">
            <!-- navbar menu -->
            <div id="navbar-menu">
                <ul class="nav navbar-nav">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="lnr lnr-cog pr-2"></i>{{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu user-menu menu-icon">
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                        class="fa fa-power-off"></i> <span>{{ __('Logout') }}</span></a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- end navbar menu -->
        </div>
    </div>
</nav>