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
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

        $resposta = curl_exec($curl) ? json_decode(curl_exec($curl), true) : [];
        // $resposta = curl_error($curl);
        // $resposta = file_get_contents('https://loterias.caixa.gov.br/Paginas/Mega-Sena.aspx');

        curl_close($curl);

        return $resposta;
    }
}