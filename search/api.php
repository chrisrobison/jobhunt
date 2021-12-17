<?php

/**
 * Instructions for running this example:
 *
 * - In your terminal, navigate to this folder.
 * - Install composer dependencies: `composer install`
 * - Run the collector: `php index.php`
 *
 * If you have any questions, see the repo on Github: https://github.com/jobapis/jobs-multi
 */

require __DIR__ . '/vendor/autoload.php';

$providers = [
    'Careercast' => [],
	'Dice' => [],
	'Careerjet' => [
		'affid' => '787ef6ac81ee46e3133da81b7d659855'
	],
    'Govt' => [],
    'Ieee' => [],
    'Jobinventory' => [],
    'Monster' => [],
    'Stackoverflow' => [],
];

$client = new \JobApis\Jobs\Client\JobsMulti($providers);

$query = "software engineering manager";
$location = "san francisco, ca";

if ($_REQUEST && array_key_exists('q', $_REQUEST)) $query = addslashes($_REQUEST['q']);
if ($_REQUEST && array_key_exists('l', $_REQUEST)) $location = addslashes($_REQUEST['l']);


$client->setKeyword($query)
    ->setLocation($location)
    ->setPage(1, 25);

$options = [
    'maxAge' => 7,
    'maxResults' => 50,
    'orderBy' => 'datePosted',
    'order' => 'desc',
];

// Get all the jobs
$jobs = $client->getAllJobs($options);

// Output a summary of jobs as arrays
//echo count($jobs)." Jobs Found".PHP_EOL;
$out = array();

foreach ($jobs->all() as $job) {
    $out[] = $job->toArray();
}

header("Content-type: application/json");

print json_encode($out);

