<?php
require_once '../helpers/utilities.php';
require_once 'Transaccion.php';
require_once '../service/IServiceBase.php';
require_once 'TransaccionServiceFile.php';
require_once '../helpers/FileHandler/IFileHandler.php';
require_once '../helpers/FileHandler/JsonFileHandler.php';
require_once '../helpers/FileHandler/SerializationFileHandler.php';

$service = new TransaccionServiceFile();

$isContaintId = isset($_GET['id']);

if($isContaintId){
    $transaccionId = $_GET['id'];

    $service->Delete($transaccionId);
}

header("Location: ../index.php");
exit();

?>