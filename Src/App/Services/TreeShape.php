<?php

namespace Services;

use InvalidArgumentException;

/**
 * Class TreeShape
 *
 * @package Src\App
 */
class TreeShape extends AbstractShape
{
    /**
     * @param int $height
     */
    public function drawShape(int $height)
    {
        if ($height <= 0) {
            throw new InvalidArgumentException('Height must be greater than 0');
        }
        $this->drawFirstOrLastLine($height);
        $this->drawTree($height);
    }

    /**
     * @param $height
     */
    private function drawTree($height)
    {
        $leftPointer = $rightPointer = $height;
        while ($height > 1) {
            for ($i = 0; $i <= $rightPointer; $i++) {
                if ($i >= $leftPointer) {
                    echo "X";
                } else {
                    echo " ";
                }
            }
            echo "\n";
            $height--;
            $rightPointer++;
            $leftPointer--;
        }
    }

}
