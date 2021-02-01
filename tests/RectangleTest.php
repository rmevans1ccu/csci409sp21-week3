<?php
require_once 'Shape.php';
require 'Rectangle.php';

class RectangleTest extends \PHPUnit\Framework\TestCase
{
    public function test_inherits_from_shape()
    {
        $this->assertEquals('Shape', get_parent_class('Rectangle'));
    }

    public function test_shape_type() {
        $this->assertSame(2, Rectangle::SHAPE_TYPE);
    }

    public function test_getTypeDescription()
    {
        $this->assertEquals('Type: 2', Rectangle::getTypeDescription());
    }

    public function test_getFullDescription() {
        $rectangle = new Rectangle(6, 7);

        $id = $rectangle->getId();
        $name = str_shuffle(time());
        $rectangle->name = $name;

        $this->assertEquals('Rectangle<#' . $id . '>: ' . $name . ' - 6 x 7', $rectangle->getFullDescription());
    }

}