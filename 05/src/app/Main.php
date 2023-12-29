<?php

namespace App;


class Main {
    public $object;
    public function __construct(UserInterface $object)
    {
        $this->object = $object;
    }

    public function display()
    {
        $this->object->getStudentInfo();
        // $this->object->getTeacherInfo();
        // $this->object->getStafInfo();
    }

    public function getObject():UserInterface
    {
        return $this->object;
    }

}