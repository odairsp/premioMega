<?php


namespace App\Caixa;


class Loteria
{
    /**
     * URL base da API de loterias da CAIXA
     * @var string
     */
    const URL_BASE = 'https://servicebus2.caixa.gov.br/portaldeloterias/api';


    public static function consultarResultado($loteria)
    {
        $endpoint = self::URL_BASE . "/" . $loteria;

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $endpoint);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $resposta = curl_exec($curl);

        curl_close($curl);

        echo "<pre>";
        print_r($resposta);
        // var_dump(file_get_contents($endpoint));
        echo "<pre>";
    }
}
