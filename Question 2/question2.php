<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Question 2</title>
</head>

<body>
    <div style="text-align: center">
        <h1>Veuiller entre un chiffre à additionner</h1>
        <form method="post">
            <label>Chiffre :</label>
            <input type="number" name="additionneur" /><br /><br />
            <button type="submit">Calculer</button><br />
        </form>
    </div>
    <?php
            if(isset($_POST['additionneur']))
            {
               $i = $_POST['additionneur'];
                echo $i*($i+1)/2;
            }
    ?>
</body>

</html>

