<?php

class Company
{
  public string $companyname;
  public string $location;
  public string $employees;

  public function __construct($nomeazienda, $sede, $dipendenti = 0)
  {

    $this->companyname = $nomeazienda;
    $this->location = $sede;
    $this->employees = $dipendenti;
  }

  public function printInfo()
  {
    if ($this->employees == 0) {
      echo "L'ufficio $this->companyname in $this->location non ha dipendenti \n";
    } else {
      echo "L'ufficio $this->companyname in $this->location ha ben $this->employees dipendenti \n";
    }
  }
}

$company1 = new Company('Stelle', 'Detroit', 5);
$company2 = new Company('Stalle', 'Giardinello');
$company3 = new Company('Comesichiama', 'Amsterdam', 8);
$company4 = new Company('Beirut', '6');
$company5 = new Company('TuttiFrutti', 'Moscow', '55');

$company1->printInfo();
$company2->printInfo();
$company3->printInfo();
$company4->printInfo();
$company5->printInfo();

/*var_dump($company1);
var_dump($company2);
var_dump($company3);
var_dump($company4);
var_dump($company5);*/
