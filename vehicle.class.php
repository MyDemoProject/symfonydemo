<?php
echo "ajaykumarsahu";
class vehicle{
/*** define public properties ***/

/*** the color of the vehicle ***/
public $color;

/*** the number of doors ***/
public $num_doors;

/*** the price of the vehicle ***/
public $price;

/*** the shape of the vehicle ***/
public $shape;

/*** the brand of vehicle ***/
public $brand;

/*** the constructor ***/
public function __construct(){

  echo 'About this Vehicle.<br />';
}

/*** define some public methods ***/

/*** a method to show the vehicle price ***/
public function showPrice(){
  echo 'AAA This vehicle costs '.$this->price.'.<br />';
}

/*** a method to show the number of doors ***/
public function numDoors(){
  echo 'BBBB This vehicle has '.$this->num_doors.' doors.<br />';
}

/*** method to drive the vehicle ***/
public function drive(){

  echo 'CCCC VRRROOOOOOM!!!';
}


} /*** end of class ***/


/*** create a new vehicle object ***/
$vehicle = new vehicle;

/*** the brand of vehicle ***/
$vehicle->brand = 'Porsche';

/*** the shape of vehicle ***/
$vehicle->shape = 'Coupe';

/*** the color of the vehicle ***/
$vehicle->color = 'Red';

/*** number of doors ***/
$vehicle->num_doors = 2;

/*** cost of the vehicle ***/
$vehicle->price = 100000;

/*** call the showPrice method ***/
$vehicle->showPrice();

/*** call the numDoors method ***/
$vehicle->numDoors();

/*** drive the vehicle ***/
$vehicle->drive();



?>