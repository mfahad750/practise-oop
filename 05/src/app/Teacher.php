<?php

namespace App ;

class Teacher implements UserInterface
{
    public function getStudentInfo()
    {
        echo "This is Teacher of the get Info <br/>";
    }
}