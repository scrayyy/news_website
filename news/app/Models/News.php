<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = "news";
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;

    function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
