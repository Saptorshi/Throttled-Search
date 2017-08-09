<?php

$static[] = "hello";
$static[] = "hell";
$static[] = "hi";
$static[] = "hexagonal";
$static[] = "heat up";

$result[] = "";

if(isset($_GET['text'])){
    $text = $_GET['text'];
    $text = strtolower($text);
    $len=strlen($text);
    foreach($static as $key) {
        if (stristr($text, substr($key, 0, $len))) {
            if ($result === "") {
                $result[] = $key;
            } else {
                $result[] = $key;
            }
        }
    }

}

unset($result[0]);
$result = array_values($result);

echo json_encode($result);
?>