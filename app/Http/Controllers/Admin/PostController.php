<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.create_post');
    }
    public function addCreatePost(Request $request)
    {
        $id = $request->user()->id;
        $data=array();
        $data['user_id']=$id;
        $data['role_id']=1;
        $data['post_title']=$request->post_title;
        $data['post_details']=$request->post_details;
        $post_image=$request->post_image;

        if($post_image){
            $post_image_name= hexdec(uniqid()).'.'.$post_image->getClientOriginalExtension();
                Image::make($post_image)->resize(230,300)->save('public/image/'.$post_image_name);
                $data['post_image']='public/image/'.$post_image_name;
                $posts=DB::table('posts')
                        ->insert($data);
                    $notification=array(
                    'messege'=>'Successfully Post Upload..',
                    'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);   
        }
    } 
    public function allPosts()
    {
        $posts=DB::table('posts')->get();
        // return response()->json($posts);
        return view('admin.all_posts',compact('posts'));
    }
    public function DeletePosts($id)
    {
        $posts=DB::table('posts')->where('id',$id)->first();
        $post_image=$posts->post_image;
        unlink($post_image);
        DB::table('posts')->where('id',$id)->delete();
        $notification=array(
                     'messege'=>'Successfully Posts Deleted ',
                     'alert-type'=>'warning'
                    );
         return Redirect()->back()->with($notification);
    }
}
