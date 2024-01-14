<?php

// Open Closed Principle Violation
class WrongJsonFormatter
{
    public function formatJson()
    {
        return json_encode(['name' => 'Gabriel']);
    }
}

class WrongArrayFormatter
{
    public function formatArray()
    {
        return ['name' => 'Gabriel'];
    }
}

class WrongFormatter
{
    public function process($formatter)
    {
        if ($formatter instanceof WrongJsonFormatter) {
            $formatter->formatJson();
        } elseif ($formatter instanceof WrongArrayFormatter) {
            $formatter->formatArray();
        };

        throw new Exception('Invalid Format Type');
    }
}

?>