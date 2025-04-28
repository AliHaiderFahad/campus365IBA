@extends('admin.layouts.master')
@section('title', $title)
@section('content')

<!-- Start Content-->
<div class="main-body">
    <div class="page-wrapper">
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>{{ $title }}</h5>
                    </div>
                    <div class="card-block">
                        <form class="needs-validation" novalidate method="get" action="{{ route($route.'.report') }}">
                            <div class="row gx-2">
                             
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card">
                   
                    @if(isset($rows))
                    @if(count($rows) > 0)
                    
                    <div class="card-block">
                        <a href="{{ route($route.'.report') }}" class="btn btn-info"><i class="fas fa-sync-alt"></i> {{ __('btn_refresh') }}</a>
                        <pre>{{ print_r($rows, true) }}</pre>
                        @if(isset($rows))
                        <button type="button" class="btn btn-dark btn-print">
                            <i class="fas fa-print"></i> {{ __('btn_print') }}
                        </button>
                        @endif
                    </div>
                    
                    <div class="card-header">
                        <p>{{ __('attendance_present') }}: <span class="text-primary">{{ __('P') }}</span> | {{ __('attendance_absent') }}: <span class="text-danger">{{ __('A') }}</span> | {{ __('attendance_leave') }}: <span class="text-success">{{ __('L') }}</span> | {{ __('attendance_holiday') }}: <span class="text-warning">{{ __('H') }}</span></p>
                    </div>
                    
                    @endif

                    @if(count($rows) < 1)
                    <div class="card-block">
                        <h5>{{ __('no_result_found') }}</h5>
                    </div>
                    @endif
                    @endif
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- End Content-->

@endsection