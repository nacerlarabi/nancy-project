<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentCheck extends Model
{
    use HasFactory;

    protected $table="payment_check";

    public function payment(){

        return $this->morphOne(Payment::class,'payable');

    }

}
