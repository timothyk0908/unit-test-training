<?php

use PHPUnit\Framework\TestCase;
require __DIR__ . "/../src/Employee.php";

final class EmployeeTest extends TestCase
{
    public function testACreatedEmployeeIsAnInstanceOfEmployeeClass(): void
    {
        $employee = new Employee('a', 'b', 'c@gmail.com', 123);
        $this->assertInstanceOf(
            Employee::class,
            $employee
        );
    }

    public function testGetFullNameOfEmployeeShouldReturnFirstNameAndLastName(): void
    {
        $employee = new Employee('Tata', 'Tonton', 'c@gmail.com', 123);
        $this->assertEquals(
            'Tata Tonton',
            $employee->getFullName()
        );
    }

    public function testGetGrossMonthlySalaryOfEmployeeShouldReturnTheSalary(): void
    {
        $employee = new Employee('Tata', 'Tonton', 'c@gmail.com', 123);
        $this->assertEquals(
            123,
            $employee->getGrossMonthlySalary()
        );
    }

    public function testGetNetMonthlySalaryOfEmployeeShouldReturnTheNetSalary(): void
    {
        $employee = new Employee('Tata', 'Tonton', 'c@gmail.com', 123);
        $this->assertEquals(
            67.65,
            $employee->getNetMonthlySalary()
        );
    }
}

