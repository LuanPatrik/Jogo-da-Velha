<?php
    $tabuleiro = $_POST['tabuleiro'];
    $jogadas = str_split($tabuleiro);
    $proxima_jogada = 'X';

    for ($i = 0; $i < count($jogadas); $i++) {
        if ($jogadas[$i] == '-') {
            $jogadas[$i] = $proxima_jogada;
            break;
        }
    }

    $proxima_jogada = ($proxima_jogada == 'X') ? 'O' : 'X';
    $tabuleiro = implode('', $jogadas);

    header("Location: index.php");
?>
