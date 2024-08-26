<?php 

class Person{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

class Student extends Person{
    public $studentID;

    public function __construct(string $name, int $studentID){
        parent::__construct($name);
        $this->studentID = $studentID;
    }
    
    public function setName(string $name){
        $this->name = $name;
    }
    
    public function setStudentID(int $id){
        $this->studentID = $id;
    }
    public function getStudentId(){
        return $this->studentID;
    }

    public function getName(){
        return "Halo nama saya $this->name id saya $this->studentID saya adalah pelajar";
    }
}

class Teacher extends Person{
    private $teacherID;
    private $name;

    public function __construct(string $name,int $teacherID){
        $this->name = $name;
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }



    public function getName(){
        return "Halo nama saya $this->name id saya $this->teacherID saya adalah guru";
    }
}