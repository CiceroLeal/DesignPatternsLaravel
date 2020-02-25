<?php

namespace App\Models\Builder;

class PersonBuilder
{
    private $name;
    private $lastName;
    private $nickName;
    private $age;
    private $email;

    public function name(string $name) : PersonBuilder{
        $this->name = $name;
        return $this;
    }

    public function lastName(string $lastName) : PersonBuilder{
        $this->lastName = $lastName;
        return $this;
    }

    public function nickName(string $nickName) : PersonBuilder{
        $this->nickName = $nickName;
        return $this;
    }

    public function age(int $age) : PersonBuilder{
        $this->age = $age;
        return $this;
    }

    public function email(string $email) : PersonBuilder{
        $this->email = $email;
        return $this;
    }

    public function createPerson() : Person {
        return new Person($this->name, $this->lastName, $this->nickName, $this->age, $this->email);
    }
}
