<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table="payment";

    public function payable(){

        return $this->morphTo();

    }

    public function registration(){

        return $this->belongsTo(Registration::class,'registration_id');

    }



}
