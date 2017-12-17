<?php
/**
 * Created by PhpStorm.
 * User: Fabrizio
 * Date: 29.11.17
 * Time: 19:50
 */

namespace WSF\Flags\Classes;

abstract class Flag {
    protected $name   ;
    protected $price  ;
    protected $width  ;
    protected $height ;
    protected $color  ;
    protected $form   ;
    //Konstruktor-Funktion
    /**
     * Flag constructor.
     * @param array $ar Name, Price, Width, Height, Color (Hex)
     */
    function __construct(array $ar) {
        $this->name   = isset($ar[0])? $ar[0] : "undefined";
        $this->price  = isset($ar[1])? $ar[1] : 0.0;
        $this->width  = isset($ar[2])? $ar[2] : 0.0;
        $this->height = isset($ar[3])? $ar[3] : 0.0;
        $this->color  = isset($ar[4])? $ar[4] : "undefined";
    }
    /**
     * @return string returns all parameters in HTML-Code
     */
    function __toString() : string {
        $temp =
            "<ul style=\"list-style-type: none;\">".
            "<li>Name: {$this->name}</li>".
            "<li>Preis: {$this->price}</li>".
            "<li>Breite: {$this->width}</li>".
            "<li>Höhe: {$this->height}</li>".
            "<li>Fläche: {$this->getArea()}</li>".
            "<li>Farbe: <div style=\"width: 80px; height: 20px; background-color: {$this->color}; border: 1px solid #000\"></div></li>".
            "</ul>";
        /*<<<EOT
            Name: $this->name<br>
            Preis: $this->price<br>
            Breite: $this->width<br>
            H&ouml;he: $this->height<br>
            Fläche: $area<br>
            Farbe: <div style="width: 20px; height: 20px; background-color: $this->color; border: 1px solid #000"></div>
        EOT;*/
        return $temp;
    }
}