@extends('layouts.master')
@section('dashboard_content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Main</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Main</li>
            </ol>
            <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    {{-- <div class="form-group col-md-3 mt-3">
                        <h3>Background Image</h3>
                        <input class="mt-3" type="file" id="bg_img" name="bg_img">
                    </div> --}}
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title">
                                <h4>Title</h4>
                            </label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="mb-5">
                            <label for="title">
                                <h4>Sub Title</h4>
                            </label>
                            <input type="text" class="form-control" name="sub_title">
                        </div>
                        {{-- <div>
                            <h4>Upload Resume</h4>
                            <input type="file" id="resume" name="resume">
                        </div> --}}
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </main>
@endsection
