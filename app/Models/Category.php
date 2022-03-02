<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;
    public $table = 'category';
    protected $guarded = ['id'];

    // protected $with = ['posts'];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
