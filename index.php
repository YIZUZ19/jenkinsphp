<?php
require_once ("ClassUsuario.php");

$objUsario1 = new Usuario("Jesus Jesuha De La","jesus@gmail.com",21,"Admin");
echo "Los datos del usuario 1 son: <br>";
echo "El nombre del usuario es: ".$objUsario1->strNombre."<br>";
echo "Su correo es: ".$objUsario1->strEmail."<br>";
echo "Su edad es: ".$objUsario1->intEdad."<br>";
echo "El tido de usuario es: ".$objUsario1->strTipo."<br>";
echo "La clave es: ".$objUsario1->strClave."<br>";
echo "La fecha de creacion es: ".$objUsario1->strFecha."<br>";
echo "<hr>";

$objUsario2 = new Usuario("Manuel Monzon","mm8a@gmail.com",22,"Cliente");
echo "Los datos del usuario 2 son: <br>";
echo "El nombre del usuario es: ".$objUsario2->strNombre."<br>";
echo "Su correo es: ".$objUsario2->strEmail."<br>";
echo "Su edad es: ".$objUsario2->intEdad."<br>";
echo "El tido de usuario es: ".$objUsario2->strTipo."<br>";
echo "La clave es: ".$objUsario2->strClave."<br>";
echo "La fecha de creacion es: ".$objUsario2->strFecha."<br>";
echo "<hr>";
?>