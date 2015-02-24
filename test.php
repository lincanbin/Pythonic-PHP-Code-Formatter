<?php

// base class with member properties and methods
class Vegetable                                             {
    public $edible                                          ;
    public $color                                           ;
    function Vegetable($edible, $color = "green")           {
        $this->edible = $edible                             ;
        $this->color = $color                              ;}
    function is_edible()                                    {
        return $this->edible                                ;}
    function what_color()                                   {
        return $this->color                                 ;}}

// end of class Vegetable

// extends the base class
class Spinach extends Vegetable                             {
    public $cooked = false                                     ;
    function Spinach()                                      {
        $this->Vegetable(true, "green")                     ;}
    function cook_it()                                      {
        $this->cooked = true                                ;}
    function is_cooked()                                    {
        return $this->cooked                                ;}}

// end of class Spinach
$a = new Vegetable(false, 'red')                            ;
var_dump($a->is_edible())                                   ;
var_dump($a->what_color())                                  ;
?>