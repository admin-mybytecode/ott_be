<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TempleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return view('admin.temple.show');
    }
    
    public function create(){
        return view('admin.temple.create');
    }
    
   public function store(){
       dd($request);
   }

}