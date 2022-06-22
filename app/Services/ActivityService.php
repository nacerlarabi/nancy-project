<?php

namespace App\Services;

use App\Models\ActivityModel;
use App\Services\ContentService;
use Illuminate\Support\Facades\Session;
use Mockery\Exception;

Abstract class ActivityService
{
    private $lang;
    private $activity;
    private $activityCollect;

    protected $mnemonic;
    protected $dates = [];
    protected $title;
    protected $subTitle;
    protected $description;
    protected $taxes;
    protected $price;

    public function __construct($activity, $type)
    {
        $this->lang = Session::get('locale') ?? 'en';
        //$this->type = $type;
        $this->activity = $activity;
    }

    public function load () {
        $this->loadFromDB();

        throw_if(
            empty($this->activityCollect),
            \Exception::class,
            sprintf('ActivityServices | Empty Activity :: %s', $this->activity)
        );
        
        $translationDic = $this->getTranslations();

        $this->dates        = json_decode($this->activityCollect['dates']);
        $this->mnemonic     = $this->activityCollect['mnemonic'];
        $this->title        = $this->getTranslation($this->activityCollect['title_key']);
        $this->subTitle     = $this->getTranslation($this->activityCollect['subTitle_key']);
        $this->description  = $this->getTranslation($this->activityCollect['description_key']);
        $this->price        = $this->getPrice($this->activityCollect['price']);
        $this->taxes        = $this->getTaxesRate($this->activityCollect['taxes']);

        return $this;
    }

    private function getTranslation ($value) {
       return ContentService::getByMnemonic('activities', $value) ?? $value;
    }

    private function getTranslations () {
       return ContentService::getByMnemonics('activities', $this->activityCollect->toArray());
    }

    private function getPrice ($price) {

        return round($price/100, 2);
    }

    private function getTaxesRate ($taxe) {

        return round($taxe*100, 2);
    }

    private function loadFromDB () {
        return $this->activityCollect = ActivityModel::select('title_key', 'mnemonic', 'lang', 'subTitle_key', 'description_key', 'dates', 'price', 'taxes')
            ->where('mnemonic', $this->activity)
            ->whereRaw('FIND_IN_SET("'.$this->lang.'", lang)')
            ->where('is_active', 1)
            ->first();
    }
}
