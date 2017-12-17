<?php
/**
 * Created by PhpStorm.
 * User: Fabrizio
 * Date: 29.11.17
 * Time: 19:52
 */

namespace WSF\Flags\Classes;

use \WSF\Flags\Classes\Flag as Flag;
use \WSF\Flags\Interfaces\FlagInterface as FlagInterface;

class TriFlag extends Flag implements FlagInterface {
    /**
     * Returns the area of the flag
     * @return float in m2
     */
    function getArea() : float{
        return $this->width * $this->height / 2;
    }
}