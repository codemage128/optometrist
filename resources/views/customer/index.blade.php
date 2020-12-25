@extends('layout.app')

@section('title', trans('general/message.all_customer'))

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">contacts</i>
                </div>
                <br>
                <h4 class="card-title">@lang('general/message.all_customer')</h4>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card-content">
                            <div class="card-content">
                                <form action="{{route('customers.index')}}" method="get">
                                    <div class="col-md-9">
                                        <div class="form-group label-floating">
                                            <label for="s" class="control-label">@lang('general/message.search')</label>
                                            <input type="text" id="s" name="s" value="{{isset($s) ? $s : ''}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group text-center">
                                            <button type="submit"
                                                    class="btn btn-primary ">@lang('general/message.search')</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    @if(count($customers) > 0)
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="text-center">@lang('general/message.id')</th>
                                    <th class="text-center">@lang('general/message.name')</th>
                                    <th class="text-center">@lang('general/message.email')</th>
                                    <th class="text-center">@lang('general/message.phone_number')</th>
                                    <th class="text-center">@lang('general/message.birthday')</th>
                                    <th class="text-center">@lang('general/message.civil_id')</th>
                                    <th class="text-center">@lang('general/message.balance')</th>
                                    <th class="text-center">@lang('general/message.status')</th>
                                    <th class="text-center">@lang('general/message.actions')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $id=0;@endphp
                                @foreach($customers as $customer)
                                    @if(count($customer->profile) > 0)
                                        @php $id++;@endphp
                                        <tr>
                                            <td class="text-center">{{ $id }}</td>
                                            <td class="text-center"> {{ $customer->name }}</td>
                                            <td class="text-center">{{ $customer->email }}</td>
                                            <td class="text-center">{{ $customer->profile->phonenumber }}</td>
                                            <td class="text-center">{{ $customer->profile->birthday }}</td>
                                            <td class="text-center">{{ $customer->profile->civil_id }}</td>
                                            <td class="text-center">{{ $customer->profile->balance }} {{config('app.currency')}}</td>
                                            <td class="text-center">
                                                @if($customer->active == 0)
                                                    <span class="btn btn-default btn-sm">@lang('general/message.not_active')</span>
                                                @else
                                                    <span class="btn btn-success btn-sm">@lang('general/message.active')</span>
                                                @endif
                                            </td>
                                            <td class="td-actions text-center">
                                                <a href="{{route('customers.edit', $customer->id)}}" type="button"
                                                   rel="tooltip" class="btn btn-rose">@lang('general/message.edit')</a>
                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td class="text-center">{{ $id }}</td>
                                            <td class="text-center"> {{ $customer->name }}</td>
                                            <td class="text-center">{{ $customer->email }}</td>
                                            <td class="text-center" colspan="4">
                                                <h4 class="text-center">@lang('general/message.no_customer_profile')</h4>
                                            </td>
                                            <td class="text-center">
                                                @if($customer->active == 0)
                                                    <span class="btn btn-default btn-sm">@lang('general/message.not_active')</span>
                                                @else
                                                    <span class="btn btn-success btn-sm">@lang('general/message.active')</span>
                                                @endif
                                            </td>
                                            <td class="td-actions text-center">
                                                <a href="{{route('customers.edit', $customer->id)}}" type="button"
                                                   rel="tooltip" class="btn btn-rose">@lang('general/message.edit')</a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <h1 class="text-center">@lang('general/message.no_customer')</h1>
                    @endif
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-5">
                            {{$customers->appends(['s'=>$s])->render()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection



