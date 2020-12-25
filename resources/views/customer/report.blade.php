@extends('layout.app')
@section('title', trans('general/message.create_customer'))
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">contacts</i>
                </div>
                <div class="card-content">
                    <div id="echarts_bar" style="height:500px;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_scripts')
    <script>

    </script>
    <script src="{{asset('assets/vendors/echarts/echarts.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/layout/app/chat/charts-echarts.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/customer/create.js')}}" type="text/javascript"></script>
@endsection
