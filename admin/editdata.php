<?php
//error_reporting(0);
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers");
header('Content-type: application/json');

require "../db/db.php";
$data = $_POST;
$jsonResponse['status'] = "failure";
if (isset($data['id'], $data['photo'], $data['kztheme'], $data['rutheme'], $data['entheme'], 
    $data['kztext'], $data['rutext'], $data['entext'])){
        $ok = R::exec("UPDATE `pages` SET `photo`=?, `name_kz`=?, `name_ru`=?, `name_en`=?, `kz`=?, `ru`=?, `en`=? WHERE id=? ;", 
                [$data['photo'], $data['kztheme'], $data['rutheme'], $data['entheme'], $data['kztext'], $data['rutext'], $data['entext'], $data['id']]);
    if ($ok) {
        $jsonResponse['status'] = "success";
    }
}

echo json_encode($jsonResponse, JSON_UNESCAPED_UNICODE);
