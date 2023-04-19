<?php

    include './partials/functions.php' ;

    $lenght = $_GET['lenght'] ?? '' ; 
    
    if($lenght != null) {
        $passwordgenerata = generatePassword();

    }

    if(isset($passwordgenerata)) {
        $_SESSION['password'] = $passwordgenerata;

        header('Location: visualizzapassword.php');
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

    </div>
    
</body>
</html>

