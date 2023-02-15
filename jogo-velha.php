<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/jogo-velha.css">
    <title>Jogo da Velha</title>
</head>
<body>
    <div class="voltar">
        <a href="./index.php"><img src="./image/voltar.png" alt="Voltar"></a>
    </div>
    <div class="matriz">
        <div class="linha">
            <div class="casa" id="casa1"><?php marcar()?></div>
            <div class="casa" id="casa2"></div>
            <div class="casa" id="casa3"></div>
        </div>
        <div class="linha">
            <div class="casa" id="casa4"></div>
            <div class="casa" id="casa5"></div>
            <div class="casa" id="casa6"></div>
        </div>
        <div class="linha">
            <div class="casa" id="casa7"></div>
            <div class="casa" id="casa8"></div>
            <div class="casa" id="casa9"></div>
        </div>
    </div>
</body>

<?php
    $jogador1 = filter_input(INPUT_POST, 'nome1');
    echo 'Nome: '.$jogador1;
    $cont = 1;
    function marcar(){
        if ($jogador == 1 && $cont == 1) {
            ?>
            <img src="./image/x.png" alt="">
            <?php
        }
    }
?>
</html>