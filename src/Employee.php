<?php

final class Employee
{
    private $firstName;
    private $lastName;
    private $email;

    function __construct(string $firstName, string $lastName, string $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = Email::fromString($email);
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function getEmail(): Email {
        return $this->email;
    }

    public function getFullName(): string {
        return $this->firstName . ' ' . $this->lastName;
    }
}