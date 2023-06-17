<?php
include 'conexion.php';
$sql = "delete from links where id='$_REQUEST[id]'";
print $sql;
$db->query($sql);
print "<br>Borrado con éxito<br>";
print "<a href=index.php>Listar</a>";
?>
