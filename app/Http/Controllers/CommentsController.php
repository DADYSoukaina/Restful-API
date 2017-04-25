<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class CommentsController extends Controller
{
    public function index(){
        $comments = Comment::allFor(Input::get('type'), Input::get('id'));
        //$comments=Comment::where(['commentable_id'=>Input::get('id'),'commentable_type'=>Input::get('type')])->get();
        return Response::json($comments,200,[],JSON_NUMERIC_CHECK);
    }

    public function store(){
        dd(Input::get());
      $comment = Comment::create([
          'commentable_id'=>Input::get('commentable_id'),
          'commentable_type'=>Input::get('commentable_type'),
          'email'=>Input::get('email'),
          'username'=>Input::get('username'),
          'reply'=>Input::get('reply',0),
          'ip'=>\Illuminate\Support\Facades\Request::ip(),





      ]);
      return Response::json($comment, 200, [], JSON_NUMERIC_CHECK);
    }
}

