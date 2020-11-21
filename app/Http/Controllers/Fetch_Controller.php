<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Fetch_Controller extends Controller
{
    //

     public function deleteSingleitem($id){
        $delete = DB::table('products')->where('id',$id)->delete();
       return Redirect()->back();
        
    }

    public function editSingleitem(Request $request, $id){
       	 	$data = array();
            $data['Product_Quantity']= $request->update_Quantity;
            $data['Price']= $request->update_price;
            $blogs = DB::table('products')->where('id', $id)->update($data);

            return Redirect()->back();
        
    }
}
