<?php
    function generatePasswordRandom() {

    $length = $_GET ['randomLenght'] ?? '';

    //consideriamo i caratteri da randommizzare
    $alfaNumber = "abcdefghijlmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVWXYZ0123456789_?*+&%!#@";
    $lenAlfaNumber = strlen($alfaNumber);
    $passRandom = "";
    $i=0;

    //vado a pescare i caratteri uno per uno finchè con raggiungo il valore di $length
    while($i<$length) {
        //con rand trovo l'indice casuale
        $numberRandom = rand(0,$lenAlfaNumber-1);
        $passRandom .= $alfaNumber[$numberRandom];
        $i++;
    }

    return $passRandom;
    }
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