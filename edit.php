<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
$retrieve = $db->retrieve("TESTE_FUNCIONAL/$id");
$data = json_decode($retrieve, 1);

?>
<form method="post" action="action_edit.php">
   <table border="0" width="500">
      <tr>
         <td>Srial</td>
         <td>:</td>
         <td><input type="text" name="Serial" value="<?php echo $data['title']?>"></td>
      </tr>
      <tr>
         <td>TBurnin</td>
         <td>:</td>
         <td><input type="text" name="TBurnin" value="<?php echo $data['thumbnail']?>"></td>
      </tr>
      <tr>
         <td>TUsb</td>
         <td>:</td>
         <td><input type="text" name="TUsb" value="<?php echo $data['year']?>"></td>
      </tr>
      <tr>
         <td>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <input type="submit" value="SAVE">
         </td>
      </tr>
   </table>
</form>

