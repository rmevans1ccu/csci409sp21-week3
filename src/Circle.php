<?php


class Circle extends Shape
{
    const SHAPE_ID = 3;
    protected $radius;

    public function __construct($radius)
    {
        parent::__construct(0, 0);
        $this->radius = $radius;
    }
}