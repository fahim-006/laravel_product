<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class TableditController extends Controller
{
    //
    function index()
    {
    	$data = DB::table('products')->get();
    	return view('table_edit', compact('data'));
    }

    function action(Request $request)
    {
    	if($request->ajax())
    	{
    		if($request->action == 'edit')
    		{
    			$data = array(
    				'Product_Quantity'	=>	$request->Product_Quantity,
    				'Price'		=>	$request->Price,
    			);
    			DB::table('products')
    				->where('Product_Code', $request->Product_Code)
    				->update($data);
    				 
    		}
    		if($request->action == 'delete')
    		{
    			DB::table('products')
    				->where('Product_Code', $request->Product_Code)
    				->delete();
    				

    		}
    		return response()->json($request);
    	}
    }
}
