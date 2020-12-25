@extends('layout.app')

@section('title', trans('general/message.edit_customer') )

@section('content')


    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">perm_identity</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">@lang('general/message.edit_customer') -
                        <small class="category">@lang('general/message.complete_customer_profile')</small>
                    </h4>
                    <form action="{{route('customers.update', $customer->id)}}" method="post" enctype="multipart/form-data">
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
                                            <img src="{{asset($customer->profile->avatar)}}" alt="...">
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
                                    <select class="selectpicker" name="active"
                                            data-style="btn btn-warning btn-round"
                                            title="Single Select" data-size="7">
                                        <option value="0"
                                                @if($customer->active == 0)
                                                selected
                                                @endif
                                        >@lang('general/message.not_active')
                                        </option>
                                        <option value="1"
                                                @if($customer->active == 1)
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
                                    <label class="control-label"
                                           for="name">@lang('general/message.name')</label>
                                    <input id="name" name="name" type="text" class="form-control"
                                           value="{{$customer->name}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="email">@lang('general/message.email')</label>
                                    <input id="email" name="email" type="email" class="form-control"
                                           value="{{$customer->email}}">
                                </div>
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="first_name">@lang('general/message.first_name')</label>
                                    <input id="first_name" name="first_name" type="text" class="form-control"
                                           value="{{$customer->profile->first_name}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="last_name">@lang('general/message.last_name')</label>
                                    <input id="last_name" name="last_name" type="text" class="form-control"
                                           value="{{$customer->profile->last_name}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="birthday">@lang('general/message.birthday')</label>
                                    <input id="birthday" name="birthday" type="date" class="form-control"
                                           value="{{$customer->profile->birthday}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="phonenumber">@lang('general/message.phone_number')</label>
                                    <input id="phonenumber" name="phonenumber" type="text"
                                           class="form-control"
                                           value="{{$customer->profile->phonenumber}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="civil_id">@lang('general/message.civil_id')</label>
                                    <input id="civil_id" name="civil_id" type="text" class="form-control" value="{{$customer->profile->civil_id}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="paci_no">@lang('general/message.paci_no')</label>
                                    <input id="paci_no" name="paci_no" type="text" class="form-control" value="{{$customer->profile->paci_no}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="password">@lang('general/message.balance')</label>
                                    <input id="balance" name="balance" type="form-control" class="form-control" value="{{$customer->profile->balance}}" step="0.01" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"
                                           for="password">@lang('general/message.new_password')</label>
                                    <input id="password" name="password" type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <a href="{{route('customers.index')}}"
                           class="btn btn-rose">@lang('general/message.cancel')</a>
                        <button type="submit"
                                class="btn btn-success pull-right">@lang('general/message.save')</button>
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
                        <a href="{{route('customers.delete', $customer->id)}}" class="btn btn-warning member-delete">@lang('general/message.delete')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection


@section('scripts')

    <script type="text/javascript">

        $(".member-delete").on('click', function (e) {
            e.preventDefault();

            var theHREF = $(this).attr("href");

            $.confirm({
                title: 'Delete Confirm',
                content: 'Are you sure to delete this member?',
                buttons: {
                    Confirm: {
                        btnClass: 'btn-warning',
                        action: function () {
                            // here the button key 'hey' will be used as the text.
                            window.location.href = theHREF;
                        }
                    },
                    Cancel: {
                        btnClass: 'btn-blue',

                    }
                }
            });
        });


    </script>

@endsection



