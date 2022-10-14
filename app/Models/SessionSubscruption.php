<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SessionSubscruption extends Model
{
    use HasFactory;

    protected $table = "sessions_subscruption";

    public function isActiveAttribute(){

        return ($this->start_date < Carbon::now() and $this->end_date > Carbon::now()) or ($this->start_registration < Carbon::now() and $this->end_registration > Carbon::now());

    }

    function scopeWhereIsActive($query) {

        $query->where(function($query){

            $query->where('start_date','<',Carbon::now())->whereDate('end_date','>',Carbon::now());

        })->orWhere(function($query){

            $query->where('start_registration','<',Carbon::now())->whereDate('end_registration','>',Carbon::now());

        });

    }

}
