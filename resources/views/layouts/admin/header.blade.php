<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Admin
    </title>
    <!-- Favicon -->
    <link href="{{ asset('assets/admin/img/brand/favicon.png') }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->

    <link href="{{ asset('assets/admin/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/admin/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/admin/css/argon-dashboard.css') }}" rel="stylesheet"/>
</head>

<body>


<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('admin.index') }}">
            <img src="{{ asset('assets/admin/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <i class="ni ni-bell-55"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right"
                     aria-labelledby="navbar-default_dropdown_1">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="{{ asset('assets/admin/img/theme/team-1-800x800.jpg') }}">
              </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                    <a href="./examples/profile.html" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>My profile</span>
                    </a>
                    <a href="./examples/profile.html" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>Settings</span>
                    </a>
                    <a href="./examples/profile.html" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>Activity</span>
                    </a>
                    <a href="./examples/profile.html" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>Support</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#!" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('admin.index') }}">
                            <img src="{{ asset('assets/admin/img/brand/blue.png') }}">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                                aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended"
                           placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" href="{{ route('admin.index') }}">
                        <i class="ni ni-tv-2 text-primary"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="navbar-examples">
                        <i class="ni ni-single-copy-04 text-info"></i>
                        <span class="nav-link-text">Blog</span>
                    </a>
                    <div class="collapse {{ Request::is('admin/all') || Request::is('admin/new') ? 'show' : '' }}"
                         id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.all') }}"
                                   class="nav-link {{ Request::is('admin/all') ? 'active' : '' }}">
                                    <span class="sidenav-normal"> All blogs </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.new') }}"
                                   class="nav-link {{ Request::is('admin/new') ? 'active' : '' }}">
                                    <span class="sidenav-normal"> New blog</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="navbar-examples">
                        <i class="ni ni-single-copy-04 text-green"></i>
                        <span class="nav-link-text">Courses</span>
                    </a>
                    <div class="collapse {{ Request::is('admin/all') || Request::is('admin/new') ? 'show' : '' }}"
                         id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.all') }}"
                                   class="nav-link {{ Request::is('admin/all') ? 'active' : '' }}">
                                    <span class="sidenav-normal"> All Courses </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.new') }}"
                                   class="nav-link {{ Request::is('admin/new') ? 'active' : '' }}">
                                    <span class="sidenav-normal"> New Course</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="navbar-examples">
                        <i class="ni ni-single-copy-04 text-warning"></i>
                        <span class="nav-link-text">Study Tips</span>
                    </a>
                    <div class="collapse {{ Request::is('admin/all') || Request::is('admin/new') ? 'show' : '' }}"
                         id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.all') }}"
                                   class="nav-link {{ Request::is('admin/all') ? 'active' : '' }}">
                                    <span class="sidenav-normal"> All Tips </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.new') }}"
                                   class="nav-link {{ Request::is('admin/new') ? 'active' : '' }}">
                                    <span class="sidenav-normal"> New Tips</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-examples1" data-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="navbar-examples1">
                        <i class="fa fa-users text-purple"></i>
                        <span class="nav-link-text"> Users </span>
                    </a>
                    <div
                        class="collapse {{ Request::is('admin/users') || Request::is('admin/new-person') ? 'show' : '' }}"
                        id="navbar-examples1">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.index') }}"
                                   class="nav-link {{ Request::is('admin/users') ? 'active' : '' }}">
                                    <span class="sidenav-normal"> All Users </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.index') }}"
                                   class="nav-link {{ Request::is('admin/new-person') ? 'active' : '' }}">
                                    <span class="sidenav-normal"> New User</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/profile') ? 'active' : '' }}"
                       href="/admin/profile/{!! Auth::user()->id !!}">
                        <i class="ni ni-single-02 text-yellow"></i> Profile
                    </a>
                </li>

            </ul>
            <hr class="my-3">
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/profile') ? 'active' : '' }}"
                       href="{{ route('admin.setting') }}">
                        <i class="ni ni-settings-gear-65"></i> Setting
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{ route('admin.index') }}"></a>
            <!-- Form -->

            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                              <img alt="Image placeholder" src="{{ asset('assets/admin/img/theme/team-4-800x800.jpg') }}">
                            </span>
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold">{{Auth::user()->name}}</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome!</h6>
                        </div>
                        <a href="/admin/profile/{!! Auth::user()->id !!}" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>My profile</span>
                        </a>
                        <a href="{{ route('admin.setting') }}" class="dropdown-item">
                            <i class="ni ni-settings-gear-65"></i>
                            <span>Setting</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" class="dropdown-item"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="ni ni-user-run"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')

</div>

<script src="{{ asset('assets/admin/js/plugins/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('assets/admin/js/plugins/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins/chart.js/dist/Chart.extension.js') }}"></script>
<script src="{{ asset('assets/admin/js/argon-dashboard.min.js?v=1.1.0') }}"></script>
<script src="{{ asset('assets/admin/js/argon.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/demo.min.js') }}"></script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
    window.TrackJS &&
    TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
    });
</script>
</body>

</html>
