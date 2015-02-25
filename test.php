<?php

// base class with member properties and methods
class Vegetable                                                                 {
    private $edible                                                             ;
    private $color                                                              ;
    public function Vegetable($edible, $color = "green")                        {
        $this->edible = $edible                                                 ;
        $this->color = $color                                                   ;}
    public function is_edible()                                                 {
        return $this->edible                                                    ;}
    public function what_color()                                                {
        return $this->color                                                     ;}}

// end of class Vegetable

// extends the base class
class Spinach extends Vegetable                                                 {
    public $cooked = false                                                      ;
    public function Spinach()                                                   {
        $this->Vegetable(true, "green")                                         ;}
    public function cook_it()                                                   {
        $this->cooked = true                                                    ;}
    public function is_cooked()                                                 {
        return $this->cooked                                                    ;}}

// end of class Spinach
$a = new Vegetable(false, "red")                                                ;
var_dump($a->is_edible())                                                       ;
var_dump($a->what_color())                                                      ;
?>