<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
        <?php foreach ($database as $k) { ?>
        <ul>
            <li><?php echo $k['title']?></li>
            <li><?php echo  $k['author']?></li>
            <li><?php echo $k['year']?></li>
            <li><img src="<?php echo $k['poster']?>" alt=""></li>
        </ul>
        <?php } ?>
    </body>
  </html>
