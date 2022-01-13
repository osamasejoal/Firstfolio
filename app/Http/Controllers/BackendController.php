<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;

class BackendController extends Controller
{
    
    public function index()
    {
        
    }
    
    public function create()
    {
        return view('banner.add');
    }

    public function store(Request $request)
    {
        return "asdf";
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
