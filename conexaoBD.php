<?
/* Arquivo de conexao com o banco de dados */

$conexao = mysqli_connect("localhost","grupo_bd","12345","trab_bd");
if(!$conexao){
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>