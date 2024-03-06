<?php
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);

$insert = $db->insert("TESTE_FUNCIONAL", [
   "Serial"     => $_POST['Serial'],
   "TBurnin" => $_POST['TBurnin'],
   "TUsb"      => $_POST['TUsb'],
   #Se precisar, adicionar método Post
]);

echo "data saved";
