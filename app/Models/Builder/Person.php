<?php

namespace App\Models\Builder;

class Person
{
    private $name;
    private $lastName;
    private $nickName;
    private $age;
    private $email;

    public function __construct(string $name, string $lastName, string $nickName, int $age, string $email)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->nickName = $nickName;
        $this->age = $age;
        $this->email = $email;
    }

    public function __toString()
    {
        $person = [
            'name' => $this->name,
            'lastName' => $this->lastName,
            'nickName' => $this->nickName,
            'age' => $this->age,
            'email' => $this->email
        ];

        return json_encode($person);
    }
}
