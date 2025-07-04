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


//-------Esercizio 1-------//
class Continent
{
  public $nameContinent;

  public function __construct($continent)
  {
    $this->nameContinent = $continent;
  }
}

class Country extends Continent
{
  public $nameCountry;

  public function __construct($continent, $country)
  {
    parent::__construct($continent);
    $this->nameCountry = $country;
  }
}

class Region extends Country
{
  public $nameRegion;
  public function __construct($continent, $country, $region)
  {
    parent::__construct($continent, $country);
    $this->nameRegion = $region;
  }
}

class Province extends Region
{
  public $nameProvince;
  public function __construct($continent, $country, $region, $province)
  {
    parent::__construct($continent, $country, $region);
    $this->nameProvince = $province;
  }
}

class City extends Province
{
  public $nameCity;
  public function __construct($continent, $country, $region, $province, $city)

  {
    parent::__construct($continent, $country, $region, $province);
    $this->nameCity = $city;
  }
}
class Street extends City
{
  public $nameStreet;
  public function __construct($continent, $country, $region, $province, $city, $street)
  {
    parent::__construct($continent, $country, $region, $province, $city);
    $this->nameStreet = $street;
  }
  public function getMyCurrentLocation()
  {
    echo "Mi trovo in $this->nameContinent $this->nameCountry $this->nameRegion $this->nameProvince $this->nameCity $this->nameStreet \n";
  }
}
/*$continente = new Continent('Europa', 'Non Europa', 'Africa', 'Greenlandia', 'Continente');
$paese = new Country('randomcountry1', 'randomcountry2', 'randomcountry3', 'randomcountry4');
$regione = new Region('randomregion1','randomregion2','randomregion3');
$citta = new City('randomcity1','randomcity2');*/

$myLocation = new Street('Eurasia', 'Italia', 'Sicilia', 'Palermo', 'Cinisi', 'via Dante');

$myLocation->getMyCurrentLocation();
