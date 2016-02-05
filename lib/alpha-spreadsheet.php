<?php
	// Composer's auto-loading functionality
	require "vendor/autoload.php";
	 
	use Google\Spreadsheet\DefaultServiceRequest;
	use Google\Spreadsheet\ServiceRequestFactory;
	 
	//
	/*
	 * Aquí van los datos de la sección credenciales del proyecto que creamos con Google Console
	 * Modificarlos según su propia direccion de correo y Id de cliente
	 */
	$nombreAplicacion = "Php-Spreadsheet";
	$direccionCorreo = "*user*@php-spreassheet.iam.gserviceaccount.com";
	$idCliente = "c779bbaa--RESTOMD5";
	 
	// Nombre del SpreadSheet creada
	$nombreSpreahSheet = "PHP & Spreadsheets";
	// Nombre de hoja de cálculo
	$hojaCalculo = "Usuarios";
	 
	$scope = array('https://spreadsheets.google.com/feeds');
	 
	// Inicializamos Google Client
	$client = new Google_Client();
	$client->setApplicationName($nombreAplicacion);
	$client->setClientId($idCliente);
	 
	// credenciales, scope y archivo p12. Agregar el correcto Path al archivo p12
	$cred = new Google_Auth_AssertionCredentials(
	 $direccionCorreo,
	 $scope,
	 file_get_contents('p12/Php-Spreassheet-c779bbaa2bbc.p12')
	);
	 
	$client->setAssertionCredentials($cred);
	 
	// si expiro el access token generamos otro
	if($client->isAccessTokenExpired()) {
	 $client->getAuth()->refreshTokenWithAssertion($cred);
	}
	 
	// Obtenemos el access token
	$obj_token = json_decode($client->getAccessToken());
	$accessToken = $obj_token->access_token;
	 
	// Inicializamos google-spreadsheet-client
	$serviceRequest = new DefaultServiceRequest($accessToken);
	ServiceRequestFactory::setInstance($serviceRequest);
	 
	//Obtenemos los Spreadsheets disponibles para las credenciales actuales
	$spreadsheetService = new Google\Spreadsheet\SpreadsheetService();
	$spreadsheetFeed = $spreadsheetService->getSpreadsheets();
	 
	// Obtenemos la spreadsheet por su nombre
	$spreadsheet = $spreadsheetFeed->getByTitle($nombreSpreahSheet);
	 
	// Obtenemos las hojas de cálculo de la spreadsheet obetenida
	$worksheetFeed = $spreadsheet->getWorksheets();
	 
	// Obtenemos la hoja de cálculo por su nombre
	$worksheet = $worksheetFeed->getByTitle($hojaCalculo);
	$listFeed = $worksheet->getListFeed();
?>