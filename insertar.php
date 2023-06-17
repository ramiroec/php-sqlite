<?php
include 'conexion.php';
if (!empty($_REQUEST))
{
$sql = "insert into links (url,title) values ('$_REQUEST[url]', '$_REQUEST[title]')";
//print $sql;
  
$db->query($sql);
print "<br>Guardado con exito<br>";
print "<a href=index.php>Listar</a>";
}
?>

  
<form>
Enlace: <input type="url" name="url">
<br>
Título: <input type="text" name="title">
<br>
Descripción: <textarea name="description"></textarea><br>
<input type=submit>
</form>


