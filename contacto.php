<?php
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];


echo "<h2> Gracias por escribirnos $name <br>";
echo "Nuestra Empresa pronto se pondrá en contacto<br>";
echo "gracias por tu comentario $email<br>";

$message=" Remitente: $name,su email:$email,Comentario: $comment";
mail("vdcloayza@gmail.com","Mensaje del sitio web",$message);


?>