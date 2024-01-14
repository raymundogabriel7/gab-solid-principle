<?php

interface FormatterOCP {
    public function format();
}

class JsonFormatterOCP implements FormatterOCP {
    public function format()
    {
        return json_encode(['name' => 'Gabriel']);
    }
}

class ArrayFormatterOCP implements FormatterOCP {
    public function format()
    {
        return ['name' => 'Gabriel'];
    }
}

class ManageFormatterOCP {
    public function processFormat(FormatterOCP $formatter)
    {
        var_dump($formatter->format());
    }
}

(new ManageFormatterOCP)->processFormat(new ArrayFormatterOCP); // prints array format
(new ManageFormatterOCP)->processFormat(new JsonFormatterOCP); // prints json format

// If we want to add more formats, we just have to create a class the implments FormatterOCP and adhere to the contract.

// Sample: classes in vendors should not be modified, but should be open for extension

?>