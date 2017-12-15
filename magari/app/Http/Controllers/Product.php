<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Product extends Controller
{
public function insertForm(){
    $categories=$this->getAllCategory();
    return view('layout.admin.add-product',['categories'=>$categories]);

}
    public function insertProduct(Request $request)
    {
   // $product_id = $request->input('product_id');
    $model=$request->input('model');
    $quantity=$request->input('quantity');
    $image=$request->file('image');
    $image=$this->uploadFile($image);
    $price=$request->input('price');
    $date_available=$request->input('date_available');
    $weight=$request->input('weight');
    $length=$request->input('length');
    $width=$request->input('width');
    $status=$request->input('status');
    $created_at=date('Y-m-d H:i:s');
    DB::insert('insert into product(model,quantity,image,price,date_available,weight,length,width,status,created_at) values(?,?,?,?,?,?,?,?,?,?)',["\"$model\"",$quantity,$image,$price,$date_available,$weight,$length,$width,$status,$created_at]);
}
public function viewAllProduct(){
$product=DB::select('select * from product');
$arr=$product[0];
return view('layout.admin.view-product',['products'=>$product,'arr'=>$arr]);
}
public function getLastProductId(){
   $product_id=DB::select('select MAX(product_id)from product');
    $product_id=get_object_vars($product_id[0]);
   return $product_id['MAX(product_id)']+1;
}
public function uploadFile($file){
    $path="uploads/products/".$this->getLastProductId()."/";
    $file->move($path,$file->getClientOriginalName());
return $path.$file->getClientOriginalName();
}
public function getAllCategory(){
    return DB::select('select category_description.category_id, category_description.name from category,category_description where category.category_id=category_description.category_id');
}
}