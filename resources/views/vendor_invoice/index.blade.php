@extends('layout.app')

@section('title', trans('general/message.complete_payment'))

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">payment</i>
                </div>
                <br>
                <h4 class="card-title">@lang('general/message.complete_payment')</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-content">
                            <div class="card-content">
                                <form action="{{route('vendor_invoices.index')}}" method="get">
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
                    @if(count($vendor_invoices) > 0)
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">@lang('general/message.id')</th>
                                <th class="text-center">@lang('general/message.vendor')</th>
                                <th class="text-center">@lang('general/message.total_money')</th>
                                <th class="text-center">@lang('general/message.commission')</th>
                                <th class="text-center">@lang('general/message.send_money')</th>
                                <th class="text-center">@lang('general/message.created_date')</th>
                                <th class="text-center">@lang('general/message.status')</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php $id=0;@endphp
                                @foreach($vendor_invoices as $vendorInvoice)
                                    @php $id++;@endphp
                                    <tr>
                                        <td class="text-center">{{ $id }}</td>
                                        <td class="text-center text-uppercase" style="width: 150px;">{{ $vendorInvoice->vendor->name }}</td>
                                        <td class="text-center">{{ $vendorInvoice->total_money }} {{config('app.currency')}}</td>
                                        <td class="text-center">{{ $vendorInvoice->commission }} %</td> 
                                        <td class="text-center">{{ $vendorInvoice->send_money }} {{config('app.currency')}}</td>
                                        <td class="text-center">{{ date_format($vendorInvoice->created_at, 'Y-m-d') }}</td>
                                        <td class="text-center" style="width: 80px;">
                                            @if($vendorInvoice->status == 1)
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
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                        <h1 class="text-center">@lang('general/message.no_vendor_invoice')</h1>
                    @endif
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-5">
                            {{$vendor_invoices->appends(['s'=>$s])->render()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection



