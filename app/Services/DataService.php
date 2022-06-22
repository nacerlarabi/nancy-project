<?php

namespace App\Services;

use App\Models\DataModel;
use Illuminate\Support\Facades\Session;

class DataService
{
    public function __constuct()
    {
        $this->lang = Session::get('locale') ?? 'en';
    }

    private function init () {

    }

    public function getSeasonDateStart () {

    }

    private function loadFromDB () {
        return DataModel::select('mnemonic', 'name', 'value', 'type')
            ->where('lang', $this->lang)
            ->xhere('active', 1)
            ->get();
    }
}
