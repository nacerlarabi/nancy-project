<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Program;

class Package extends Model
{
    use HasFactory;


    public function programs(){

        return $this->belongsToMany(Program::class,'package_program');

    }
}
