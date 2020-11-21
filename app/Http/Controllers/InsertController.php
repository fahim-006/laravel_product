<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InsertController extends Controller
{
    //

    public function InsertProduct(Request $req1){
            $data1 = array();
            $data1['Product_Code']= $req1->Product_Code;
            $data1['Product_Name']= $req1->Product_Name;
            $data1['Product_Unit']= $req1->Unit;
            $data1['Product_Quantity']= $req1->Quantity;
            $data1['Price']= $req1->Price;
            $blogs = DB::table('products')->insert($data1);

            return Redirect()->back();
           
     }

     public function search(){
     	return view('search');
     }

     public function autocomplete(Request $request){
     	$datas =  Product::select("Product_Name") -> 
     			where("name","LIKE","%{$request->terms}%")
     			->get();
     		return response() -> json($datas);

     }
}
