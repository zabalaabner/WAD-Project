<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;
use App\Http\Requests;
use Carbon\Carbon;
use Request;
class Article extends Model
{
    protected $fillable = [
    'id',
    'title',
    'excerpt',
    'body',
    'tag',
    'published_at',
    ];
    protected $date =['published_at'];

    public function scopePublished($query){
    	$query->where('published_at', '<=' , Carbon::now());

    }

    public function scopeUnpublished($query){
        $query->where('published_at', '>' , Carbon::now());

    }

    public function scopeTag($query){
        $query->where('tag', '=' , $query);

    }


    public function setPublishedAtAttribute($date){
    	$this->attribute['published_at']= Carbon::createfromformat('Y-m-d', $date);
    }	

    
    public function user(){
        return $this->belongsTo('App\User');    
    }
     
    public function tag(){
        return $this->belongsToMany('App\Tag');    
    }

}
