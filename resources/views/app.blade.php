@extends('layouts.adminlte')

@section('app')
<app>

</app>
@stop

@section('top-navbar')
    {{-- Top Navbar --}}
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i class="fas fa-th-large"></i></a>
        </li>
    </ul>
    </nav>
@stop

@section('main-sidebar')
    {{-- Left Main Sidebar --}}

@stop

@section('content')
    {{-- Content Wrapper --}}
    <div class="content-wrapper {{ config('adminlte.classes_content_wrapper') ?? '' }}">

        {{-- Content Header --}}
        <div class="content-header">
            <div class="{{ config('adminlte.classes_content_header') ?: $def_container_class ?? '' }}">

            </div>
        </div>

        {{-- Main Content --}}
        <div class="content">
            <div class="{{ config('adminlte.classes_content') ?: $def_container_class ?? '' }}">
                <table class="table table-bordered" id="users-table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>
@stop


@push('js')
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    @if(config('app.env') == 'local')
        <script src="http://localhost:35729/livereload.js"></script>
    @endif
@endpush
