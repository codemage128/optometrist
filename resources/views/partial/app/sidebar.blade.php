<div class="sidebar" data-active-color="green" data-background-color="black">
     {{--data-image="{{asset('assets/img/sidebar-1.jpg')}}">--}}
    <div class="logo">
        <a href="{{route('dashboard')}}" class="simple-text">
            <div class="photo"><img src="{{asset('/assets/img/logo.png')}}" alt="User Photo" class="img" style="width: 150px;"></div>
        </a>
    </div>
    <div class="logo logo-mini"><a href="#" class="simple-text">TPA</a></div>
    <div class="sidebar-wrapper">
        {{--<div class="user">--}}
            {{--<div class="photo"><img src="{{asset('/assets/img/default.jpg')}}" alt="User Photo" class="img"></div>--}}
            {{--<div class="info"><a data-toggle="collapse" href="" class="collapsed">{{ Auth::user()->name }}</a></div>--}}
        {{--</div>--}}
        <ul class="nav">
            @if(Auth::user()->admin == 1)
                <li class="{{ Request::is('dashboard*') ? "active" :"" }}">
                    <a href="{{route('dashboard')}}" class="nav-padding">
                        <i class="material-icons">dashboard</i>
                        <p>@lang('general/message.dashboard')</p>
                    </a>
                </li>
                <li class="{{ Request::is('customers*') ? "active" :"" }}">
                    <a data-toggle="collapse" href="#CustomerMember" class="nav-padding">
                        <i class="material-icons">people</i>
                        <p>@lang('general/message.customer')<b class="caret"></b></p>
                    </a>
                    <div class="{{ Request::is('customers*') ? "" : "collapse" }}" id="CustomerMember">
                        <ul class="nav">
                            <li class="{{ Request::is('customers') ? "active" : "" }}">
                                <a href="{{route('customers.index')}}">@lang('general/message.all_customer')</a>
                            </li>
                            <li class="{{ Request::is('customers/create') ? "active" : "" }}">
                                <a href="{{route('customers.create')}}">@lang('general/message.create_customer')</a>
                            </li>
                            <li class="{{Request::is('customers/report') ? "active" : ""}}">
                                <a href="{{route('customers.report')}}">@lang('general/message.reports')</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="{{ Request::is('invoices*') ? "active" :"" }}">
                    <a data-toggle="collapse" href="#CustomerPayment" class="nav-padding">
                        <i class="material-icons">payment</i>
                        <p>@lang('general/message.customer_payment')<b class="caret"></b></p>
                    </a>
                    <div class="{{ Request::is('invoices*') ? "" : "collapse" }}" id="CustomerPayment">
                        <ul class="nav">
                            <li>
                                <a href="#">@lang('general/message.all_payment')</a>
                            </li>
                            <li class="{{ Request::is('invoices') ? "active" : "" }}">
                                <a href="{{route('invoices.index')}}">@lang('general/message.complete_payment')</a>
                            </li>
                            <li class="{{ Request::is('invoices/notpaid') ? "active" : "" }}">
                                <a href="{{route('invoices.notpaid')}}">@lang('general/message.remain_payment')</a>
                            </li>
                            <li>
                                <a href="#">@lang('general/message.due_payment')</a>
                            </li>
                            <li>
                                <a href="#">@lang('general/message.refunded_payment')</a>
                            </li>
                            <li>
                                <a href="#">@lang('general/message.cancel_payment')</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="{{ Request::is('vendors*') ? "active" :"" }}">
                    <a data-toggle="collapse" href="#VendorManager" class="nav-padding">
                        <i class="material-icons">business</i>
                        <p>@lang('general/message.vendor')<b class="caret"></b></p>
                    </a>
                    <div class="{{ Request::is('vendors*') ? "" : "collapse" }}" id="VendorManager">
                        <ul class="nav">
                            <li class="{{ Request::is('vendors') ? "active" : "" }}">
                                <a href="{{route('vendors.index')}}">@lang('general/message.all_vendor')</a>
                            </li>
                            <li class="{{ Request::is('vendors/create') ? "active" : "" }}">
                                <a href="{{route('vendors.create')}}">@lang('general/message.create_vendor')</a>
                            </li>
                            <li>
                                <a href="#">@lang('general/message.reports')</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="{{ Request::is('vendor_invoices*') ? "active" :"" }}">
                    <a data-toggle="collapse" href="#VendorPayment" class="nav-padding">
                        <i class="material-icons">payment</i>
                        <p>@lang('general/message.vendor_payment')<b class="caret"></b></p>
                    </a>
                    <div class="{{ Request::is('vendor_invoices*') ? "" : "collapse" }}" id="VendorPayment">
                        <ul class="nav">
                            <li>
                                <a href="#">@lang('general/message.all_payment')</a>
                            </li>
                            <li class="{{ Request::is('vendor_invoices') ? "active" : "" }}">
                                <a href="{{route('vendor_invoices.index')}}">@lang('general/message.complete_payment')</a>
                            </li>
                            <li class="{{ Request::is('vendor_invoices/notpaid') ? "active" : "" }}">
                                <a href="{{route('vendor_invoices.notpaid')}}">@lang('general/message.remain_payment')</a>
                            </li>
                            <li>
                                <a href="#">@lang('general/message.due_payment')</a>
                            </li>
                            <li>
                                <a href="#">@lang('general/message.refunded_payment')</a>
                            </li>
                            <li>
                                <a href="#">@lang('general/message.cancel_payment')</a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif
        </ul>
    </div>
</div>