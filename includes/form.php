<?php
header("Location: https://craig-hutcheon.uk/contact-me.php");
require_once '../config.php';
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$query = htmlspecialchars($_POST["query"]);

$formData = array("name"=>$name, "email"=>$email, "query"=>$query);
$form = array("form"=> $formData);
$jsonForm = json_encode($form);

$result = $api->postForm($jsonForm);
exit;

