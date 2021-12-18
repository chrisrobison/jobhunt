<?php
	require "vendor/autoload.php";

use DonatelloZa\RakePlus\RakePlus;

$text = "Skilled technology leader excelling in the rapid development of solutions to manage complex technical environments for growing companies, ranging from startups to billion dollar industry leaders. With over 20 years experience in the industry, I can build, develop and lead high-performance technical teams and effectively manage people and resources in-person and remotely across multiple geographic locations. My extensive experience allows me to leverage my business acumen and technical expertise to translate a technology needs into innovative solutions and actionable plans. Hands-on but I know how to delegate. I am just as comfortable managing people and engineering resources as I am hacking away at code. tl;dr: I build things that make companies go.";
$keywords = RakePlus::create($text)->keywords();
print_r($keywords);
?>
