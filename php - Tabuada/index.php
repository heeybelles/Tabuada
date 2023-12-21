<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Tabuada - Exercício</title>
</head>

<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">PHP</span>
</nav>
<body> <br><br>
    <center>
    <h1>Tabuada</h1>
    <p>Escolha o número da tabuada desejada (for), se desejar ver todas as tabuadas, digite 0 (While)</p>
    <br>
    <fieldset>
        <br>
    <form action="index.php" method="get">
        <input type="number" name="numero" placeholder="Digite um número..."></input>
        <input type="submit" value="Procurar">
    </form>
   <br>
   
<?php

$numero=(int)$_GET['numero'];

if($numero >0 and $numero <11){
    for ($i =0; $i<11;$i++){
        echo "$i X $numero = " .$i*$numero ."<br>";
    }
}

else{

 
    $numero = 0;
    while ($numero <= 10) {
        $i = 1;
       
        while ($i <= 10) {
            echo "$i X $numero = " .$i*$numero ."<br>";
            $i += 1;
        }
        echo "<br>";
        $numero += 1; 
    }
}
?>
</center>
</fieldset>
<style>
    body{
        margin:0;
        padding: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    input{
        border:1px;
        outline: none;
        cursor: pointer;
        border-radius: 8px;
    }
</style>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>