<header class="main-header " id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
        <!-- Sidebar toggle button -->
        <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
        </button>

        <div class="search-form d-none d-lg-inline-block">
        </div>

        <div class="navbar-right ">
            <ul class="nav navbar-nav">
                <!-- User Account -->
                <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <!-- <img src="{{asset('assets/img/user/user.png')}}" class="user-image" alt="User Image" /> -->
                        <span class="d-none d-lg-inline-block">{{Auth::user()->username}}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <!-- User -->
                        <li class="dropdown-header">
                            <div class="d-inline-block p-2">
                                {{Auth::user()->username}} <small class="pt-1">{{Auth::user()->email}}</small>
                            </div>
                        </li>
                        <li class="dropdown-footer">
                            <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-logout"></i> Log Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>