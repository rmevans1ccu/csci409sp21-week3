<?php


class Octagon extends Shape
{
    const SHAPE_TYPE = 4;
    protected $side;

    public function __construct($side)
    {
        parent::__construct(0, 0);
        $this->side = $side;
    }

    public function area()
    {
        return 2 * (1 + sqrt(2)) * pow($this->side, 2);
    }

    public function getFullDescription(){
        return "Octagon<#{$this->getId()}>: {$this->name} - {$this->side}";
    }
}