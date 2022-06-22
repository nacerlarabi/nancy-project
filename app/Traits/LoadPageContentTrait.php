<?php
namespace App\Traits;

use App\Providers\ContentService;

trait LoadPageContentTrait
{
    public function loadContents ($page)
    {
        $contents =  json_decode(ContentService::load($page));
        $result = [];

        foreach ($contents as $content) {
            $result[$content->mnemonic] = $content->content;
        }

        $result['LANG'] = 'fr';

        return $result;
    }
}
