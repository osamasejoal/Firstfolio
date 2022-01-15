<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner_data = Banner::all();
        return view('banner.view', compact('banner_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banner.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = Image::make($request->bg_img);
        $img_name = auth()->id() . auth()->user()->name . Str::random('5') . "." .
            $request->bg_img->getClientOriginalExtension();
        $img->save(base_path('public/uploads/banner_bg/' . $img_name));

        Banner::insert([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'bg_img' => $img_name,
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner_data = Banner::find($id);
        return view('banner.edit', compact('banner_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('bg_img')) {
            unlink(base_path('public/uploads/banner_bg/' . Banner::find($id)->bg_img));
            $img = Image::make($request->bg_img);
            $img_name = auth()->id() . auth()->user()->name . Str::random('5') . "." .
                $request->bg_img->getClientOriginalExtension();
            $img->save(base_path('public/uploads/banner_bg/' . $img_name));

            Banner::find($id)->update([
                'bg_img' => $img_name,
            ]);
        }
        
        Banner::find($id)->update([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        unlink(base_path('public/uploads/banner_bg/' . Banner::find($id)->bg_img));
        Banner::find($id)->delete();
        return back();
    }
}
