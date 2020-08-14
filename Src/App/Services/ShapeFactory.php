<?php

namespace Services;

use Constant\ShapeConstant;
use InvalidArgumentException;

/**
 * Class ShapeFactory
 *
 * @package Services
 */
class ShapeFactory
{
    /**
     * @param string $type
     *
     * @return AbstractShape
     */
    public function getShapeByType(string $type): AbstractShape
    {
        if ($type === ShapeConstant::TREE) {
            return new TreeShape();
        } elseif ($type === ShapeConstant::STAR) {
            return new StarShape();
        }
        throw new InvalidArgumentException('Passed invalid shape type');
    }

}
