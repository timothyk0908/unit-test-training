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

    public function testGetFullNameOfEmployeeShouldReturnFirstNameAndLastName(): void
    {
        $employee = new Employee('Tata', 'Tonton', 'c@gmail.com');
        $this->assertEquals(
            'Tata Tonton',
            $employee->getFullName()
        );
        
    }
}

