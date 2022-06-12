<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'image',
        'vedio_url',
        'category_id',
    ];
    public function cat(){
        return $this->belongsTo('App\Models\Gallery_category', 'category_id');
    }

}
