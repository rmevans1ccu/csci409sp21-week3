<?php


class Circle extends Shape
{
    const SHAPE_TYPE = 3;
    protected $radius;

    public function __construct($radius)
    {
        parent::__construct(0, 0);
        $this->radius = $radius;
    }

    public function area(){
        return pi() * pow($this->radius, 2);
    }

    public function getFullDescription(){
        return "Circle<#{$this->getId()}>: {$this->name} - {$this->radius}";
    }
}