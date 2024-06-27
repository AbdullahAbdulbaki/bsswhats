<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';

    protected $fillable = [
        'title',
        'category_id',
        'short_description',
        'long_description',
        'img',
        'lang'
    ];

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }

    public function language()
    {
        return $this->belongsTo(Languages::class, 'lang');
    }
}
