<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use PhpParser\Node\Expr\Array_;

class CategoryProductList extends Controller
{
public function getCategoryImage($category_id){
    $arr=null;
    $rows=DB::select('select category.image,category_description.name,
category_description.description
 from category 
INNER JOIN category_description  
ON  category.category_id=category_description.category_id
where category.category_id='.$category_id);
   foreach($rows as $row)
       foreach($row as $key=>$val)
$arr[$key]=$val;
           return $arr;
}
    public function trial(Request $request)
    {
        $category_id=$request->get('id');
        $row=$this->getCategoryImage($category_id);
      //echo view('layout.front.category_product_list.banner',['image'=>$filepath]);
      return view('layout.front.category_product_list.product_list',['image'=>$row['image'],'name'=>$row['name'],'description'=>$row['description']]);
    }
}
