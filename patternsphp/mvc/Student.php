<?php

declare(strict_types=1);

class Student
{
    private $_rollNo;
    private $_name;

    public function getRollNo(): string
    {
        return $this->_rollNo;
    }

    public function setRollNo(string $RollNo): void
    {
        $this->_rollNo = $RollNo;
    }

    public function getName(): string
    {
        return $this->_name;
    }

    public function setName(string $name): void
    {
        $this->_name = $name;
    }
}
