<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="dist/app.css">
        <title></title>
    </head>
    <body>

      <header>
        <div class="container">
        <img src="img/logo.png" alt="logo">
        </div>

        <?php foreach ($database as $value) { ?>
        <div class="cds-container container">
          <div class="cd">
            <img src="<?php echo $value['poster']?>" alt="">
            <h3><?php echo $value['title']?></h3>
            <span class="author"><?php echo  $value['author']?></span>
            <span class="year"><?php echo $value['year']?></span>

        </div>
        <?php } ?>
      </div>

    </body>
</html>
