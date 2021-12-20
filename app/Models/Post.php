<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['category', 'author']; 

    public function scopeFilter($query, array $filters)// Post::newQuery()->filter()
    {

        if(isset($filters['search'])){

        $query->where('title', 'like', '%'. request('search'). '%')
        ->orWhere('body', 'like', '%'. request('search'). '%');
        }
    }


    public function Category(){

        return $this->belongsTo(Category::class);
    }


    public function author(){

        return $this->belongsTo(User::class,'user_id');
    }
}
