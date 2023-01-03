<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'title1',
        'para1',
        'title2',
        'para2',
        'para3',
        'image1',
        'image2',
    ];

    public function aboutFaq()
    {
        return $this->hasMany(AboutFaq::class);
    }
}