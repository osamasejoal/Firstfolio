@extends('layouts.master')

@section('dashboard_content')
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Sub_title</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banner_data as $banner_datas)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $banner_datas->title }}</td>
                                <td>{{ $banner_datas->sub_title }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
