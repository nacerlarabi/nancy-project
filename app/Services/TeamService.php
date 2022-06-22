<?php

namespace App\Services;

use App\Models\Team;

class TeamService
{
    public function __constuct()
    {
        //
    }


    public function get () {
        return $this->fetchToArray($this->LoadFromDB());
    }

    private function fetchToArray($query)
    {
        $result = [];
        collect($query)->map(function ($x) use (&$result) {
            return $result[] = [
                'lastname' => $x['lastname'],
                'firstname' => $x['firstname'],
                'position' => $x['position'],
                'aboutit' => $x['aboutit'],
                'picture' => $x['picture']
            ];
        })
            ->toArray();

        return $result;
    }

    private function LoadFromDB()
    {
        return Team::select('lastname', 'firstname', 'position', 'aboutit', 'picture')
            ->where('active', '1')
            ->orderby('ordre', 'ASC')
            ->get();
    }
}
