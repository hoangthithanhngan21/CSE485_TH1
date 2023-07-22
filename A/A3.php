<?php
$arr = ['PHP','HTML','CSS','JS'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bài 3</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <table border="2">
        <tr>
            <td>Tên khóa học</td>
        </tr>
        <tr>
            <td><?= $arr[0] ?></td>
        </tr>
        <tr>
            <td><?= $arr[1] ?></td>
        </tr>
        <tr>
            <td><?= $arr[2] ?></td>
        </tr>
        <tr>
            <td><?= $arr[3] ?></td>
        </tr>
    </table>
  </body>
</html>