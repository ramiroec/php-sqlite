<?php
include 'conexion.php';
if (!empty($_REQUEST['enviar']))
{
include 'conexion.php';
$sql = "update links set url='$_REQUEST[url]', title='$_REQUEST[title]',description='$_REQUEST[description]' where id='$_REQUEST[id]'";
//print $sql;
$db->query($sql);
print "<br>Guardado con exito<br>";
print "<a href=index.php>Listar</a>";
die; //Terminar aquí el programa.
}
$sql = $db->query("select * from links where id='$_REQUEST[id]'");
$fila = $sql->fetch();
?>
<form>
Id: <input readonly type="number" name="id" value=<?php print $fila['id'];?>><br>
Enlace: <input type="url" name="url" value=<?php print $fila['url'];?>><br>
Título: <input type="text" name="title" value=<?php print $fila['title'];?>><br>
Descripción: <textarea name="description"><?php print $fila['description'];?></textarea><br>
<input type=submit name=enviar>
</form>