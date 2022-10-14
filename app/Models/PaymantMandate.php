<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymantMandate extends Model
{
    use HasFactory;

    protected $table = "payment_mandate";

    public function payment(){

        return $this->morphOne(Payment::class,'payable');

    }


}
