<?php

namespace App\Services;

use App\Models\Content;
use App\Http\Requests\ContentRequest;
use Illuminate\Support\Facades\Session;

class ContentService {

    private $lang = "en";
    private $pages = [];
    private $mnemonic;

    public function __construct(array $pages, String $lang = null)
    {
        $this->pages = $pages;

        if (!$lang) {
            $lang = Session::get('locale') ?? 'en';
        }

        $this->lang = $lang;
    }

    public static function getAll(array $pages, String $lang = null): array
    {
        return (new self($pages, $lang))->getLoader();
    }

    public static function get(String $page, String $lang = null): array
    {
        return (new self([$page], $lang))->getLoader();
    }

    public static function getByMnemonics(String $page, Array $mnemonics, String $lang = null): ?Array
    {
        $values = (new self([$page], $lang))->getLoader();

        return ! empty($values) ? $values : null;
    }

    public static function getByMnemonic(String $page, String $mnemonic, String $lang = null): ?String
    {
        $value = (new self([$page], $lang))->setMnemonic($mnemonic)->getLoader();

        return ! empty($value) ? $value[$mnemonic] : null;
    }

    public function setMnemonic ($mnemonic) {
        $this->mnemonic = $mnemonic;
        return $this;
    }

    public function getLoader(): array
    {
        return $this->fetchToArray($this->LoadFromDB());
    }

    private function fetchToArray($query)
    {
        return $query->toArray();
    }

    private function LoadFromDB()
    {
       $query = Content::select('mnemonic', 'content')
            ->whereIN('page', $this->pages)
            ->where('lang', $this->lang);

       if (! empty($this->mnemonic)) {
           $query->where('mnemonic', $this->mnemonic);
       }

       return $query->pluck('content', 'mnemonic');
    }

    public function getForm()
    {
        return view('content');
    }

    public static function showList($page)
    {
        $result = [];
        collect(
            Content::select('mnemonic', 'content')
                ->where('page', $page)
                ->where('lang', Session::get('locale'))
                ->get()
        )
            ->map(function ($x) use (&$result) {
                return $result[$x['mnemonic']] = $x['content'];
            })
            ->toArray();

        return $result;
    }

    public function show($id)
    {
        $content = Content::findOrFail($id);
        return view('content', ['content' => Content::findOrFail($id)]);
    }

    public function store(ContentRequest $request)
    {
        //dd($request);
    }

    public function postForm(ContentRequest $request)
    {
        $content = new Content();
        $content->page = $request->input('page');
        $content->mnemonic = $request->input('mnemonic');
        $content->content = $request->input('content');
        $content->lang = $request->input('lang');
        $content->save();

        return view('content_ok');
    }



}
