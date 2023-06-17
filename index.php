<?php
include 'conexion.php';
$sql = "select * from links";
foreach($db->query($sql) as $fila)
{
 // $fila es un arreglo con los campos del select
 print "$fila[id] $fila[title] $fila[url] $fila[description]";
 print " <a href=borrar.php?id=$fila[id]>Borrar</a>";
 print " <a href=editar.php?id=$fila[id]>Editar</a>";  
 print "<hr>";
}
print "<a href=insertar.php>Insertar</a> ";
print "<a href=borrar-todo.php>Borrar Todo</a>";
?>
