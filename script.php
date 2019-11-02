<?php

    // Criar uma variável do tipo array (lista) de Categorias, para ficar dinâmico e facilitar a manutenção no futuro.
    $categorias = [];

    // Popular a variável criada.
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescente';
    $categorias[] = 'Adulto';
 // $categorias[] = 'Idoso';

    // Comando para testar a variável criada e ver como ficou.
    // print_r($categoria);

    // Criar 1 variável do tipo String e outra do tipo Número Inteiro.
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];


    // Validação dos dados digitados
    if(empty($nome))
    {
        echo 'O nome não pode ser vazio!';
        return;
    }

    if (strlen($nome) < 3)
    {
        echo 'O nome deve conter mais de 3 caracteres!';
        return;
    }

    if (strlen($nome) > 40)
    {
        echo 'O nome é muito extenso!';
        return;
    }

    if(!is_numeric($idade))
    {
        echo "Informe um nuúmero para idade!";
    }

     
    // Criar uma estrutura de condições para analisar o conteúdo da variável IDADE, e assim saber qual a categoria ela pertence.
    if ( $idade >= 6 && $idade <=12 ) 
    {
        // Criar uma estrutura de repetição (um laço) para analisar o conteúdo do array CATEGORIAS, e assim saber qual o conteúdo de cada posição do array,
        // e comparar até o último elemento do array.
        for ($i=0;  $i < count($categorias); $i++) 
        {
            if ( $categorias[$i] == 'Infantil') 
            {                
                echo 'O nadador '.$nome.' compete na categoria '.$categorias[$i];
            }
        };
    }
    elseif ($idade >= 13 && $idade <=18) 
    {
        for ($i=0; $i < count($categorias); $i++) 
        {
            if ( $categorias[$i] == 'Adolescente') 
            {                
                echo 'O nadador '.$nome.' compete na categoria '.$categorias[$i];
            }
        }
    }
    else 
    {
        for ($i=0;  $i < count($categorias); $i++) 
        {
            if ( $categorias[$i] == 'Adulto') 
            {                
                echo 'O nadador '.$nome.' compete na categoria '.$categorias[$i];
            }
        }
    } 






