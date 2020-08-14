<?php

namespace ShapeGenerator\tests\Services;

use Constant\ShapeConstant;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Services\AbstractShape;
use Services\ShapeFactory;

/**
 * Class ShapeFactoryTest
 *
 * @package ShapeGenerator\tests\Services
 */
class ShapeFactoryTest extends TestCase
{
    public function testGetShapeByType()
    {
        $shapeFactory = new ShapeFactory();
        $this->assertInstanceOf(
            AbstractShape::class,
            $shapeFactory->getShapeByType(ShapeConstant::TREE)
        );
    }

    public function testPassInvalidShapeType()
    {
        $shapeFactory = new ShapeFactory();
        $this->expectException(
            InvalidArgumentException::class
        );
        $shapeFactory->getShapeByType('circle');
    }

}
