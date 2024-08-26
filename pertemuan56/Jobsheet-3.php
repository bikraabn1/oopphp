<?php 

class Person{
    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getRole(){
        return "Person";
    }
}

class Student extends Person{
    private $studentID;

    public function __construct(string $name, int $studentID){
        parent::__construct($name);
        $this->studentID = $studentID;
    }
    
    public function setName(string $name){
        parent::setName($name);
    }
    
    public function setStudentID(int $id){
        $this->studentID = $id;
    }
    public function getStudentId(){
        return "id saya $this->studentID " . PHP_EOL;
    }

    public function getName(){
        return "Halo nama saya " . parent::getName() ." saya adalah pelajar" . PHP_EOL;
    }
}

class Teacher extends Person{
    private $teacherID;

    public function __construct(string $name, int $teacherID){
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    public function setName(string $name){
        parent::setName($name);
    }

    public function setTeacherID(int $id){
        $this->teacherID = $id;
    }

    public function getName(){
        return "Halo nama saya " . parent::getName() . " saya adalah guru" . PHP_EOL;
    }

    public function getID(){
        return "id saya $this->teacherID" . PHP_EOL;
    }
}

class Dosen extends Person{
    private $nidn;
    public function __construct(string $name, int $nidn){
        parent::setName($name);
        $this->nidn = $nidn;
    }

    public function setName(string $name){
        parent::setName($name);
    }
    public function getName(){
        return "nama saya adalah " . parent::getName() . PHP_EOL;
    }

    public function setNIDN(int $nidn){
        $this->nidn = $nidn;
    }

    public function getNIDN(){
        return "NIDN saya $this->nidn" . PHP_EOL;
    }

    public function getRole(){
        return "Saya adalah dosen" . PHP_EOL;
    }
}

class Mahasiswa extends Person{
    private $nim;
    public function __construct(string $name, int $nim){
        parent::setName($name);
        $this->nim = $nim;
    }

    public function setNIM(int $nim){
        $this->nim = $nim;
    }

    public function setName(string $name){
        parent::setName($name);
    }

    public function getNIM(){
        return "NIM saya $this->nim" . PHP_EOL;
    }

    public function getName(){
        return "nama saya adalah " . parent::getName() . PHP_EOL;
    }

    public function getRole(){
        return "Saya adalah mahasiswa" . PHP_EOL;
    }
}

abstract class Course{
    abstract function getCourseDetail();
}

class OnlineCourse extends Course{
    public function __construct(){

    }

    public function getCourseDetail(){
        return "ini adalah kelas online" . PHP_EOL;
    }
}

class OfflineCourse extends Course{
    public function __construct(){
    }

    public function getCourseDetail(){
        return "ini adalah kelas offline" . PHP_EOL;
    }
}

echo "STUDENT" . PHP_EOL;

$student = new Student("blablabla", 23 );
echo $student->getName();
echo $student->getStudentId();
$student->setName("Awikwok");
$student->setStudentID(123);
echo $student->getName();
echo $student->getStudentId() . PHP_EOL;

echo "TEACHER" . PHP_EOL;

$teacher = new Teacher("asdasd",20);
echo $teacher->getName();
echo $teacher->getID();
$teacher->setName("asdasdasd");
$teacher->setTeacherId(21);
echo $teacher->getName();
echo $teacher->getID() . PHP_EOL;

echo "MAHASISWA" . PHP_EOL;

$mahasiswa = new Mahasiswa("gw", 34343 );
echo $mahasiswa->getName();
echo $mahasiswa->getRole();
echo $mahasiswa->getNIM();
$mahasiswa->setName("ego");
$mahasiswa->setNim(666);
echo $mahasiswa->getName();
echo $mahasiswa->getRole();
echo $mahasiswa->getNIM() . PHP_EOL;

echo "DOSEN" . PHP_EOL;

$dosen = new Dosen("Gojo", 888);
echo $dosen->getName();
echo $dosen->getRole();
echo $dosen->getNIDN();
$dosen->setName("Satoru");
$dosen->setNidn(999);
echo $dosen->getName();
echo $dosen->getRole();
echo $dosen->getNIDN() . PHP_EOL;
