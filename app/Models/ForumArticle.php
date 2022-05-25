<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class ForumArticle extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'body_en',
        'title_fr',
        'body_fr',
        'categories_id',
        'user_id',
        'created_at',
    ];

    public function forumHasUser(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function forumHasCategorie(){
        return $this->hasOne('App\Models\Categorie', 'id', 'categories_id');
    }

    static public function selectForumArticle($id = null){
        $lg = "_en";
        if(session()->has('locale') &&  session()->get('locale') == 'fr'){
            $lg = "_fr";
        }

        $query = ForumArticle::Select('id', 'categories_id', 'user_id', 'created_at', DB::raw('(case when title'.$lg.' is null then title_en else title'.$lg.' end) as title, (case when body'.$lg.' is null then body_en else body'.$lg.' end) as body'))
        ->where('id', $id)
        ->OrderBy('title')
        ->get();
        return $query[0];
    }

    static public function selectForumArticles(){
        $lg = "_en";
        if(session()->has('locale') &&  session()->get('locale') == 'fr'){
            $lg = "_fr";
        }

        $query = ForumArticle::Select('id', DB::raw('(case when title'.$lg.' is null then title_en else title'.$lg.' end) as title'))
        ->OrderBy('title')
        ->get();
        return $query;
    }
}