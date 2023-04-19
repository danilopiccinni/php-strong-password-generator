<?php

include './partials/functions.php' ;

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password completamente random</title>
</head>
<body>

    <h1>Password Casuale</h1>

    <h2>Password totalmente casuale</h2>

    <form action="recuperapassword2.php">
        <button name="randomLenght" value="<?php echo rand(5,15) ?>" type="submit">Richiedi password</button>
    </form>

    <div>
        <?php echo generatePasswordRandom(); ?>
    </div>
</body>
</html>