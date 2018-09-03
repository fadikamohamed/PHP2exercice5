<?php
    $gender = 'homme';
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <p>
    <?php
      if ($gender != 'homme') {
        echo 'C\'est une developpeuse !!!';
      } elseif ($gender = 'homme') {
        echo 'C\'est un developpeur !!!';
      } else {
        echo 'Mais qu\'etes vous ?';
      }
     ?>
   </p>
  </body>
</html>
