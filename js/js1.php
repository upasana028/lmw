<?php
include_once("/home/learnmyway/_lmwa/auth.php");
#file_put_contents("debugt.txt",implode($_SESSION)."\n",FILE_APPEND);
$fnc = ($_POST["flag"]);

if(isset($_POST["paramjs"])){
  $id = json_decode($_POST["paramjs"],true)["id"];
  $pass = "";
}
else{
  $id = $_POST["params"][id];
  $pass = $_POST["params"][pass];
}
echo $fnc($_COOKIE,$id,$pass);
die();