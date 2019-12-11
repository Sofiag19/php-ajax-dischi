<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>CON PHP</title>
    <?php include 'data.php'; ?>
  </head>
  <body>

    <header>
      <img src="https://images-eu.ssl-images-amazon.com/images/I/51rttY7a%2B9L.png" alt="">
    </header>

    <div id="container-dischi">

      <?php

        foreach ($database as $disco) {
          ?>
          <div class="thumb-disco">
            <img src="<?php echo $disco['poster']; ?>" alt="">
            <h2><?php echo $disco['title']; ?></h2>
            <h4><?php echo $disco['author']; ?></h4>
            <p><?php echo $disco['year']; ?></p>
          </div>
          <?php
        }

      ?>

    </div>


  </body>
</html>
