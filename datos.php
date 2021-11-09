<?php 

require_once __DIR__ . '/vendor/autoload.php';


$client = new MongoDB\Client(
    'mongodb+srv://Daniel:<12342234>@cluster0.y2xfg.mongodb.net/MultimediaS?retryWrites=true&w=majority');

$tb=$client->MultimediaS->puntaje;

$registro=array(
    "iduser"=>"1458",
    "fecha"=>"1/1/2031",
    "puntaje"=>"1458"
);

$resultado=$tb->insertOne($registro);
echo $resultado->getInsertedCount();




?>