<?php

$taxas = array (
    'USD' => 6.00,
    'EUR' => 5.50,
    'GBP' => 6.30,
    'ARS' => 0.05

);

$valor_real = 100;

echo 'Valor em Dolar: R$ ' . number_format($valor_real / $taxas['USD'], 2, ',','.' ) . '<br>';
echo 'Valor em Euro: R$ ' . number_format($valor_real / $taxas['EUR'], 2, ',','.' ) . '<br>';
echo 'Valor em Libra: R$ ' . number_format($valor_real / $taxas['GBP'], 2, ',','.' ) . '<br>';
echo 'Valor em Peso Argentino: R$ ' . number_format($valor_real / $taxas['ARS'], 2, ',','.' ) . '<br>';