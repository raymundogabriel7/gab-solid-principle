<?php

interface Animal {
    public function eat();

    public function sleep();
}

interface FlyInterface {
    public function fly();
}


class Dog implements Animal {
    public function eat()
    {
        return "The dog is eating.";
    }

    public function sleep()
    {
        return "The dog is sleeping.";
    }
}

class Bird implements Animal, FlyInterface {
    public function eat()
    {
        return "The dog is eating.";
    }

    public function fly()
    {
        return "The bird is flying.";
    }

    public function sleep()
    {
        return "The dog is sleeping.";
    }
}