<?php

final class Employee
{
    private $firstName;
    private $lastName;
    private $email;

    private function __construct(string $firstName, string $lastName, string $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }
}