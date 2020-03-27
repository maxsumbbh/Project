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
        $comments=Comment::where('approve','1')->get();
        $comments = Comment::orderBy('updated_at','desc')->paginate(4);
        $header = Header::all();
        return view('pages.comment',[
            'headers' => $header,
            'comments' => $comments,
        ]);
    }
    public function store(Request $request)
    {
        $header = Header::all();
        $comment= new Comment();
        $comment->comment=$request->comment;
        $comment->save();
        $comment = Comment::orderBy('updated_at','desc')->limit(4)->get();
        return redirect('/comment')->with('success', 'แสดงความคิดเห็นสำเร็จ');    
    }
    public function approval(Request $request)
    {
        
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
