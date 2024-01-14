<?php

interface DeviceInterface {
    public function turnOn();
    
    public function turnOff();
}

interface ButtonInteface {
    public function on();
    
    public function off();
}

class Button implements ButtonInteface {
    /* DeviceInterface $device*/
    protected $device;

    public function __construct(DeviceInterface $device)
    {
        $this->device = $device;
    }
    public function on()
    {
        $this->device->turnOn();
    }
    
    public function off()
    {
        $this->device->turnOff();
    }
}

class Lamp implements DeviceInterface {
    public function turnOn()
    {
        echo "The Lamp is ON!";
    }
    
    public function turnOff()
    {
        echo "The Lamp is OFF!";
    }
}

class Speaker implements DeviceInterface {
    public function turnOn()
    {
        echo "The Speaker is ON!";
    }
    
    public function turnOff()
    {
        echo "The Speaker is OFF!";
    }
}

$lamp = new Button(new Lamp);
$lamp->on();
$lamp->off();

$speaker = new Button(new Speaker);
$speaker->on();
$speaker->off();