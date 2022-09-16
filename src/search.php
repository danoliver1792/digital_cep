<?php namespace Wead\DigitalCep;
    class Search {
        private $url = "https://viacep.com.br/ws/"; //URL base

        //função que irá buscar o CEP:
        public function getAddressFromZipCode(string $zipCode): array{
            $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);
            //o que não for número vai ser substituído por vazio

            $get = file_get_contents($this->url . $zipCode . "/json");

            print_r($get);

            return (array) json_decode($get);
        }
        //$zipCode -> com código postal
    }
?>