<?php

namespace App\Http\Controllers;

use App\Models\ForumArticle;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Auth;
use PDF;

class ForumArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = ForumArticle::selectForumArticles();
        return view('forum.index', ['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::selectCategorie();
        return view('forum.create', ['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_en' => 'required|min:2|max:50',
            'body_en' => 'required|min:2|max:191',
            'title_fr' => 'required|min:2|max:50',
            'body_fr' => 'required|min:2|max:191',
        ]);
        $newArticle = new ForumArticle;
        $newArticle->fill($request->all());
        $newArticle->user_id = Auth::user()->id;
        $newArticle->save();
        return redirect('forum/'.$newArticle->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ForumArticle  $forumArticle
     * @return \Illuminate\Http\Response
     */
    public function show($forumArticle)
    {
        $article = ForumArticle::selectForumArticle($forumArticle);
        return  view ('forum.show', ['article'=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ForumArticle  $forumArticle
     * @return \Illuminate\Http\Response
     */
    public function edit($forumArticle)
    {
        $article = ForumArticle::selectForumArticle($forumArticle);
        $categories = Categorie::selectCategorie();
        return view('forum.edit', ['forum' => $article, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ForumArticle  $forumArticle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ForumArticle $forumArticle)
    {
        $request->validate([
            'title_en' => 'required|min:2|max:50',
            'body_en' => 'required|min:2|max:191',
            'title_fr' => 'required|min:2|max:50',
            'body_fr' => 'required|min:2|max:191',
        ]);    
        $forumArticle->update($request->all());
        $forumArticle->user_id = Auth::user()->id;
        $forumArticle->save();
        return redirect(route('forum.show', $forumArticle->id));
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ForumArticle  $forumArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForumArticle $forumArticle)
    {
        $forumArticle->delete();
        return redirect(route('forum'));
    }

    public function showPdf(ForumArticle $forumArticle)
    {
        $pdf = PDF::loadView('forum.pdf-file', ['article' => $forumArticle]);
        return $pdf->download('forum-article.pdf');
        //return $pdf->stream('forum-article.pdf');
    }
}