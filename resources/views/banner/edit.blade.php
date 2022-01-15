@extends('layouts.master')
@section('dashboard_content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Main</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Main</li>
            </ol>
            <h1>Edit Banner:</h1>
            <form action="{{route('banner.update', $banner_data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-3 mt-3">
                        <h3>Previous Background Image</h3>
                        <img width="35%" src="{{asset('uploads/banner_bg') . '/' . $banner_data->bg_img}}" alt="">
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <h3>Choose new Image</h3>
                        <input class="mt-3" type="file" id="bg_img" name="bg_img">
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title">
                                <h4>Title</h4>
                            </label>
                            <input type="text" class="form-control" name="title" value="{{$banner_data->title}}">
                        </div>
                        <div class="mb-5">
                            <label for="title">
                                <h4>Sub Title</h4>
                            </label>
                            <input type="text" class="form-control" name="sub_title" value="{{$banner_data->sub_title}}">
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
