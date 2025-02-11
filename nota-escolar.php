<?php

$aluno = "Wesley";
$b1 = 8;
$b2 = 6;
$b3 = 9;
$b4 = 6;

$media_aluno = ($b1 + $b2 + $b3 + $b4)/4;

if ($media_aluno >= 7)
{
    echo 'O aluno ' . $aluno . ' foi aprovado com a média de ' . $media_aluno;
}
elseif ($media_aluno < 7 && $media_aluno > 5)
{
    echo 'O aluno ' . $aluno . ' está de recuperação com a média de ' . $media_aluno;
}
else
{
    echo 'O aluno ' . $aluno . ' foi reprovado com a média de ' . $media_aluno;
}