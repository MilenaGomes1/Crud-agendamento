<?php
    $server = "localhost:3306";
    $user = "root";
    $pass = "";
    $bd = "cadastropaciente";

$conexao = mysqli_connect($server, $user, $pass, $bd) or die ('Não é possivel conectar');

?>