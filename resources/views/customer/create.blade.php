@extends('layout.app')

@section('title', trans('general/message.create_customer'))

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">contacts</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">@lang('general/message.create_customer')
                        <small class="category">@lang('general/message.complete_customer_profile')</small>
                    </h4>
                    <form action="{{route('customers.store')}}" method="post"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @if(count($errors) > 0)
                            <div class="alert alert-danger alert-with-icon" data-notify="container">
                                <i class="material-icons" data-notify="icon">notifications</i>
                                <span data-notify="message">
                                    @foreach($errors->all() as $error)
                                        <li><strong> {{$error}} </strong></li>
                                    @endforeach
                            </span>
                            </div>
                        @endif
                        <div class="row">
                                <div class="col-md-6 col-md-offset-3 text-center">
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img src="{{asset('assets/img/default.jpg')}}" alt="...">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                            <span class="btn btn-rose btn-round btn-file">
                                                <span class="fileinput-new">@lang('general/message.select_image')</span>
                                                <span class="fileinput-exists">@lang('general/message.change')</span>
                                                <input type="file" name="avatar"/>
                                            </span>
                                            <a href="#" class="btn btn-danger btn-round fileinput-exists"
                                               data-dismiss="fileinput"><i
                                                        class="fa fa-times"></i> @lang('general/message.remove')</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="name">@lang('general/message.name')</label>
                                    <input id="name" name="name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="email">@lang('general/message.email')</label>
                                    <input id="email" name="email" type="email" class="form-control">
                                </div>
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="first_name">@lang('general/message.first_name')</label>
                                    <input id="first_name" name="first_name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="last_name">@lang('general/message.last_name')</label>
                                    <input id="last_name" name="last_name" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="birthday">@lang('general/message.birthday')</label>
                                    <input id="birthday" name="birthday" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="phonenumber">@lang('general/message.phone_number')</label>
                                    <input id="phonenumber" name="phonenumber" type="text"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="civil_id">@lang('general/message.civil_id')</label>
                                    <input id="civil_id" name="civil_id" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="paci_no">@lang('general/message.paci_no')</label>
                                    <input id="paci_no" name="paci_no" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="password">@lang('general/message.new_password')</label>
                                    <input id="password" name="password" type="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="confirm-password">@lang('general/message.confirm_new_password')</label>
                                    <input id="confirm-password" name="confirm-password" type="password"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <a href="{{route('customers.index')}}" class="btn btn-rose">@lang('general/message.cancel')</a>
                        <button type="submit" class="btn btn-success pull-right">@lang('general/message.save')</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
    <script src="{{asset('assets/js/customer/create.js')}}" type="text/javascript"></script>
@endsection



