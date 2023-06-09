<?php

include "db_conf.php";

$inputJSON = file_get_contents('php://input');
$inputData = json_decode($inputJSON);

// Process the input data as needed
// ...

$response= $dbService->updateTask( $inputData->id, $inputData->check);
// Return a response to the client
//$response = "Data received: " . $inputData->id . ", " . $inputData->check;

echo json_encode($response);

