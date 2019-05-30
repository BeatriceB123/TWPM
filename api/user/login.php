<?php
/*
  Cum se foloseste api-ul asta: metoda POST, link-ul http://localhost/api/user/login.php
  si corpul json:
  {
	  "username" : "username",
	  "parola" : "parola"
  }
  Username-ul nu conteaza daca este cu litere mari sau nu, la login face lowercase de el
*/
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../objects/user.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

$data = json_decode(file_get_contents("php://input"));

if(!empty($data->username) && !empty($data->parola)) {
    $user->username = strtolower($data->username);
    $user->parola = $data->parola;
    $user->login();

    if($user->email !== null){
        http_response_code(201);
        echo json_encode(array("message" => "Successfully logged in."));
    } else {
        http_response_code(401);
        echo json_encode(array("message" => "Login failed. Incorrect username-password combination."));
    }
} else {
    http_response_code(400);
    echo json_encode(array("message" => "Login failed. Missing username or password."));
}
?>