<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$maxLength = $array[0];
$minLength = $array[0];
foreach ($array as $str) {
    $length = strlen($str);
    if ($length > strlen($maxLength)) {
        $maxLength = $str;
    }
    if ($length < strlen($minLength)) {
        $minLength = $str;
    }
}

echo "Chuỗi lớn nhất là \"$maxLength\", độ dài = " . strlen($maxLength) . "\n";
echo "Chuỗi nhỏ nhất là \"$minLength\", độ dài = " . strlen($minLength) . "\n";
?>