<?php
$arrs = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" =>
"Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" =>
"Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
"Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
"Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United
Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech
Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" =>
"Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bài 4</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <select name="" id="">
    <?php

            foreach($arrs as $key=> $value){
        ?>
                <option><?=$key?></option>
        <?php
            }
        ?>
    </select>
    <?php
        foreach($arrs as $key=> $value){
        ?>
           <p>Thủ đô của <?=$key?> là <?=$value?></p>
        <?php
        }
        ?>
  </body>
</html>