<?php 
class Orang{
    var $name;
    var $years;
    var $birthday;
    var $days;
    var $hours;
    var $gender;
    var $gpa;
    var $isStudent;
    
    function __construct($name, $birthday, $gender, $gpa, $isStudent){
        $this->name = $name;
        $this->birthday = new DateTime($birthday);
        $this->gender = $gender;
        $this->gpa = $gpa;
        $this->isStudent = $isStudent;

        $this->calculateAge();
    }
    

    private function calculateAge(){
        $currentDate = new DateTime();
        $ageInterval = $this->birthday->diff($currentDate);

        $this->years = $ageInterval->y;
        $this->days = $ageInterval->d;
        $this->hours = $ageInterval->h;
    }





    
    function bicara(){
        echo "Name: $this->name <br>";
        echo "Age: $this->years years, $this->days days, $this->hours hours <br>";
        echo "Gender: $this->gender <br>";
        echo "GPA: $this->gpa <br>";
        echo "Student: " . ($this->isStudent ? 'Yes' : 'No') . "<br><br>";
    }
}

$mahasiswa = [
    new Orang('HK', '1990-10-30', 'male', 1.0, true),
    new Orang('Derik', '2020-01-15', 'male', 3.8, false),
    new Orang('Dodol', '1985-07-22', 'male', 2.5, true)
];

foreach($mahasiswa as $person){
    $person->bicara();
}

?>



