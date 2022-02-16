<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Question 1.2</title>
</head>
<body>
<div style="text-align: center">
    
<?php
    $multiplicateur = 1;
    $n=1;
    $x=0;

    for($i = 0; $i<10; $i++) 
         { 
            echo "Table de " .$multiplicateur. "<br /><br />";

                 while($x <= 10)
                 {
                    $n = $multiplicateur*$x;
                    echo "<br />" .$multiplicateur." X ".$x." = ".$n."<br />";
                    $x++;
                 }

            $x=0;
            $multiplicateur++;
        }
?>
</div>
</body>
</html>