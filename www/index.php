<?php


$controller = isset($_GET["controller"]) ? $_GET["controller"] : "index";
$action = isset($_GET["action"]) ? $_GET["action"] : "default";

// echo $controller;
// echo "/";
// echo $action;
// echo "<br>";

require("../controller/".$controller.".php");

$action_name = $controller."_".$action;
