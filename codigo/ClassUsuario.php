<?php
 class Usuario{
     public $strNombre;
     public $strEmail;
     public $intEdad;
     public $strTipo;
     public $strClave;
     public $strFecha;

     function __construct(string $nombre, string $email, int $edad, string $tipo)
     {
         $this->strNombre = $nombre;
         $this->strEmail = $email;
         $this->intEdad = $edad;
         $this->strTipo = $tipo;
         $this->strClave = rand();
         $this->strFecha = date('Y-m-d H:m:s');
     }
 }

?>