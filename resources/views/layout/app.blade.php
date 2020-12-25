<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="csrf-token" content="{!! csrf_token() !!}"/>
    <meta name="root-path" content="{{ asset('/') }}"/>
    <title>{{config('app.name')}} | @yield('title')</title>
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/layout/app/font.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/layout/app/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/layout/app/material-dashboard.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/jquery-confirm/css/jquery-confirm.min.css') }}"/>
    @yield('header_styles')
</head>
<body data-asseturl= {{asset('/')}}>
<div class="wrapper">
    @include('partial.app.sidebar')
    <div class="main-panel">
        <nav class="navbar navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="padding-left: 10px">
                        <li>
                            <img style="height: 45px;" class="img-circle" src="{{asset('assets/img/1.jpg')}}"/>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <div class="dropdown">
                                <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">
                                    {{ Auth::user()->name }}
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="material-icons">power_settings_new</i>
                                            @lang('general/message.log_out')
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li>
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="material-icons">settings</i>
                                            @lang('general/message.edit')
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div style="height:50px;">
        </div>
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <footer class="footer">
            @include('partial.app.footer')
        </footer>
    </div>
</div>
</body>

<script src="{{asset('assets/vendors/jquery/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.jquery.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/jasny-bootstrap/jasny-bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendors/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js')}}"></script>
<script src="{{asset('assets/vendors/jquery/jquery.select-bootstrap.js')}}"></script>
<script src="{{asset('assets/js/layout/app/material.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/layout/app/material-dashboard.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/sweetalert/sweetalert2.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-confirm/js/jquery-confirm.min.js')}}" type="text/javascript"></script>
<script>
    @if (session()->has('message'))
    swal({
        title: "{!! session()->get('title')  !!}",
        text: "{!! session()->get('message')  !!}",
        type: "{!! session()->get('type')  !!}",
        buttonsStyling: false,
        confirmButtonClass: "btn btn-success",
        confirmButtonText: "@lang('general/message.ok')"
    });
    @endif
</script>
@yield('footer_scripts')
</html>