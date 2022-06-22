<?php

namespace App\Services;


class ProgramService extends ActivityService
{
    private $type = "program";

    public function __construct ($programName)
    {
        parent::__construct($programName, $this->type);
    }

    public function get () {
        parent::load();

        return [
            'mnemonic' => $this->mnemonic,
            'title' => $this->title,
            'subTitle' => $this->subTitle,
            'description' => $this->description,
            'price' => $this->price,
            'taxes' => $this->taxes,
            'dates' => $this->dates,
        ];
    }
}
