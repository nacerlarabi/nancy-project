<?php

namespace App\Services;

use App\Models\Testimony;
use Illuminate\Support\Facades\Session;
use Ramsey\Collection\Collection;

class TestimonyService
{

    private $testimonies = [];

    public function __construct()
    {
        $this->init();
    }

    public static function getAll () {
        $self = new self();
        return $self->testimonies;
    }

    private function init() {
        $this->load();
    }

    private function load () {
        $this->testimonies = Collect(
            Testimony::select('id', 'firstname', 'lastname', 'picture', 'deposit', 'occupation', 'country', 'promo')
                ->where('active', '1')
                ->get()
            )
            ->map(function($x) use (&$result) { return $result[$x['id']] = $x; })
            ->toArray();
    }
}
