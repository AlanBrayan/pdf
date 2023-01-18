<?php 
    // importando el archivo principal de las librerias de composer
    require_once __DIR__ . '/vendor/autoload.php';
    // Crear instancia de la clase mpdf


    $mpdf = new \Mpdf\Mpdf([
        'default_font_size' => 8.1,
        'default_font' => 'dejavusans'
    ]);

    // include 'lista/1-comando-php.php';
    // include 'lista/2-etiqueta-html.php';
    // include 'lista/3-tabla.php';
    include 'lista/4-tabla-2.php';

    

?>