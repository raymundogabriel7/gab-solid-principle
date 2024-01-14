<?php

class LSPJsonFormatter {
    public function format()
    {
        return json_encode(['name' => 'Gabriel']); // return string
    }
}

class LSPArrayFormatter extends LSPJsonFormatter{
    public function format()
    {
        return ['name' => 'Gabriel']; // return array
    }
}

// This violatest the principle as the subclass format methods changes the return type of the base class format method.
