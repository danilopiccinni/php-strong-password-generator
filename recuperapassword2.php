<?php

include './partials/functions.php' ;

$lenght = $_GET['randomLenght'] ?? '' ; 

if($lenght != null) {
    $passwordgenerata = generatePasswordRandom();

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
    <title>Password completamente random</title>

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <h1>Password Casuale</h1>

    <h2>Password totalmente casuale</h2>



    <div class="sign-in-page">
        <div class="cont">
            <span>Per recuperare la tua password necessiti di una password temporanea che puoi generare qui </span>
        </div>

        <div class="cont">
            <span>Clicca il pulsante qui sotto per generare una password temporanea</span>
            <form action="recuperapassword2.php">
                <button name="randomLenght" value="<?php echo rand(5,15) ?>" type="submit">Richiedi password</button>
            </form>
        </div>
    </div>
                

</body>
</html>
