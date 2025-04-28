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
                   
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card">
                    @if(isset($rows))
                    @if(count($rows) > 0)
                    <div class="card-block">
                        
                        @if(isset($rows))
                        <button type="button" class="btn btn-dark btn-print">
                            <i class="fas fa-print"></i> {{ __('btn_print') }}
                        </button>
                        @endif
                    </div>
                    
                    <div class="card-header">
                        <p>{{ __('attendance_present') }}: <span class="text-primary">{{ __('P') }}</span> | {{ __('attendance_absent') }}: <span class="text-danger">{{ __('A') }}</span> | {{ __('attendance_leave') }}: <span class="text-success">{{ __('L') }}</span> | {{ __('attendance_holiday') }}: <span class="text-warning">{{ __('H') }}</span></p>
                    </div>
                    <div class="card-block">
                    @php
                        // Collect unique attendance dates
                        $attendance_dates = [];
                        if(isset($attendances)) {
                            foreach($attendances as $attendance) {
                                $attendance_dates[] = date("Y-m-d", strtotime($attendance->date));
                            }
                            $attendance_dates = array_unique($attendance_dates);
                            sort($attendance_dates); // ensure dates are in order
                        }
                    @endphp

                    <div class="table-responsive">
                        <table class="table table-attendance table-striped table-hover table-bordered printable">
                        <thead>
                            <tr>
                                <th>{{ __('field_student_id') }}</th>
                                <th>{{ __('field_name') }}</th>
                                @foreach($attendance_dates as $att_date)
                                    <th class="text-center">{{ date('d-m-y', strtotime($att_date)) }}</th>
                                @endforeach
                                <th>{{ __('P') }}</th>
                                <th>{{ __('A') }}</th>
                                <th>{{ __('L') }}</th>
                                <th>{{ __('H') }}</th>
                                <th>{{ __('%') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rows as $key => $row)
                            <tr>
                                <td>
                                    @isset($row->student->student_id)
                                    <a href="{{ route('admin.student.show', $row->student->id) }}">
                                        #{{ $row->student->student_id ?? '' }}
                                    </a>
                                    @endisset
                                </td>
                                <td>{{ $row->student->first_name ?? '' }} {{ $row->student->last_name ?? '' }}</td>
                                @php $total_present = 0;
                                    $total_absent = 0;
                                    $total_leave = 0;
                                    $total_holiday = 0;
                                @endphp
                                @foreach($attendance_dates as $att_date)
                                <td>
                                    @php
                                        $found = false;
                                    @endphp

                                    @if(isset($attendances))
                                   
                                        @foreach($attendances as $attendance)
                                            @if($attendance->studentEnroll->student_id == $row->student_id && date("Y-m-d", strtotime($attendance->date)) == $att_date)
                                                @php $found = true; @endphp

                                                @if($attendance->attendance == 1)
                                                    @php $total_present = $total_present + 1; @endphp
                                                    <div class="text-primary">{{ __('P') }}</div>
                                                @elseif($attendance->attendance == 2)
                                                    @php $total_absent = $total_absent + 1; @endphp
                                                    <div class="text-danger">{{ __('A') }}</div>
                                                @elseif($attendance->attendance == 3)
                                                    @php $total_leave = $total_leave + 1; @endphp
                                                    <div class="text-success">{{ __('L') }}</div>
                                                @elseif($attendance->attendance == 4)
                                                    @php $total_holiday = $total_holiday + 1; @endphp
                                                    <div class="text-warning">{{ __('H') }}</div>
                                                @endif
                                            @endif
                                        @endforeach

                                       
                                    @endif

                                    @if(!$found)
                                        {{-- Optionally show something like "-" if no record --}}
                                    @endif
                                </td>
                                
                                @endforeach

                                @php
                                    $total_working_days = $total_present + $total_absent + $total_leave;
                                    if($total_working_days == 0){
                                        $total_working_days = 1;
                                    }
                                @endphp

                                <td>{{ $total_present }}</td>
                                <td>{{ $total_absent }}</td>
                                <td>{{ $total_leave }}</td>
                                <td>{{ $total_holiday }}</td>
                                <td>{{ round((($total_present / $total_working_days) * 100), 2) }} %</td>

                                {{-- (keep total present, absent, leave, holiday logic same) --}}
                                {{-- (already correctly counting in your code) --}}
                            </tr>
                            @endforeach
                        </tbody>
                        <!-- [ Data table ] end -->

                    </table>
                    </div>
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