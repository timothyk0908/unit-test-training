<?php

use PHPUnit\Framework\TestCase;
require __DIR__ . "/../src/Employee.php";

final class EmployeeTest extends TestCase
{
    public function testACreatedEmployeeIsAnInstanceOfEmployeeClass(): void
    {
        $employee = new Employee();
        $this->assertInstanceOf(
            Employee::class,
            $employee
        );
    }
}

