<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php foreach ($database as $key) { ?>
        <ul>
            <li><?php echo $key['title']?></li>
            <li><?php echo  $key['author']?></li>
            <li><?php echo $key['year']?></li>
            <li><img src="<?php echo $key['poster']?>" alt=""></li>
        </ul>
        <?php } ?>
    </body>
</html>
