<?php


class viaCepService
{
    public static function getCep($cep)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [CURLOPT_URL => "viacep.com.br/ws/$cep/json/",
                                  CURLOPT_RETURNTRANSFER => true,
                                  CURLOPT_CUSTOMREQUEST => 'GET']);

        $response = curl_exec($curl);
        curl_close($curl);

        $responseArray = json_decode($response, true);

        if(isset($responseArray['cep']))
        {
            return $responseArray;
        }else
        {
            return false;
        }
    
    }
}
