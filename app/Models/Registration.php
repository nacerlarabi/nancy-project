<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $table = "registrations";

    public $timestamps = true;

    public function payment(){

        return $this->hasOne(Payment::class,'registration_id');

    }



}
