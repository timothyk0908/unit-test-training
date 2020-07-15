<?php

use PHPUnit\Framework\TestCase;
require __DIR__ . "/../src/Employee.php";

final class EmployeeTest extends TestCase
{
    public function testACreatedEmployeeIsAnInstanceOfEmployeeClass(): void
    {
        $employee = new Employee('a', 'b', 'c@gmail.com');
        $this->assertInstanceOf(
            Employee::class,
            $employee
        );
    }
}

