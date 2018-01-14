<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
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
    $quantity=0;//$request->input('quantity');
    $image=$request->file('image');
    $image=$this->uploadFile($image);
    $price=$request->input('price');
    $date_available=$request->input('date_available');
    $weight=$request->input('weight');
    $length=$request->input('length');
    $width=$request->input('width');
    $status=$request->input('status');
    $created_at=date('Y-m-d H:i:s');
 $category=$request->input('parent_id');
 $color=$request->input('color');
 $style=$request->input('style');
$tech_attrib_key=$request->input('$tech_attrib_key');
$tech_attrib_value=$request->input('$tech_attrib_value');
$tag=$request->input('tag');
$meta_description=$request->input('meta_description');
$name=$request->input('name');
$description=$request->input('description');
    DB::insert('insert into product(model,quantity,image,price,date_available,weight,length,width,status,created_at) values(?,?,?,?,?,?,?,?,?,?)',["\"$model\"",$quantity,$image,$price,$date_available,$weight,$length,$width,$status,$created_at]);
       $product_id=$this->getLastProductId();
        $images=Input::get('addImage');
        $sort_order=1;
        $updated_at=NULL;
        //upoad additional image
        $images=$request->file('addImage');
        foreach($images as $key => $val)
        {
$image=$this->uploadFile($val);
  DB::insert('insert into product_image_table(product_id,image,sort_order,created_at,updated_at)values(?,?,?,?,?)',[$product_id,$image,$sort_order,$created_at,$updated_at]);
        }
$sizes=$request->get('size');
        foreach($sizes as $size) {
            $qty=$request->get(str_replace(' ', '_', $size));

            DB::insert('insert into available_size(product_id,size,quantity,created_at,updated_at)values(?,?,?,?,?)', [$product_id, $size, $qty, $created_at, $updated_at]);
        }
        DB::insert('insert into product_to_category(product_id,category_id)values(?,?)',[$product_id,$category]);
DB::insert('insert into product_color_style(product_id,color,style)values(?,?,?)',[$product_id,$color,$style]);
        $length=count($tech_attrib_key);

        $att=null;
        for($i=0;$i<$length;$i++){
            $att[$tech_attrib_key[$i]]=$tech_attrib_value[$i];
        }
        $att=json_encode($att);
        DB::insert('insert into product_description(product_id, name, description, tag, meta_description, technical_specification) values(?,?,?,?,?,?)', [$product_id,$name,$description,$tag,$meta_description,$att]);

        }


public function viewAllProduct(){
$product=DB::select('select * from product');
$arr=$product[0];
return view('layout.admin.view-product',['products'=>$product,'arr'=>$arr]);
}


public function getLastProductId(){
   $product_id=DB::select('select MAX(product_id)from product');
    $product_id=get_object_vars($product_id[0]);
   return $product_id['MAX(product_id)'];
}

public function uploadFile($file){
    $path="uploads/products/".($this->getLastProductId()+1)."/";
    $file->move($path,$file->getClientOriginalName());
return $path.$file->getClientOriginalName();
}


public function getAllCategory(){
    return DB::select('select category_description.category_id, category_description.name from category,category_description where category.category_id=category_description.category_id');
}


public static function trial(){
$str="<h2>";
 $arr=DB::select('select * from category');
foreach($arr as $a)
    foreach($a as $temp)
        $str=$str." ".$temp."</h2><br>";

 echo $str;
}
}