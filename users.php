<?php


$users = [
    ['id' => 1, 'name' => 'John Doe'],
    ['id' => 2, 'name' => 'Jane Doe'],
    ['id' => 3, 'name' => 'Alice'],
    ['id' => 4, 'name' => 'Bob'],
];

$response = [
    "status" => 200,
    "message" => "OK",
    "payload" => $users
];

http_response_code(200);
header('Content-Type: application/json');
echo json_encode($response);
exit;

?>