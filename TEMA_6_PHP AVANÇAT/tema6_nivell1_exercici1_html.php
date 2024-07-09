<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema6_Nivell1_exercici1</title>
    
</head>
<body>
    <form action="tema6_nivell1_exercici1_php.php" method="post"> <!--It can be done with GET method,-->
        <p>Nom:<input type="text" name="name"></p>                <!--but information sent will appear in url.-->
        <p>Dni:<input type="text" name="dni"></p>
        <p>Edat:<input type="number" name="age"></p>
        <p><input type="submit" value="Enviar"></p>
    </form>
</body>
</html>