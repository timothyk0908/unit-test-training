<?php

final class Employee
{
    private $firstName;
    private $lastName;
    private $email;
    private $grossMonthlySalary;

    function __construct(string $firstName, string $lastName, string $email, int $grossMonthlySalary)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = Email::fromString($email);
        $this->grossMonthlySalary = $grossMonthlySalary;
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

    public function getGrossMonthlySalary(): int {
        return $this->grossMonthlySalary;
    }

    public function getFullName(): string {
        return $this->firstName . ' ' . $this->lastName;
    }
}