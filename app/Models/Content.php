<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $table = 'contents';
    public $timestamps = false;

    public function store(){

        return $this->belongsTo(Store::class);

    }

    public function pictures(){

        return $this->belongsToMany(Picture::class,'pictures_contents');

    }

}
