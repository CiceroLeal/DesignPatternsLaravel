<?php

namespace App\Http\Controllers\Builder;

use App\Http\Controllers\Controller;
use App\Models\Builder\PersonBuilder;

class MainController extends Controller
{
    private $people = [
        [
            'name' => 'Jhon',
            'lastName' => 'Karter',
            'nickName' => 'JK',
            'age' => '29',
            'email' => 'jk@jk.com',
        ],
        [
            'name' => 'Mary',
            'lastName' => 'White',
            'nickName' => '',
            'age' => '35',
            'email' => 'mary_mary@gmail.com',
        ],
    ];

    public function getPerson(){
        $person = $this->people[rand(0,count($this->people)-1)];
        $builder = new PersonBuilder();

        return $builder
            ->name($person['name'])
            ->lastName($person['lastName'])
            ->nickName($person['nickName'])
            ->age($person['age'])
            ->email($person['email'])
            ->createPerson();
    }
}
