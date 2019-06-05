<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        //return main article.index
        return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return creation page from articles.create
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store created data into db

       $validated = $request->validate([
           'title' => ['required',' max:255'],
           'body'=> ['required'],
           'category'=> ['required'],
           'image'=> ['mimes:jpg,jpeg,png']
       ]);

    //    retrieve image 
       $articleImage = $request->file('image');
       //create new file image name with original image name and time appended to the end of image
       $articleImageName = time().$articleImage->getClientOriginalName();

       //store image in application (filepath: /storage/app/articleImages)
       $articleImage->storeAs('articleImages',$articleImageName);


    //    Add user id to validate data
      $validated['user_id'] = auth()->id();
    $validated['image'] = $articleImageName;

    //   Add article to DB
       Article::create($validated );



    //    Redirect back home
       return redirect('/');

    }

    /**
     * Display the specified resource.
     *     * Display the specified resource.

     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)  

    {
        //
        return view('articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        // Only allow users who own the project to make any edits.
      
        // if($article->user_id !== (string)auth()->id()){
        //     abort(403);
        // }
            //OR

            //abort to 403 if auth user is not the owner
        abort_if($article->user_id !== (string)auth()->id(),403);


        //edit existing articel 
        return view("articles.edit",compact('article'));
        
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        
        //update existing article
        $article->update(request(['title','body','category','image']));

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //delete a given article 
        $article->delete();

        return redirect('/');
    }

    
}