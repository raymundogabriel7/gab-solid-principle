<?php
class Lamp {
    //TRUE = on, FALSE = Off
    protected bool $currentState = FALSE; 
    
    public function turnOn() {
        $this->currentState = TRUE;
    }
    
    public function turnOff() {
        $this->currentState = FALSE;
    }
    
    public function getState() {
        return $this->currentState;
    }
    
    public function getStateString(): string {
        if ($this->currentState) {
            return 'On';
        } else {
            return 'Off';
        }
    }
}

class Button {
    protected Lamp $lamp;
    
    public function __construct(Lamp $l) {
        $this->lamp = $l;
    }
    
    public function On() {
        $this->lamp->turnOn();
    }
    
    public function Off() {
        $this->lamp->turnOff();
    }
}

$l = new Lamp();
$b = new Button($l);
echo $l->getStateString(); //Off

$b->On();
echo $l->getStateString(); //On

// At this point, we would want to know which classes are high level, and which are low level? 
// In general, the class that uses another class is the high level class. 
// So our Button class is the high level class and the Lamp class is the low level class.

// How does our code in it's current iteration, not comply with the Dependency Inversion Principle:

// The Button class is dependent on the Lamp class.
// We cannot re-use the Button class without also including the Lamp class.
// Any update, like creating a new class which needs to be turned on or off by our Button cannot be added without modifying the Button class itself.