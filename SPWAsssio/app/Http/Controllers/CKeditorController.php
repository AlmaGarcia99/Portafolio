<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CKeditorController extends Controller
{
    public function uploadImage(Request $request) {
         if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFOFILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.''.time().'.'.$extension;

            $request->file('upload')->move(public_path('ImgTips'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('ImgTips/'.$fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
