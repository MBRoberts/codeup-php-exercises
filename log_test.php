<?php 

function logger()
{
	date_default_timezone_set('America/Chicago');
	require_once 'log.php';
	$log = new Log('cli');
	$log->info('Some Info....');
	$log->error('You screwed up....');
}

logger();