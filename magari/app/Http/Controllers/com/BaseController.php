<?php

namespace App\Http\Controllers\com;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class BaseController extends Controller
{
    public static function getAllCategory(){
    return DB::select('select category_description.category_id, category_description.name from category,category_description where category.category_id=category_description.category_id');
    }
}
