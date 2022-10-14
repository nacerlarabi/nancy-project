<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingStatus extends Model
{
    use HasFactory;

    public function status(){

        return $this->belongsTo(Status::class);

    }


    public function address(){

        return $this->belongsTo(Address::class);

    }

    public function session(){

        return $this->belongsTo(Session::class);

    }

    public function package(){

        return $this->belongsTo(Package::class);
    }


}
