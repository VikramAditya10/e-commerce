<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class FileUpload extends Controller
{
    public function uploadFile(Request $request)
    {
        //if (Input::hasFile('')) {
        $file=$request->file('filename');
        //    $file = Input::file('file');
            $file->move('uploads/',$file->getClientOriginalName());
echo "<img src='uploads/".$file->getClientOriginalName()."'>";
        }
    }
