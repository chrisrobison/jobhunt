<?php
require "vendor/autoload.php";
use DonatelloZa\RakePlus\RakePlus;

$in = $_REQUEST;

$text = "Skilled technology leader excelling in the rapid development of solutions to manage complex technical environments for growing companies, ranging from startups to billion dollar industry leaders. With over 20 years experience in the industry, I can build, develop and lead high-performance technical teams and effectively manage people and resources in-person and remotely across multiple geographic locations. My extensive experience allows me to leverage my business acumen and technical expertise to translate a technology needs into innovative solutions and actionable plans. Hands-on but I know how to delegate. I am just as comfortable managing people and engineering resources as I am hacking away at code. tl;dr: I build things that make companies go.";
//$text = $in['desc'];

$rake = RakePlus::create($text);
$keywords = $rake->keywords();
$phrases = $rake->get();
$phrase_scores = $rake->sortByScore('desc')->scores();

print_r($phrase_scores);
$results = array_splice($keywords, 0, 20);

header("Content-type: application/javascript");
print json_encode($keywords);

?>
