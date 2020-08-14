<?php

namespace ShapeGenerator\tests\Services;

use Constant\ShapeConstant;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Services\ShapeFactory;

/**
 * Class TreeShapeTest
 *
 * @package ShapeGenerator\tests\Services
 */
class TreeShapeTest extends TestCase
{
    public function testDrawTree()
    {
        $expectedShape = '     +
     X
    XXX
   XXXXX
  XXXXXXX
';
        $this->expectOutputString($expectedShape);
        $shapeFactory = new ShapeFactory();
        $treeShape    = $shapeFactory->getShapeByType(ShapeConstant::TREE);
        $treeShape->drawShape(5);
    }

    public function testPassNegativeHeight()
    {
        $this->expectException(
            InvalidArgumentException::class
        );
        $shapeFactory = new ShapeFactory();
        $starShape    = $shapeFactory->getShapeByType(ShapeConstant::TREE);
        $starShape->drawShape(-1);
    }

}
