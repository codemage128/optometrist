@extends('layout.app')

@section('title', trans('general/message.create_vendor'))

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">business</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">@lang('general/message.create_vendor') -
                        <small class="category">@lang('general/message.complete_vendor_profile')</small>
                    </h4>
                    <form action="{{route('vendors.store')}}" method="post"
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
                                    <label class="control-label" for="name">@lang('general/message.name')</label>
                                    <input id="name" name="name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="email">@lang('general/message.email')</label>
                                    <input id="email" name="email" type="email" class="form-control">
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="name">@lang('general/message.store_name')</label>
                                    <input id="store_name" name="store_name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="email">@lang('general/message.store_location')</label>
                                    <input id="store_location" name="store_location" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <a href="{{route('vendors.index')}}" class="btn btn-rose">@lang('general/message.cancel')</a>
                        <button type="submit" class="btn btn-success pull-right">@lang('general/message.save')</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection


@section('scripts')
@endsection



