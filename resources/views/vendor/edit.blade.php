@extends('layout.app')

@section('title', trans('general/message.edit_vendor'))

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">business</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">@lang('general/message.edit_vendor') -
                        <small class="category">@lang('general/message.complete_vendor_profile')</small>
                    </h4>
                    <form action="{{route('vendors.update', $vendor->id)}}" method="post"
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
                                        <img src="{{asset($vendor->profile->avatar)}}" alt="...">
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
                                    <select class="selectpicker" name="active" data-style="btn btn-warning btn-round"
                                            title="Single Select" data-size="7">
                                        <option value="0"
                                                @if($vendor->active == 0)
                                                selected
                                                @endif
                                        >@lang('general/message.not_active')
                                        </option>
                                        <option value="1"
                                                @if($vendor->active == 1)
                                                selected
                                                @endif
                                        >@lang('general/message.active')
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="name">@lang('general/message.name')</label>
                                    <input id="name" name="name" type="text" class="form-control"
                                           value="{{$vendor->name}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="email">@lang('general/message.email')</label>
                                    <input id="email" name="email" type="email" class="form-control"
                                           value="{{$vendor->email}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="name">@lang('general/message.store_name')</label>
                                    <input id="store_name" name="store_name" type="text" class="form-control"
                                           value="{{$vendor->profile->store_name}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="email">@lang('general/message.store_location')</label>
                                    <input id="store_location" name="store_location" type="text" class="form-control"
                                           value="{{$vendor->profile->store_location}}">
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
                                           for="email">@lang('general/message.commission')</label>
                                    <input id="commission" name="commission" type="number" class="form-control"
                                           value="{{$vendor->profile->commission}}">
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

        <div class="col-md-4">
            <div class="card card-content">
                <div class="card-content">
                    <div class="alert alert-primary">
                        <h4 class="card-title text-center"><span>@lang('general/message.special_action')</span></h4>
                    </div>
                    <div class="text-center">
                        <a href="{{route('vendors.delete', $vendor->id)}}" class="btn btn-warning member-delete">@lang('general/message.delete')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
@endsection



