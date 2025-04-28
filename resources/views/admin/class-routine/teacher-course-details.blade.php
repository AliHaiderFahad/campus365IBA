@extends('admin.layouts.master')
@section('title', $title)
@section('content')
<!-- Start Content-->
<div class="main-body">
    <div class="page-wrapper">
        <!-- [ Main Content ] start -->
        <div class="row">
            
            @if(isset($details))
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>{{ $details->subject->code ?? '' }} - {{ $details->session->title ?? '' }} - {{ $details->semester->title ?? '' }} - {{ $details->section->title ?? '' }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 col-md-3 col-xl-3">
                    <div class="card theme-bg bitcoin-wallet">
                        <div class="card-block">
                            <h5 class="text-white mb-2">Assign Attendance</h5>
                            <!-- <h2 class="text-white mb-2 f-w-300">{{ $row->subject->code ?? '' }}</h2> -->
                            <a href="attendance?id={{$details->id}}"><i class="fas fa-eye f-70 text-white"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 col-md-3 col-xl-3">
                    <div class="card theme-bg bitcoin-wallet">
                        <div class="card-block">
                            <h5 class="text-white mb-2">Attendance Report</h5>
                            <!-- <h2 class="text-white mb-2 f-w-300">{{ $row->subject->code ?? '' }}</h2> -->
                            <a href="attendance-report?id={{$details->id}}"><i class="fas fa-eye f-70 text-white"></i></a>
                        </div>
                    </div>
                </div>
                
            @endif
            @if(isset($rows))
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Class Routine</h5>
                    </div>
                </div>
            </div>

            <div class="card-block">
                <!-- [ Data table ] start -->
                <div class="table-responsive">
                    <table class="table class-routine-table">
                        <thead>
                            <tr>
                                <th>{{ __('day_saturday') }}</th>
                                <th>{{ __('day_sunday') }}</th>
                                <th>{{ __('day_monday') }}</th>
                                <th>{{ __('day_tuesday') }}</th>
                                <th>{{ __('day_wednesday') }}</th>
                                <th>{{ __('day_thursday') }}</th>
                                <th>{{ __('day_friday') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $weekdays = array('1', '2', '3', '4', '5', '6', '7');
                            @endphp
                            <tr>
                                @foreach($weekdays as $weekday)
                                <td>
                                    @foreach($rows->where('day', $weekday) as $row)
                                    <div class="class-time">
                                    {{ $row->subject->code ?? '' }}<br>
                                    @if(isset($setting->time_format))
                                    {{ date($setting->time_format, strtotime($row->start_time)) }}
                                    @else
                                    {{ date("h:i A", strtotime($row->start_time)) }}
                                    @endif <br> @if(isset($setting->time_format))
                                    {{ date($setting->time_format, strtotime($row->end_time)) }}
                                    @else
                                    {{ date("h:i A", strtotime($row->end_time)) }}
                                    @endif<br>
                                    {{ __('field_room') }}: {{ $row->room->title ?? '' }}<br>
                                    {{ $row->teacher->staff_id }} - {{ $row->teacher->first_name ?? '' }}
                                    </div>
                                    @endforeach
                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- [ Data table ] end -->
            </div>
            @endif

                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- End Content-->

@endsection