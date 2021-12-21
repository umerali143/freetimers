<?php
class Topsoil {

    private $unit;
    private $depthUnit;
    private $width, $length, $depth;

    function __construct() {
        $this->unit = 'm';        
        $this->depthUnit = 'cm';        
        $this->width = 0 ;        
        $this->length = 0;        
        $this->depth = 0;        
    }

    public function setMeasurementUnit($unit)
    {
        $this->unit = $unit;        
    }

    public function depthMeasurementUnit($unit)
    {
        $this->depthUnit = $unit;
    }

    public function setDimentions($width, $length, $depth)
    {
        $this->width = $width;
        $this->length = $length;
        $this->depth = $depth;
    }

    public function calculateBags()
    {
        if($this->unit == 'ft') //checking the unit is in meters or not
        {
            $this->width = $this->convertFeetToMeters($this->width);
            $this->length = $this->convertFeetToMeters($this->length);
        }
        else if($this->unit == 'yd')
        {
            $this->width = $this->convertYardToMeters($this->width);
            $this->length = $this->convertYardToMeters($this->length);
        }

        $x = ($width* $width) * 0.025;
        $y = $x * 1.4;
        $bags = ceil($y);
        return $bags;
    }

    public function convertFeetToMeters($feet)
    {
        $meters = $feet * 0.3048;
        return $meters;
    }

    public function convertYardToMeters($yard)
    {
        $meters = $yard * 0.9144;
        return $meters;
    }
  
}
?>
