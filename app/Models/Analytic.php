<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analytic extends Model
{
    // allowing these parameters to be updated
    protected $fillable = ['post_id', 'view_count'];
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
