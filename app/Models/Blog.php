<?php

namespace App\Models;

use App\Http\Controllers\IndexController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'blog_date',
        'title',
        'text',
        'image',
    ];


    public function getSlugAttribute(): string
    {

            return urlencode(strip_tags($this->title));


    }




    public function getUrlAttribute(): string
    {
        return action([IndexController::class,'singleBlog'], [$this->id, $this->slug]);
    }
}
