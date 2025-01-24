<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$in = $_REQUEST;
$in["POSTED"] = file_get_contents('php://input');
$in["json"] = json_decode($in["POSTED"]);

$out = array();
if (array_key_exists("x", $in)) {
	switch ($in['x']) {
		case "letters":
			$out = getLetters();
			break;
		case "letter":
			$out = getLetter($in['letter']);
			break;
		case "saveLetter":
			$out = saveLetter($in);
			break;
	}
}

header("Content-type: application/json; charset=utf-8");
print json_encode($out, JSON_UNESCAPED_SLASHES);

function saveLetter($in) {
	global $in;

	$ltrs = getLetters();
	$lcnt = count($ltrs) + 1;

	$fn = "coverletter{$lcnt}.txt";
	file_put_contents("coverletters/$fn", $in['json']->letter);
    
	$out = new stdClass();

    if (!file_exists("coverletters/$fn")) {
        $out->status = "error";
        $out->error = "file not created";
    } else {
        $out->status = "ok";
    }
    $out->in = $in;
    $out->letter = $in['json']->letter;
    $ltrs = getLetters();
    $out->letters = $ltrs;
	
    return $out;
}

function getLetters() {
	$files = glob("coverletters/*");
	return $files;
}

function getLetter($letter) {
	$out = new stdClass();
	$out->letter = file_get_contents($letter);
	$out->template = $letter;

	return $out;
}
?>
