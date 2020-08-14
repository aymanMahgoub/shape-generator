<?php
require __DIR__.'/vendor/autoload.php';

use Services\ShapeFactory;
use Constant\ShapeConstant;

$shapeFactory = new ShapeFactory();
// draw stars small then medium then large
$starShape = $shapeFactory->getShapeByType(ShapeConstant::STAR);
$starShape->drawShape(5);
$starShape->drawShape(7);
$starShape->drawShape(11);
$treeShape = $shapeFactory->getShapeByType(ShapeConstant::TREE);
// draw tree small then medium then large
$treeShape->drawShape(5);
$treeShape->drawShape(7);
$treeShape->drawShape(11);
