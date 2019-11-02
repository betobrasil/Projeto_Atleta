<?php
   // Iniciando uma Sessão.
   session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Inscrição</title>
</head>

<body>

    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

    <form action="script.php" method="post">
        
        <?php
            $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : ''; 
            if (!empty($mensagemDeSucesso))
            {
                echo $mensagemDeSucesso;
            }

            $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : ''; 
            if (!empty($mensagemDeErro))
            {
                echo $mensagemDeErro;
            }
        ?>
    
        <p>Seu nome: <input type="text" name="nome"/></p>
        <p>Sua idade: <input type="text" name="idade"/></p>
        <p><input type="submit" value="Enviar dados do competidor" /></p>
    
    </form>
    
</body>

</html>