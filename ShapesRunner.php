<?php
require 'src\Shape.php';
require 'src\Rectangle.php';
require 'src\Circle.php';
/**
 * Uncomment below line if attempting extra credit
 */
//require 'src\Octagon.php';

$shape = new Shape(5,10);
$shape->setName('Shape1');
echo "Shape id: {$shape->getId()}\n";
echo "Shape name: {$shape->getName()}\n";
echo "Shape area: {$shape->area()}\n";
echo "Shape Type Description: {$shape::getTypeDescription()}\n";
echo "Shape Full Description: {$shape->getFullDescription()}\n";

echo "=============================================================================================\n";

$rectangle = new Rectangle(5,10);
$rectangle->setName('Rectangle1');
echo "Rectangle id: {$rectangle->getId()}\n";
echo "Rectangle name: {$rectangle->getName()}\n";
echo "Rectangle area: {$rectangle->area()}\n";
echo "Rectangle Type Description: {$rectangle::getTypeDescription()}\n";
echo "Rectangle Full Description: {$rectangle->getFullDescription()}\n";

echo "=============================================================================================\n";

$circle = new Circle(2);
$circle->setName('Circle1');
echo "Circle id: {$circle->getId()}\n";
echo "Circle name: {$circle->getName()}\n";
echo "Circle area: {$circle->area()}\n";
echo "Circle Type Description: {$circle::getTypeDescription()}\n";
echo "Circle Full Description: {$circle->getFullDescription()}\n";

echo "=============================================================================================\n";

/**
 * Uncomment the following code if attempting extra credit
 */
//$octagon = new Octagon(5);
//$octagon->setName('Octagon1');
//echo "Octagon id: {$octagon->getId()}\n";
//echo "Octagon name: {$octagon->getName()}\n";
//echo "Octagon area: {$octagon->area()}\n";
//echo "Octagon Type Description: {$octagon::getTypeDescription()}\n";
//echo "Octagon Full Description: {$octagon->getFullDescription()}\n";