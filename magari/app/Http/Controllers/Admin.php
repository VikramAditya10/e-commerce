<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Admin extends Controller
{
public function index(){
    $admin=DB::select('select * from admin_user');
return view('admin_user',['admin'=>$admin]);
}
    public function insertform(){
        return view('create-admin');
    }

    public function insert(Request $request){
        $product_id = $request->input('product_id');
        $model=$request->input('model');
        $quantity=$request->input('quantity');
        $image=$request->input('image');
        $price=$request->input('price');
        $date_available=$request->input('date_available');
        $weight=$request->input('weight');
        $length=$request->input('length');
        $width=$request->input('width');
        $status=$request->input('status');

        DB::insert('insert into admin_user (product_id,model,quantity,image,price,date_available,weight,length,width,status]) values(?,?)',[$product_id,$model,$quantity,$image,$price,$date_available,$weight,$length,$width,$status]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }

}
