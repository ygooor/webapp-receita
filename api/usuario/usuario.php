<?php
    class usuario{
        private $codigo = 0;
        private $nome ="";
        private $senha ="";
        private $email ="";

        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
        function __set($atributo, $valor){
            $this->$atributo = $valor;
    }
?>