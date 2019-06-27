<?php

$table= array(
    array("a1","a2"),
    array("b1","b2")
);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/table.css">
    <title>Document</title>
</head>
<body>
<table border=1>
    <?php foreach($table as $row){ ?>
    <tr>
        <?php foreach($row as $cel){ ?>
            <td><?= $cel?></td>
        <?php } ?>
    </tr>
    <?php } ?>
</table>

</body>
</html>