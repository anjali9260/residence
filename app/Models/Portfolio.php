<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'featured',
        'offer',
        'type',
        'image',
        'address',
        'title',
        'rate',
        'paragraph',
        'bedroom',
        'bathroom',
        'area',
        'slug'
    ];



    public function user(){
        return $this->belongsTo(User::class , 'user_id', 'id');

    }

}
