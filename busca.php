<?php
require_once 'autoload.php';
use usuario;   
header("Access-Control-Allow-Origin: https://editor.swagger.io");

$cpf = $_GET['cpf'];
// Busca o usuário no arquivo
//echo "Este CPF:". $cpf . PHP_EOL;
$usuarios = [];
if (file_exists('usuarios.json')) {
    $usuarios = json_decode(file_get_contents('usuarios.json'), true);
}
foreach ($usuarios as $usuario) {
    //var_dump($usuario);
    if ($usuario['cpf'] == $cpf) {
        echo "Nome:  " . $usuario['nome'] . "<br>" . "CPF:  " . $usuario['cpf'] . "<br>" . 
             "Data de nascimento:  ". $usuario['data_nascimento']. "<br>";

        echo '<form action="busca.html" method="POST">';
        echo '<button type="submit">Voltar Busca</button>';
        echo '</form>';

        echo '<form action="index.html" method="POST">';
        echo '<button type="submit">Voltar Home</button>';
        echo '</form>';
        exit;
    }
}
echo 'Usuário não encontrado';
?> 

