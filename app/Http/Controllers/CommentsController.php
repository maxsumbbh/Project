<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Http\Requests\CommentRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;
use App\Header;


class CommentsController extends Controller
{

 
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
       
        $comment= new Comment();
        $comment->comment=$request->comment;
        $comment->save();
        $comment = Comment::orderBy('updated_at','desc')->limit(6)->get();

        return redirect('/comment')->with('success', 'เพิ่มข้อมูลเกี่ยวกับเราสำเร็จ');
        
    }

    public function approval(Request $request)
    {
       
        $comment= Comment::find($request->commentId);
        $approveVal=$request->approve;
        if($approveVal=='on'){
            $approveVal=1;
        }else{
            $approveVal=0;
        }

        $comment->approve=$approveVal;
        $comment->save();

        return back();
    }



}
