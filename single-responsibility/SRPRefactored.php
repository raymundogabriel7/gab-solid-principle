<?php

// Single Responsibility Principle Refactored
class Report
{
    public function getTitle()
    {
        return 'Report Title';
    }

    public function getDate()
    {
        return 's';
    }

    public function getContents()
    {
        return [
            'title' => $this->getTitle(),
            'date' => $this->getDate(),
        ];
    }
}

interface FormatterSRP {
    public function format();
}

class JsonFormatterSRP implements FormatterSRP {

    protected $report;

    public function __construct(Report $report)
    {
        $this->report = $report;
    }

    public function format()
    {
        return json_encode($this->report->getContents());
    }
}

class ArrayFormatterSRP implements FormatterSRP {

    protected $report;

    public function __construct(Report $report)
    {
        $this->report = $report;
    }

    public function format()
    {
        return $this->report->getContents();
    }
}

$jsonFormat = new JsonFormatterSRP(new Report);
echo $jsonFormat->format();

$jsonFormat = new ArrayFormatterSRP(new Report);
var_dump($jsonFormat->format());