<?php


namespace App\Caixa;


class Loteria
{
    /**
     * URL base da API de loterias da CAIXA
     * @var string
     */
    const URL_BASE = 'https://servicebus2.caixa.gov.br/portaldeloterias/api/';



    public static function consultarResultado($loteria)
    {
        $endpoint = self::URL_BASE . $loteria;

        $curl = curl_init();
        curl_setopt_array(
            $curl,
            [
                CURLOPT_URL => $endpoint,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_CUSTOMREQUEST => 'GET'
            ]
        );

        $resposta = curl_exec($curl);

        curl_close($curl);

        echo "<pre>";
        var_dump($resposta);
        echo "<pre>";
    }
}
