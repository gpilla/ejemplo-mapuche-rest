<?php
require_once('./vendor/autoload.php');

//use GuzzleHttp\Client;

// Configuracion
$url = 'https://mapuche.unx.edu.ar/siu/mapuche/rest/';
$username = 'elUsuario';
$password = 'laClave';

// Datos de ejemplo
$legajo = 12345; // Ejemplo
$recibo = 67890; // Ejemplo

$client = new GuzzleHttp\Client( array(
          'base_url' => $url,
          'defaults' => array(
		'auth' => array($username, $password, 'digest'),
		'timeout' => 10,
		'connect_timeout' => 5
		)));

$recibos = $client->get("agentes/{$legajo}/recibos")->json();
//var_dump($recibos);

// Baja un archivo
$archivoRecibo = $client->get("agentes/{$legajo}/recibos/$recibo/pdf")->getBody();
// Devuelve el binario del PDF, para que sea visible correctamente hay que mandar headers diciendo que es PDF y comentar el var_dump anterior!

header("Content-type:application/pdf");
header("Content-Disposition:inline;filename='$recibo.pdf");
echo $archivoRecibo;
