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
            @if(isset($rows))
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>All Courses</h5>
                        </div>
                    </div>
                </div>
                @foreach($rows as $row)
                    <div class="col-sm-6 col-md-6 col-xl-3">
                        <div class="card theme-bg bitcoin-wallet">
                            <div class="card-block">
                                <h5 class="text-white mb-2">{{ $row->program->title ?? '' }}</h5>
                                <h2 class="text-white mb-2 f-w-300">{{ $row->subject->code ?? '' }}</h2>
                                <h5 class="text-white mb-2">{{ $row->session->title ?? '' }}</h5>
                                <h5 class="text-white mb-2">{{ $row->semester->title ?? '' }}</h5>
                                <h5 class="text-white mb-2">{{ $row->section->title ?? '' }}</h5>
                               
                                <a href="course-details?id={{$row->id}}"><i class="fas fa-eye f-70 text-white"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

                

                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- End Content-->

@endsection