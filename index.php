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
    $nome = 'Roberto da Conceição Santos';
    $idade = 46;

    // Comando para testar a variável criada e mostrar o TIPO e o conteúdo.
    // var_dump($nome);
    // var_dump($idade);

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





