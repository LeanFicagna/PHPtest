<?php

include_once  __DIR__ . '/../db/connection.php';

function array_to_xml( $data, &$xml_data ) {
    foreach( $data as $key => $value ) {
        if( is_array($value) ) {
            if( is_numeric($key) ){
                $key = 'item'.$key; //dealing with <0/>..<n/> issues
            }
            $subnode = $xml_data->addChild($key);
            array_to_xml($value, $subnode);
        } else {
            $xml_data->addChild("$key",htmlspecialchars("$value"));
        }
     }
}

$xml_data = new SimpleXMLElement('<?xml version="1.0"?><data></data>');

if(isset($_POST['cep'])){
    $sql = "select * from endereco where CEP = {$_POST['cep']}";


    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        $viaCep = $result->fetch_object();
        $cep = $viaCep->cep;
        $logradouro = $viaCep->logradouro;
        $complemento = $viaCep->complemento;
        $bairro = $viaCep->bairro;
        $localidade = $viaCep->localidade;
        $uf = $viaCep->uf;
        $ibge = $viaCep->ibge;
        $gia = $viaCep->gia;
        $ddd = $viaCep->ddd;
        $siafi = $viaCep->siafi;

        array_to_xml(array(
            'cep' => $cep,
            'logradouro' => $logradouro,
            'complemento' => $complemento,
            'bairro' => $bairro,
            'localidade' => $localidade,
            'uf' => $uf,
            'ibge' => $ibge,
            'gia' => $gia,
            'ddd' => $ddd,
            'siafi' => $siafi
        ), $xml_data);
    } else {
        array_to_xml(array('erro' => 'true'), $xml_data);
    }
} else {
    array_to_xml(array('erro' => 'true'), $xml_data);
}

echo $xml_data->asXML();
