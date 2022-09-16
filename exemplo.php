<?php
    require_once "vendor/autoload.php";

    use \Wead\DigitalCep\Search;

    $busca = new Search;

    $resultado = $busca->getAddressFromZipCode('81610170');

    print_r($resultado);
?>