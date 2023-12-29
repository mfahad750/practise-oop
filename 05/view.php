<?php

require "vendor/autoload.php";

use App\Teacher;
use App\Staf;
use App\Student;
use App\Main;


$std = new Student();
$tach = new Teacher();
$staf = new Staf();
$main = new Main( $tach);
$main->display();

$main->getObject()->getStudentInfo();