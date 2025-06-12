<?php

//------ Classi -----//

$students = [
    ['name' => 'Gianbertoldo'],
    ['firtsname' => 'Lucrezia'],
    ['nome' => 'Procopio'],
    ['name' => 'Artemide'],

];
/* si scrive in Inglese
singolare
prima lettera maiuscola  */



class Person
{
    //Nome, Cognome, Eta

    public string $firstname;
    public string $lastname;
    public int $age;

    //Attributi = variabile
    //Metodi = fUNZIONI
    //Costruttore

    public function __construct($nome, $cognome, $eta)
    {
        //prendere Leysan e mettere dentro $firstname    
        $this->firstname = $nome;
        $this->lastname = $cognome;
        $this->age = $eta;
    }
    //__ significa funzione magica

public function sayHello()

{
echo "Ciao, mi chiamo $this ->firstname $this->lastname \n";
}
}

$leysan = new Person('Leysan', 'Nasretdinova', '19'); //un oggetto nuovo
$giuseppina = new Person('Giuseppina', 'Zibibbo', '38');

die();


//------ Ereditarieta -----//


class Person
{
    public string $name;
    public string $surname;
    public int $age;

    public function __construct($a, $b, $c)
    {
        $this->name = $a;
        $this->surname = $b;
        $this->age = $c;
    }

    public function sayHello()
    {
        echo "Ciao mi chiamo $this->name $this->surname \n";
    }
}

class Student extends Person
{
    public float $avg;

    public function __construct($a, $b, $c, $d)
    {
        parent::__construct($a, $b, $c);
        $this->avg = $d;
    }
    //Abstract class
    public function sayHello()
    {
        echo "Buongiorno, mi chiamo $this->name $this->surname \n";
    }
}


class Teacher extends Person
{
    public float $salary;

    public function __construct($a, $b, $c, $d)
    {
        parent::__construct($a, $b, $c);
        $this->salary = $d;
    }
}

$persona = new Person('Tizio', 'Caio', 90);
$studente = new Student('Marco', 'Caio', 90, 78.9);
$docente = new Teacher('Enrico', 'Caio', 90, 1000);

// var_dump($persona);
// var_dump($studente);
// var_dump($docente);

$studente->sayHello();
$docente->sayHello();