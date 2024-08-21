<?php
$perguntas = array(
    "Quantas Champions tem o Cristiano Ronaldo?",
    "Qual das construções faz a separação em pares chave-valor?",
    "Quanta carga o autor aguenta no supino reto?",
    "Qual é o melhor curso do Colégio Técnico - UFMG?",
    "Quanto é e^iπ"
);

$alternativas = array(
    array(
        "3",
        "4",
        "5",
        "6"
    ),
    array(
        "<code>foreach(\$alternativa[\$i] as \$alternativa => \$resposta)</code>",
        "<code>foreach(\$alternativa[\$i] => \$alternativa && \$resposta)</code>",
        "<code>foreach(\$alternativa[\$i] as \$alternativa->\$resposta)</code>",
        "<code>foreach(\$alternativa[\$i] => \$alternativa, \$resposta)</code>"
    ),
    array(
        "50kg",
        "60kg",
        "70kg",
        "75kg"
    ),
    array(
        "Automação Industrial",
        "Eletrônica",
        "Química",
        "Desenvolvimento de Sistemas"
    ),
    array(
        "-1",
        "log(0,1)",
        "-lim{x -> 0}(sinx/x)",
        "cos(π) + isin(π)"
    )
);

$gabarito = array(2, 0, 2, 3, 0);
?>