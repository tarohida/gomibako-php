<?php
function perform($logger)
{
    $logger->logging('perform');
}

class EchoLogger
{
    public function logging($message)
    {
        echo $message;
    }
}

class FileLogger
{
    protected $fileWriter;

    public function logging($message)
    {
        $this->fileWriter->write($message);
    }
}

$logger = new EchoLogger;
perform($logger);