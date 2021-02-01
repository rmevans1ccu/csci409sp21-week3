<?php


class Shape
{
    const SHAPE_TYPE = 1;
    public $name;
    protected $length;
    protected $width;
    private $id;

    function __construct($length, $width){
        $this->length = $length;
        $this->width = $width;
        $this->id = uniqid();
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function area(){
        return $this->length * $this->width;
    }

    public static function getTypeDescription(){
        return "Type: ". static::SHAPE_TYPE;
    }

    public function getFullDescription(){
        return "Shape<#{$this->id}>: {$this->name} - {$this->length} x {$this->width}";
    }
}