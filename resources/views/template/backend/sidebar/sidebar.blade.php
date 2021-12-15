<style type="text/css">
    .logo-icon { 
       width: 70px !important; margin-right: -12px; 
    }
    #sidebar-wrapper {
       background-color: #0089ff;
    }
    .sidebar-menu>li>a {
       color: rgb(255 255 255 / 0.75);
    }
    .sidebar-menu>li:hover>a, .sidebar-menu>li.active>a {
       color: white;
       background: rgb(0 0 0 / 22%);
    }
    .sidebar-menu .sidebar-submenu>li>a {
       color: rgb(255 255 255 / 0.75);
    }
    .sidebar-menu .sidebar-submenu>li.active>a, .sidebar-menu .sidebar-submenu>li>a:hover {
       color: white;
    }
    .simplebar-track.vertical {
       top: 60px;
    }
</style>
 
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        @if(Auth::guard('user')->check()) {{-- User --}}
       <a href="{{ route('user.dashboard') }}">
          <img src="{{ asset('assets/img/logo.png') }}" class="logo-icon" alt="logo icon">
          <h5 class="logo-text text-white">MANAGEMENT SYSTEM</h5>
       </a>
       @elseif(Auth::guard('admin')->check()) {{-- Admin --}}
       <a href="{{ route('admin.dashboard') }}">
          <img src="{{ asset('assets/img/logo.png') }}" class="logo-icon" alt="logo icon">
          <h5 class="logo-text text-white">MANAGEMENT SYSTEM</h5>
       </a>
       @endif
    </div>
    <ul class="sidebar-menu">
        @if(Auth::guard('user')->check()) {{-- User --}}
            <li>
                <a href="{{route('user.dashboard')}}" class="waves-effect">
                <i class="fa fa-tachometer"></i> <span>Dasboard</span>
                </a>
            </li>
        @elseif(Auth::guard('admin')->check()) {{-- Admin --}}
            <li>
                <a href="{{route('admin.dashboard')}}" class="waves-effect">
                <i class="fa fa-tachometer"></i> <span>Dasboard</span>
                </a>
            </li>
            <li>
                <a href="javaScript:void();" class="waves-effect">
                <i class="fa fa-map-signs"></i> <span>Master</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.data.header') }}">
                            <i class="fa fa-cogs"></i> Data Header
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-cogs"></i> Data Kategori
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.data.pasal') }}">
                            <i class="fa fa-cogs"></i> Data Pasal
                        </a>
                    </li>
                </ul>
            </li>
        @endif
    </ul>
</div>