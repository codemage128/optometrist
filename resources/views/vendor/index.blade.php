@extends('layout.app')

@section('title', trans('general/message.all_vendor'))

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">contacts</i>
                </div>
                <br>
                <h4 class="card-title">@lang('general/message.all_vendor')</h4>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card-content">
                            <div class="card-content">
                                <form action="{{route('vendors.index')}}" method="get">
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
                    @if(count($vendors) > 0)
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">@lang('general/message.id')</th>
                                <th class="text-center">@lang('general/message.photo')</th>
                                <th class="text-center">@lang('general/message.name')</th>
                                <th class="text-center">@lang('general/message.email')</th>
                                <th class="text-center">@lang('general/message.store_name')</th>
                                <th class="text-center">@lang('general/message.store_location')</th>
                                <th class="text-center">@lang('general/message.commission')</th>
                                <th class="text-center">@lang('general/message.money')</th>
                                <th class="text-center">@lang('general/message.status')</th>
                                <th class="text-center">@lang('general/message.actions')</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php $id=0;@endphp
                                @foreach($vendors as $vendor)
                                    @php $id++;@endphp
                                    <tr>
                                        <td class="text-center">{{ $id }}</td>
                                        <td width="10%"><img src="{{asset($vendor->profile->avatar)}}"
                                                             class="img-circle" alt="User Photo">
                                        </td>
                                        <td class="text-center"> {{ $vendor->name }}</td>
                                        <td class="text-center">{{ $vendor->email }}</td>
                                        <td class="text-center">{{ $vendor->profile->store_name }}</td>
                                        <td class="text-center">{{ $vendor->profile->store_location }}</td>
                                        <td class="text-center">{{ $vendor->profile->commission }} %</td>
                                        <td class="text-center">{{ $vendor->profile->balance }} {{config('app.currency')}} </td>
                                        <td class="text-center">
                                            @if($vendor->active == 0)
                                                <span class="btn btn-default btn-sm">@lang('general/message.not_active')</span>
                                            @else
                                                <span class="btn btn-success btn-sm">@lang('general/message.active')</span>
                                            @endif
                                        </td>
                                        <td class="td-actions text-center">
                                            <a href="{{route('vendors.edit', $vendor->id)}}" type="button" rel="tooltip" class="btn btn-rose">@lang('general/message.edit')</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                        <h1 class="text-center">@lang('general/message.no_vendor')</h1>
                    @endif
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-5">
                            {{$vendors->appends(['s'=>$s])->render()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection



