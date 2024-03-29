<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post as PostEloquent;

class PostType extends Model
{
    protected $table = 'post_types';

    protected $fillable = ['name'];

    public $timestamps = false;

    public function posts(){
        return $this->hasMany(PostEloquent::class, 'type');
    }
}
