<?php 
$id =$_POST['Entry_id'];

require_once 'connect.php';


$sql = "DELETE FROM Entry WHERE id = $id";
$db-> query($sql);
echo "Datensatz gelöscht: " . $db-> affected_rows;

$db-> close();
?>
<p><a href="./">Zurück</a></p>