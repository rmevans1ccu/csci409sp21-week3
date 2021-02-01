<?php


class Shape
{
    const SHAPE_ID = 1;
    public $name;
    protected $length;
    protected $width;
    private $id;

    function __construct($length, $width){
        $this->length = $length;
        $this->width = $width;
        $this->id = uniqid();
    }
}