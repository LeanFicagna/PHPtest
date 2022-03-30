<?php

include_once  __DIR__ . '/../db/connection.php';

if(isset($_POST['cep']) && isset($_POST['logradouro']) && isset($_POST['complemento']) &&
        isset($_POST['bairro']) && isset($_POST['localidade']) && isset($_POST['uf']) &&
        isset($_POST['ibge']) && isset($_POST['gia']) && isset($_POST['ddd']) &&
        isset($_POST['siafi']) ){
    $sql = "insert into endereco 
                    (cep,
                    logradouro,
                    complemento,
                    bairro,
                    localidade,
                    uf,
                    ibge,
                    gia,
                    ddd,
                    siafi) 
                values
                    ('{$_POST['cep']}',
                    '{$_POST['logradouro']}',
                    '{$_POST['complemento']}',
                    '{$_POST['bairro']}',
                    '{$_POST['localidade']}',
                    '{$_POST['uf']}',
                    '{$_POST['ibge']}',
                    '{$_POST['gia']}',
                    '{$_POST['ddd']}',
                    '{$_POST['siafi']}')";


    $result = $mysqli->query($sql);
}