<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Category extends Controller
{
    public function getAllCategory(){
        return DB::select('select category_description.category_id, category_description.name from category,category_description where category.category_id=category_description.category_id');

    }
    public function insertForm(){
        $categories=$this->getAllCategory();
        return view('layout.admin.add-category',['categories'=>$categories]);
    }
    public function insertCategory(Request $request){

        $image=$request->file('image');
        $image=$this->uploadFile($image);
        $parent_id=$request->input('parent_id');
        //$date_available=$request->input('date_available');
        $sort_order=$request->input('sort_order');
        $status=$request->input('status');
        $width=$request->input('width');
        $status=$request->input('status');
        $created_at=date('Y-m-d H:i:s');
        $name=$request->input('name');
        $description=$request->input('description');
        $meta_title=$request->input('meta_title');
        $meta_description=$request->input('meta_description');
        $meta_keyword=$request->input('meta_keyword');
        $top=0;
        $language_id=1;
        if($parent_id!=0)
        $top=1;
        $column=0;
DB::insert('insert into category(image,parent_id,top,columns,sort_order,status,created_at) values(?,?,?,?,?,?,?)',[$image,$parent_id,$top,$column,$sort_order,$status,$created_at]);
$category_id=DB::select('select MAX(category_id) from category');
$category_id=get_object_vars($category_id[0]);
$category_id=$category_id['MAX(category_id)'];
DB::insert('insert into category_description(category_id,language_id,name,description,meta_title,meta_description,meta_keyword)values(?,?,?,?,?,?,?)',[$category_id,$language_id,$name,$description,$meta_title,$meta_description,$meta_keyword]);
    }
    public function getLastCategoryId(){
        $category_id=DB::select('select MAX(category_id)from category');
        $category_id=get_object_vars($category_id[0]);
        return $category_id['MAX(category_id)']+1;
    }
    public function uploadFile($file){
        $path="uploads/categories".$this->getLastCategoryId()."/";
        $file->move($path,$file->getClientOriginalName());
        return $path.$file->getClientOriginalName();
    }
public function trial(){
     $categories=$this->getAllCategory();
     foreach($categories as $category)
     {
         echo "<h2>".$category['name']."</h2>";
     }


}
}
