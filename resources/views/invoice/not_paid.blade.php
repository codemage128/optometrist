@extends('layout.app')

@section('title', trans('general/message.remain_payment'))

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">payment</i>
                </div>
                <br>
                <h4 class="card-title">@lang('general/message.remain_payment')</h4>
                <div class="row">
                    {{--<div class="col-md-12">--}}
                        {{--<div class="card-content">--}}
                            {{--<div class="card-content">--}}
                                {{--<form action="{{route('invoices.index')}}" method="get">--}}
                                    {{--<div class="col-md-9">--}}
                                        {{--<div class="form-group label-floating">--}}
                                            {{--<label for="s" class="control-label">@lang('general/message.search')</label>--}}
                                            {{--<input type="text" id="s" name="s" value="{{isset($s) ? $s : ''}}"--}}
                                                   {{--class="form-control">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-3">--}}
                                        {{--<div class="form-group text-center">--}}
                                            {{--<button type="submit"--}}
                                                    {{--class="btn btn-primary ">@lang('general/message.search')</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                <div class="card-content">
                    @if(count($invoices) > 0)
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">@lang('general/message.id')</th>
                                <th class="text-center">@lang('general/message.customer')</th>
                                <th class="text-center">@lang('general/message.vendor')</th>
                                <th class="text-center">@lang('general/message.total_money')</th>
                                <th class="text-center">@lang('general/message.remain_money')</th>
                                <th class="text-center">@lang('general/message.pay_date')</th>
                                <th class="text-center">@lang('general/message.created_date')</th>
                                <th class="text-center">@lang('general/message.status')</th>
                                <th class="text-center">@lang('general/message.actions')</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php $id=0;@endphp
                                @foreach($invoices as $invoice)
                                    @php $id++;@endphp
                                    <tr>
                                        <td class="text-center">{{ $id }}</td>
                                        <td class="text-center text-uppercase" style="width: 150px;"> {{ $invoice->customer->name }}</td>
                                        <td class="text-center text-uppercase" style="width: 150px;">{{ $invoice->vendor->name }}</td>
                                        <td class="text-center">{{ $invoice->total_money }} {{config('app.currency')}}</td>
                                        <td class="text-center">{{ $invoice->money }} {{config('app.currency')}}</td>
                                        <td class="text-center">{{ $invoice->pay_date }}</td>
                                        <td class="text-center">{{ date_format($invoice->created_at, 'Y-m-d') }}</td>
                                        <td class="text-center" style="width: 80px;">
                                            @if($invoice->paid == 1)
                                                <button class="btn btn-success btn-xs">
                                                    <span class="btn-label"><i class="material-icons">check</i></span>
                                                    @lang('general/message.complete')
                                                </button>
                                            @else
                                                <button class="btn btn-warning btn-xs">
                                                    <span class="btn-label">
                                                        <i class="material-icons">warning</i>
                                                    </span>
                                                    @lang('general/message.not_complete')
                                                </button>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{route('invoices.detail', $invoice->id)}}" type="button"
                                               rel="tooltip" class="btn btn-rose">@lang('general/message.detail')</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                        <h1 class="text-center">@lang('general/message.no_customer_invoice')</h1>
                    @endif
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-5">
                            {{$invoices->appends(['s'=>$s])->render()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection



