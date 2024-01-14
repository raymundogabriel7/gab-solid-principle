<?php

interface ISPAnimal {
    public function eat();

    public function fly();

    public function sleep();
}


class Dog implements ISPAnimal {
    public function eat()
    {
        return "The dog is eating.";
    }

    public function fly()
    {
        return "The dog is flying."; // Oops! Dogs can't fly!
    }

    public function sleep()
    {
        return "The dog is sleeping.";
    }
}

class Bird implements ISPAnimal {
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