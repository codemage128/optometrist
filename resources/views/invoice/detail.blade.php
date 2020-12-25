@extends('layout.app')

@section('title', trans('general/message.create_vendor'))

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">business</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">@lang('general/message.payment_info')
                    </h4>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">@lang('general/message.id')</th>
                                <th class="text-center">@lang('general/message.customer')</th>
                                <th class="text-center">@lang('general/message.vendor')</th>
                                <th class="text-center">@lang('general/message.money')</th>
                                <th class="text-center">@lang('general/message.pay_date')</th>
                                <th class="text-center">@lang('general/message.created_date')</th>
                                <th class="text-center">@lang('general/message.status')</th>
                                <th class="text-center">@lang('general/message.actions')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($invoiceItems)
                                @php $id=0;@endphp
                                @foreach($invoiceItems as $invoiceItem)
                                    @php $id++;@endphp
                                    <tr>
                                        <td class="text-center">{{ $id }}</td>
                                        <td class="text-center text-uppercase"
                                            style="width: 150px;"> {{ $invoice->customer->name }}</td>
                                        <td class="text-center text-uppercase"
                                            style="width: 150px;">{{ $invoice->vendor->name }}</td>
                                        <td class="text-center">{{ $invoiceItem->money }}</td>
                                        <td class="text-center">{{ $invoiceItem->pay_date }}</td>
                                        <td class="text-center">{{ date_format($invoiceItem->created_at, 'Y-m-d') }}</td>
                                        <td class="text-center" style="width: 80px;">
                                            @if($invoiceItem->paid == 1)
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
                                            {{--<a href="{{route('invoices.detail', $invoice->id)}}" type="button"--}}
                                               {{--rel="tooltip" class="btn btn-rose">@lang('general/message.detail')</a>--}}
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection


@section('scripts')
@endsection



