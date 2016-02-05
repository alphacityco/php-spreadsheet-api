<?php
// Composer's auto-loading functionality
require "lib/alpha-spreadsheet.php";

 
/*
 * Array de datos a agregar.
 * Observar que el valor de la claves del array que representan los encabezados
 * de las columnas van en minúsculas, en vez de Email sería email.
 * Esto es porque los encabezados de columna deben coincidir exactamente
 * con lo que fue devuelto por la API de Google y no por lo que se ve en Google Drive.
 */
 
 $dataAgregar = array('nombre' => 'Django',
 'email' => 'pacho@ppe.com',
 'telefono' => '1567890'
 );
 
// Agregar datos
$listFeed->insert($dataAgregar);
?>