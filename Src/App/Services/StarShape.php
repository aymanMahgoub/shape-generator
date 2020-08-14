<?php

namespace Services;

use InvalidArgumentException;

/**
 * Class StarShape
 *
 * @package Services
 */
class StarShape extends AbstractShape
{
    /**
     * @param int $height
     */
    public function drawShape(int $height)
    {
        if ($height <= 0) {
            throw new InvalidArgumentException('Height must be greater than 0');
        }
        if ($height % 2 === 0) {
            throw new InvalidArgumentException('Height must be Odd number');
        }
        $this->drawFirstOrLastLine($height);
        $this->drawStar($height);
        $this->drawFirstOrLastLine($height);
    }

    /**
     * @param int $height
     */
    private function drawStar(int $height)
    {
        $leftPointer = $rightPointer = $height;
        $currentLine = $height - 2;
        $middleLine  = $currentLine / 2 + .5;
        while ($currentLine > 0) {
            for ($i = 0; $i <= $rightPointer; $i++) {
                if ($currentLine == $middleLine && $i == $leftPointer - 1) {
                    echo "+";
                } elseif ($i >= $leftPointer) {
                    echo "X";
                } else {
                    echo " ";
                }
            }
            if ($currentLine == $middleLine) {
                echo "+";
            }
            echo "\n";
            $currentLine--;
            if ($currentLine >= $middleLine) {
                $rightPointer += 2;
                $leftPointer  -= 2;
            } else {
                $rightPointer -= 2;
                $leftPointer  += 2;
            }
        }
    }

}
