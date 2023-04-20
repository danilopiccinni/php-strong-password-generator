<?php 
    include './partials/functions.php' ;

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizza passowrd</title>

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
    <div class="sign-in-page">
        <div class="cont">
            <span>La tua password temporanea è </span>
            <h3><?php echo $_SESSION['password'] ?></h3>
        </div>

        <div class="cont">
            <a href="index.php">torna alla home</a>
        </div>
    </div>

</body>
</html>
