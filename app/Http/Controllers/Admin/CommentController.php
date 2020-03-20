<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;
use App\Comment;

class CommentController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $comments = Comment::paginate(10);
        return view('admin.comment.index',[
            'comments'=> $comments
        ]);
    }
}
