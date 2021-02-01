<?php
require_once 'Shape.php';
require 'Octagon.php';

class OctagonTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider areaData
     */
    public function test_area($r, $expected)
    {
        $octagon = new Octagon($r);
        $this->assertEquals($expected, round($octagon->area(), 2));
    }

    public function areaData()
    {
        return [
            [1, 4.83],
            [2, 19.31],
            [3.5, 59.15],
            [9, 391.10]
        ];
    }

    public function test_side_property_visibility()
    {
        $class = new ReflectionClass('Octagon');
        $property = $class->getProperty('side');

        $this->assertTrue($property->isProtected());
    }

    public function test_inherits_from_shape()
    {
        $this->assertEquals('Shape', get_parent_class('Octagon'));
    }

    public function test_shape_type() {
        $this->assertSame(4, Octagon::SHAPE_TYPE);
    }

    public function test_getTypeDescription()
    {
        $this->assertEquals('Type: 4', Octagon::getTypeDescription());
    }

    public function test_getFullDescription() {
        $octagon = new Octagon(13);

        $id = $octagon->getId();
        $name = str_shuffle(time());
        $octagon->name = $name;

        $this->assertEquals('Octagon<#' . $id . '>: ' . $name . ' - 13', $octagon->getFullDescription());
    }
}