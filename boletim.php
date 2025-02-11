<?php

$alunos = [
    [
        'nome' => 'Joao <br>',
        'materia' => 'Portugues <br>',
        'nota' => 10 . '<br>',
    ],

    [
        'nome' => 'Jose <br>',
        'materia' => 'Portugues <br>',
        'nota' => 8 . '<br>',
    ],

    [
        'nome' => 'Wesley <br>',
        'materia' => 'Portugues <br>',
        'nota' => 7 . '<br>',
    ],
];



foreach ($alunos as $aluno){
    echo  'nome' . $aluno['nome'] . '<br>';
    echo  'materia' . $aluno['materia'] . '<br>';
    echo  'nota' . $aluno['nota'] . '<br>';
};

if ($aluno['nota'] >= 7) {
    echo "O aluno está Aprovado";
    echo "<br><br>";
}
elseif($aluno['nota'] < 7 && $aluno['nota'] > 4) {
    echo "O aluno está em recuperação";
    echo "<br><br>";
}
else{
    echo "O aluno está reprovado";
    echo "<br><br>";
}