<?php
function generatePassword() {

    $length = $_GET['lenght'] ?? '';

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
    <title>Password casuale con scelta</title>
</head>
<body>

    <h1>Password casuale</h1>
    
    <h2>Password con scelta di lunghezza</h2>
    
    <form action="recuperapassword1.php">
        <input type="number" name="lenght">
        <button type="submit">richiedi password</button>
    </form>

    <div>
        <?php echo generatePassword(); ?>
    </div>

</body>
</html>