@extends('layouts.master')

@section('dashboard_content')
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Serial</th>
                            <th>Title</th>
                            <th>Sub_title</th>
                            <th>Backgroud Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banner_data as $banner_datas)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $banner_datas->title }}</td>
                                <td>{{ $banner_datas->sub_title }}</td>
                                <td><img width="25%" src="{{ asset('uploads/banner_bg') . '/' . $banner_datas->bg_img }}"
                                        alt=""></td>
                                <td style="display: flex">
                                    <div class="m-3"><a href="{{ route('banner.edit', $banner_datas->id) }}"
                                            class="btn btn-info">Edit</a></div>
                                    {{-- <div class="m-3"><a href="{{ route('banner.destroy', $banner_datas->id) }}"
                                            class="btn btn-danger">Delete</a></div> --}}

                                    <form action="{{ route('banner.destroy', $banner_datas->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input class="btn btn-danger" type="submit" value="Delete" />
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
