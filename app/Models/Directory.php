<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Directory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_fr',
        'document',
        'extension',
        'user_id',
    ];

    public function directoryHasUser(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    static public function selectDirectories(){
        $lg = "_en";
        if(session()->has('locale') &&  session()->get('locale') == 'fr'){
            $lg = "_fr";
        }

        $query = Directory::Select('id', DB::raw('(case when name'.$lg.' is null then name_en else name'.$lg.' end) as name'))
        ->OrderBy('name')
        ->get();
        return $query;
    }
}