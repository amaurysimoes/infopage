<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_POST['id'];
$update = $db->update("TESTE_FUNCIONAL", $id, [
   "Serial"     => $_POST['Serial'],
   "TBurnin" => $_POST['TBurnin'],
   "TUsb"      => $_POST['TUsb'],
   #Se precisar, adicionar método post
]);

echo "data updated";