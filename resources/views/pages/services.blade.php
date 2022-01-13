@extends('layouts.master')
@section('dashboard_content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Services</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Services</li>
            </ol>
        </div>
    </main>
@endsection