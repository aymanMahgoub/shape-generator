<?php

namespace ShapeGenerator\tests\Services;

use Constant\ShapeConstant;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Services\ShapeFactory;

class StarShapeTest extends TestCase
{
    public function testPassNegativeHeight()
    {
        $this->expectException(
            InvalidArgumentException::class
        );
        $shapeFactory = new ShapeFactory();
        $starShape    = $shapeFactory->getShapeByType(ShapeConstant::STAR);
        $starShape->drawShape(-1);
    }

    public function testPassEvenHeight()
    {
        $this->expectException(
            InvalidArgumentException::class
        );
        $shapeFactory = new ShapeFactory();
        $starShape    = $shapeFactory->getShapeByType(ShapeConstant::STAR);
        $starShape->drawShape(2);
    }

    public function testDrawStarShape()
    {
        $shape = '     +
     X
  +XXXXX+
     X
     +
';
        $this->expectOutputString($shape);
        $shapeFactory = new ShapeFactory();
        $starShape    = $shapeFactory->getShapeByType(ShapeConstant::STAR);
        $starShape->drawShape(5);
    }

}
