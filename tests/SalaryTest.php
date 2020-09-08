<?php

use PHPUnit\Framework\TestCase;
require __DIR__ . "/../src/Salary.php";

final class SalaryTest extends TestCase
{
    public function testCalculateNetSalaryShouldReturnTheExpectedNumber(): void
    {
        $this->assertEquals(
            67.65,
            Salary::calculateNetSalary(123)
        );
    }
}

