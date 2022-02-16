<!DOCTYPE html>>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Question 1</title>
</head>

<body>
    <div style="text-align: center">
        <h1>Veuiller entre un chiffre à multiplier</h1>
        <form method="post">
            <label>Chiffre :</label>
            <input type="number" name="multiplicateur" /><br /><br />
            <button type="submit">Calculer</button><br />
        </form>
    </div>
    <?php
            if(isset($_POST['multiplicateur']))
            {
                $multiplicateur = $_POST['multiplicateur'];
                echo "Table de " .$multiplicateur. "<br />";
                for($i = 0; $i<11; $i++)
                {
                    echo $multiplicateur." X ".$i." = ".$multiplicateur * $i."<br />";
                }
            }
        ?>
</body>

</html>