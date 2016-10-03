<?php

/***********************
* Writes to a log file *
************************/

class Log
{
	private $filename;
	private $handle;

	public function __construct($prefix = 'log') 
	{
		$this->setFilename($prefix);
		$this->setHandle($prefix);
	}

	private function setFilename($prefix)
	{
		$this->filename = "logs/{$prefix}-" . date('Y-n-d') . ".log";
	}

	private function setHandle()
	{
		$this->handle = fopen($this->filename, 'a');
	}

	private function logMessage($level, $msg)
	{
		fwrite($this->handle, date('Y-n-d h:i:s A ') . "[{$level}] " . $msg . PHP_EOL . PHP_EOL);
	}

	public function info($msg)
	{
		$this->logMessage("INFO", $msg);
	}

	public function error($msg)
	{
		$this->logMessage("ERROR", $msg);
	}
	
	public function __destruct()
	{
		fclose($this->handle);
	}
}

$log = new Log('cli');
$log->info('important stuff');

















