<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchDataController extends Controller
{
    //

   public function index()
    {
        return view('search');
    }

    public function result(Request  $request)
    {
        $result=SearchData::where('name', 'LIKE', "%{$request->input('query')}%")->get();
        return response()->json($result);
    }
}
