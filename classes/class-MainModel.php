<?php
class MainModel
{
	public $form_data;
	public $form_msg;
	public $form_confirma;
	public $controller;
	public $parametros;
	public $userdata;
	public function validar_codigo($codigo){
		$number = 0;
		$chamada_externa = curl_init(API_URL);
		curl_setopt($chamada_externa, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($chamada_externa, CURLOPT_HTTPHEADER, array(
		   'Content-Type: application/json',
		   'Authorization: Bearer ' . API_TOKEN
		   ));
		$url = curl_exec($chamada_externa);
		curl_close($chamada_externa);
		return json_decode($url);
        $resultado = json_decode($url);
        foreach($resultado->data as $api){
            if ($codigo == $api->codigo ){
                $number = $number + 1;
            }				
        }		
		return $number;
	}	

} 