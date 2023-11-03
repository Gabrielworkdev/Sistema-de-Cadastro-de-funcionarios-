<?php
$hostname = "localhost";
$user = "root";
$password ="";
$database = "cadastro";
$conn = mysqli_connect($hostname,$user,$password,$database);

if(!$conn){
    print "Falha na conexao com o banco de dados";
}
?>