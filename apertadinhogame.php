<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Apertadinho</title>
    <style>
        p {
            font-family: Verdana, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
<?php
//inicia a sessão para guardar o número escolhido pelo PC
session_start();
//se o jogo não foi iniciado ainda, inicia a contagem de tentativas e sorteia o número
if (!isset($_SESSION['tentativa'])) {
    $_SESSION['tentativa'] = 1;
    $_SESSION['menor'] = 1;
    $_SESSION['maior'] = 100;
    $_SESSION['numero'] = rand(1,100);
}
//cria o formulário para interação
echo "
        <p>Adivinhe o número que eu estou pensando entre 1 e 100.</p><br>
<form action='#' method='post'>
    <input type='text' name='entrada' autofocus>
    <input type='submit' value='Tentar'>
</form><br/>
";



//se o usuário digitou algo e não foi a letra s
if (isset($_POST['entrada']) && strtoupper($_POST['entrada']) != "S") {
//lê a entrada do usuário
    $entrada = $_POST['entrada'];
//atualiza maior e menor
    if ( $entrada < $_SESSION['menor'] )
    {
        $_SESSION['menor'] = $entrada;
    }
    elseif ($entrada > $_SESSION['maior'])
    {
        $_SESSION['maior'] = $entrada;
    }
//se o número digitado for o mesmo que o sorteado exibe mensagem para reinício
    if ($_SESSION['numero'] == $entrada) {
        echo "<p>Parabéns, você acertou! O número era <strong>".$_SESSION['numero']."</strong>. &#128518; <br/>Foram usadas <strong>".$_SESSION['tentativa']."</strong> tentativas.<br/><br>Para jogar novamente digite <strong>S</strong>.</p>";
//se o número digitado for menor...
    }
    elseif ($_SESSION['numero'] > $entrada) {
        echo "<p>O número é maior que ".$entrada." e menor que ".$_SESSION['maior']."! &#128520;<br></p>";
        $_SESSION['menor'] = $entrada;
//se o número digitado for maior...
    } else {
        echo "<p>O número é menor que ".$entrada." e maior que ".$_SESSION['menor']."! &#128520;<br></p>";
        $_SESSION['maior'] = $entrada;
    }
    if (($_SESSION['menor'] + 2) == $_SESSION['maior']) {
        echo "<p><strong>Ops!!!</strong> Acho que alguem foi apertado. &#128517;<br/><br>Para jogar novamente digite <strong>S</strong>. &#128521;</p>";
    }
//incrementa a tentativa
    $_SESSION['tentativa']++;
//se o usuário digitou a letra s para começar de novo, destroi a variável de sessão com o número sorteado
} elseif (isset($_POST['entrada']) && strtoupper($_POST['entrada']) == "S") {
    unset($_SESSION['numero']);
    unset($_SESSION['tentativa']);
    unset($_SESSION['menor']);
    unset($_SESSION['maior']);
    session_destroy();
}
?>
</body>
</html>