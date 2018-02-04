<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;
use Illuminate\Support\Facades\Storage;
class Category extends Controller
{
    /**
     * @return mixed
     */
    public function getAllCategory(){
        return DB::select('select
category_description.category_id, 
p.parent_name,
category_description.name, 
category_description.description, 
category_description.meta_title, 
category_description.meta_description,
category_description.meta_keyword,
category.sort_order,
category.status,
category.image,
category.parent_id
FROM
(
SELECT
category.category_id,category_description.name AS parent_name
from 
category INNER JOIN
category_description ON 
category.parent_id=category_description.category_id) as p
INNER JOIN category ON 
category.category_id=p.category_id
INNER JOIN category_description ON
category.category_id=category_description.category_id
ORDER BY category.sort_order');
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
     echo "<h2>".var_dump($categories)."</h2>";
     /*foreach($categories as $category)
     {

         echo "<h2>".$category->name."</h2><br/>";
     }*/
    }
    public function viewAllCategories()
    {

return view('layout.admin.category.edit-category-modal',['categories'=>$this->getAllCategory()]);

    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function updateCategory(Request $request){
        $category_id=$request->get('category_id');
$name=$request->get('name');
$parent_id=$request->get('parent_id');
$image=$request->file('image');
$status=$this->isSetStatus($request->get('status'));
$description=$request->get('description');
$meta_description=$request->get('meta_description');
$meta_title=$request->get('meta_title');
$meta_keyword=$request->get('meta_keyword');
$sort_order=$request->get('sort_order');
$updated_at=date('Y-m-d H:i:s');
$category_query_param=$this->getCategoryUpdateQuery($category_id, $parent_id, $image, $status, $sort_order, $updated_at);
$category_desc_query="UPDATE category_description SET name = ?, description= ?,meta_title=?,meta_description=?,meta_keyword=? WHERE  category_id = ?";
$category_desc_parameter=[$name,$description,$meta_title,$meta_description,$meta_keyword,$category_id];
try {
    DB::transaction( function () use ($category_query_param, $category_desc_query, $category_desc_parameter, &$message) {


        DB::update( $category_desc_query, $category_desc_parameter );
        DB::update( $category_query_param['query'], $category_query_param['param'] );
        $message = "Update completed";
    } );
}
catch(Exception $e){
$message="Failed! ".$e->getMessage();
return Redirect::back()->withErrors(['message', '$message']);
}
return redirect()->back()->withSuccess( $message);
}

    /**
     * @param $status
     * @return int
     */
    public function isSetStatus($status){
if ($status==null)
    return 0;
return 1;

}

    /**
     * @param $category_id
     * @param $parent_id
     * @param $image
     * @param $status
     * @param $sort_order
     * @param $updated_at
     */
    public function getCategoryUpdateQuery($category_id, $parent_id, $image, $status, $sort_order, $updated_at){
    if($image!=null)
    {

        $image=$this->uploadFile($image);
        $category_query="UPDATE category SET image = ?, parent_id= ?,top=1,columns=1,sort_order=?,status=?,updated_at=? WHERE  category_id = ?";
        $category_parameter=[$image,$parent_id,$sort_order,$status,$updated_at,$category_id];
        $file_addr=DB::select('select image from category where category_id=?',[$category_id]);
        $file_addr=$file_addr[0]->image;
        Storage::delete($file_addr);

    }
    else{
        $category_query="UPDATE category SET  parent_id= ?,top=1,columns=1,sort_order=?,status=?,updated_at=? WHERE  category_id = ?";
        $category_parameter=[$parent_id,$sort_order,$status,$updated_at,$category_id];
    }
    $result=['query'=>$category_query,'param'=>$category_parameter];
return $result;
}
public function deleteCategory(Request $request){
$id=$request->get('id');
DB::transaction( /**
 *
 */
function()use($id){
DB::delete('delete from category where category_id=?',[$id]);
DB::delete('delete from category_description where category_id=?',[$id]);

});
    return redirect()->back()->withSuccess('Deleted');
}
}
