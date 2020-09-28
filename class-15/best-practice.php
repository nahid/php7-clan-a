<?php

class Employee
{
    // Max salary
    // Min Salary
    // Group salary by type
    // Total probation employee
    // get time wise employee list
    // group count by type
    // get employee list who get bonus (100000-salary)/1000 and has_probation period is false,

    public const RANGE_MAX = 1;
    public const RANGE_MIN = 0;

    protected array $employees = [
        [
            "id" => 1,
            "name" => "Nazat",
            "type" => "platinum",
            "salary" => 90000,
            "joined_at" => "20-01-2018",
            "has_probation" => false,
        ],
        [
            "id" => 2,
            "name" => "Kamrul",
            "type" => "gold",
            "salary" => 50000,
            "joined_at" => "12-02-2019",
            "has_probation" => true,
        ],
        [
            "id" => 3,
            "name" => "Rafsan",
            "type" => "gold",
            "salary" => 65000,
            "joined_at" => "19-10-2019",
            "has_probation" => false,
        ],
        [
            "id" => 4,
            "name" => "Sohel",
            "type" => "silver",
            "salary" => 55000,
            "joined_at" => "27-11-2017",
            "has_probation" => true,
        ],
        [
            "id" => 5,
            "name" => "Sagor",
            "type" => "silver",
            "salary" => 40000,
            "joined_at" => "21-09-2017",
            "has_probation" => true,
        ],
    ];


    public function getBonusLists()
    {
        $bonusEmployees = [];

        foreach ($this->employees as $employee) {
            if (!$employee['has_probation']) continue;

            $bonus = $this->getBonus($employee);
            $bonusEmployees[] = $this->appendBonus($employee, $bonus);
        }

        return $bonusEmployees;
    }

    public function getBonus(array $employee)
    {
        $salaryPercent = (100000 - $employee['salary']) / 1000;

        return ($employee['salary'] * $salaryPercent) / 100;
    }

    public function appendBonus($employee, $bonus)
    {
        $employee['bonus'] = $bonus;

        return $employee;
    }


    protected function getMaxSalary()
    {
        return max(array_column($this->employees, 'salary'));
    }


    protected function getMinSalary()
    {
        return min(array_column($this->employees, 'salary'));
    }

    public function getSalary($type = null)
    {
        if ($type === self::RANGE_MAX) {
            return $this->getMaxSalary();
        }

        if ($type === self::RANGE_MIN) {
            return $this->getMaxSalary();
        }

        return null;
    }
}


$employee = new Employee();

echo '<pre><code>';
print_r($employee->getSalary());