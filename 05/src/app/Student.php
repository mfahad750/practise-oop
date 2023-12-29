<?php

namespace App;

class Student implements UserInterface
{
    public function getStudentInfo()
    {
        echo "This Student is the get info <br/>";
    }
}