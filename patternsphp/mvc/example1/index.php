<?php

declare(strict_types=1);

use App\{Student, StudentView, StudentController};

require 'vendor/autoload.php';

class MVCPatternDemo
{
    public static function retrieveStudentFromDatabase(): Student
    {
        $student = new Student();
        $student->setName("Robert");
        $student->setRollNo("10");
        return $student;
    }
}

//fetch student record based on his roll no from the database
$model = MVCPatternDemo::retrieveStudentFromDatabase();

//Create a view : to write student details on console
$view = new StudentView();

//Create controller
$controller = new StudentController($model, $view);

$controller->updateView();

//Update model data
$controller->setStudentName("John");

$controller->updateView();
