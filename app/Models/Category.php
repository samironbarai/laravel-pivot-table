<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function myPosts()
    {
        return $this->belongsToMany(Post::class, 'custom_pivot', 'my_c_id', 'my_p_id');
    }
}
