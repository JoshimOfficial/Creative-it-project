<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class BlogComment extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function oneUser(){
        return $this->hasOne(User::class,'id','user_id');
    }


    // public function replay(){
    //     return $this->hasMany(BlogComment::class,'parent_id','id');
    // }


    public function replies(){
        return $this->hasMany(BlogComment::class,'parent_id','id');
    }
}
