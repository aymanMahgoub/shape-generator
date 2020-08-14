<?php

namespace Src\App;

/**
 * Class AbstractShape
 *
 * @package Src\App
 */
Abstract class AbstractShape
{
    /**
     * @param int $height
     */
    public abstract function drawShape(int $height);

    /**
     * @param int $height
     */
    protected function drawFirstOrLastLine(int $height)
    {
        for ($theBeginningOfLine = 0; $theBeginningOfLine <= $height; $theBeginningOfLine++) {
            if ($theBeginningOfLine == $height) {
                echo "+";
            } else {
                echo " ";
            }
        }
    }

}
