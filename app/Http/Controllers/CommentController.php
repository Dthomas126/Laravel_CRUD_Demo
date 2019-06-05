<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Article;

class CommentController extends Controller
{
    

  public function __construct()
  {
      $this->middleware('auth');
  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Article $article)
    {
        //store user comment
        Comment::create([
            'article_id'=> $article->id,
            'user_id' => auth()->id(),
            'comment' => request('comment')
        ]);

        return back();
       
    }

  
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
