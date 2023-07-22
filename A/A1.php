<?php
$arr = [2, 5, 6, 9, 2, 5, 6, 12, 5];
$sum = array_sum($arr);
$diff = $arr[0];
$product = array_product($arr);
$quotient = $arr[0];
foreach ($arr as $value) {
    $diff = $diff - $value;
    $quotient = $quotient / $value;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bài 1</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <p>Tổng các phần tử = <?= implode(" + ", $arr) ?> = <?= $sum ?></p>
    <p>Tích các phần tử = <?= implode(" * ", $arr) ?> = <?= $product ?></p>
    <p>Hiệu các phần tử = <?= implode(" - ", $arr) ?> = <?= $diff ?></p>
    <p>Thương các phần tử = <?= implode(" / ", $arr) ?> = <?= $quotient ?></p>
  </body>
</html>