<div class="navbar-wrapper">
    <div class="container">
        <ul class="nav nav-pills pull-right nav-landing">
            @if (Auth::guest())
                <li>
                    <a href="{{ route('login') }}" class="nav-auth nav-auth-login animated-all">
                        @lang('general/message.login')
                    </a>
                </li>
                <li>
                    <a href="{{route('register')}}" class="nav-auth nav-auth-signup animated-all">
                        @lang('general/message.signup')
                    </a>
                </li>
            @else
                <li>
                    <a href="#"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-auth nav-auth-signup animated-all">
                        <span style="font-weight:400;">@lang('general/message.log_out')</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endif
        </ul>
        <a href="/" class="logo">
            <img src="{{asset('assets/img/logo.png')}}" style="width:150px;">
        </a>
    </div>
</div>
