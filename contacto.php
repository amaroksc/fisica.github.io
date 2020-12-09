<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$comment=$_REQUEST['comment'];


echo "<h2> Gracias por escribirnos $name <br>";
echo "Nuestra Empresa pronto se pondrá en contacto<br>";

$message=" Remitente:$name,su email:$email,Comentario: $comment";
mail("contacto.php","Mensaje del sitio web",$message);


?>