<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    // ----------- [ post listing ] -------------
    public function index()
    {
        return view('posts.index');
    }

// ------------- [ store post ] -----------------
    public function store(Request $request)
    {
        $request->validate([
            'title'         =>      'required',
            'description'   =>      'required',
            'category'      =>      'required',
            'duration'      =>      'required',
            'createdat'     =>      'required'
        ]);

       $post            =           Post::create($request->all());

       if(!is_null($post)) {
            return response()->json(["status" => "success", "message" => "Success! Task created.", "data" => $post]);
       }

       else {
           return response()->json(["status" => "failed", "message" => "Alert! Task not created"]);
       }
    }

// ---------------- [ Update post ] -------------
    public function update(Request $request)
    {
        $post_id        =       $request->id;
        $post           =       Post::where("id", $post_id)->update($request->all());

        if($post == 1) {
            return response()->json(["status" => "success", "message" => "Success! Task updated"]);
        }

        else {
            return response()->json(["status" => "failed", "message" => "Alert! Task not updated"]);
        
         }
    }

// -------------- [ Delete post ] ---------------
    public function destroy($post_id) {
        $post       =       Post::where("id", $post_id)->delete();
        if($post == 1) {
            return response()->json(["status" => "success", "message" => "Success! Task deleted"]);
        }

        else {
            return response()->json(["status" => "failed", "message" => "Alert! Task not deleted"]);
        }
    
    }

}
