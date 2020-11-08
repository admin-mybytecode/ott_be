<?php

namespace App\Http\Controllers;

use App\Temple;
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
        $data =  Temple::all();
        return view('admin.temple.show', compact('data'));
    }
    
    public function create(){
        return view('admin.temple.create');
    }
    
   public  function store(Request $request){
    //    dd($request->all());
        $image = $request->file('image');
       $fileName = $request->name .'_'. time() . '.' . $image->getClientOriginalExtension();

       $temple = new Temple([
           'name' => $request->name, 
           'description' => $request->detail,
            'file' => $fileName, 
            'bank_account_number'=> $request->bank_number,
            'ifsc'=> $request->ifsc,
            'branch'=> $request->branch, 
            'address' => $request->address
       ]);
       $temple->save();

        
        $destinationPath = public_path('/temples');
        $image->move($destinationPath, $fileName);
        return back()->with('success','Image Upload successful');
   }
}