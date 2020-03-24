<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;
use App\Header;
use App\Comment;

class ShowcommentController extends Controller
{
    public function index()
    {
        $comment = Comment::paginate(9);
        $header = Header::all();
        return view('pages.comment',[
            'comments' => $comment,
            'headers' => $header,
        ]);
    }
    public function store(Request $request)
    {
        $header = Header::all();
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

        return view('admin.comment.index');
    }
}
