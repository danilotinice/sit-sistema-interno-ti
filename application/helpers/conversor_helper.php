<?php

function formatarMoeda($preco) {
    // Notação Inglesa com separador de milhar
    $portuguese_format_number = number_format($preco, 2, ',', '.');
    return $portuguese_format_number; //retorna o valor formatado para gravar no banco 
}

function formatarData($data) {
    // Notação Inglesa com separador de milhar
    $portuguese_format_date = date("d/m/Y H:i:s", strtotime($data));
    return $portuguese_format_date; //retorna o valor formatado para gravar no banco 
}