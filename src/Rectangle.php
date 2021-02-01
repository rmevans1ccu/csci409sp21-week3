<?php


class Rectangle extends Shape
{
    const SHAPE_TYPE = 2;

    public function getFullDescription(){
        return "Rectangle<#{$this->getId()}>: {$this->name} - {$this->length} x {$this->width}";
    }
}