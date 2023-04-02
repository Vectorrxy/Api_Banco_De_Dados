<?php
echo "<table style='border-collapse: collapse;'>";
echo "<thead><tr><th>Nome</th><th>CPF</th><th>Data de Nascimento</th></tr></thead>";
echo "<tbody>";
// Aqui você pode inserir um loop para exibir os dados dos usuários
// Lista todos os usuários cadastrados
$usuarios = [];
if (file_exists('usuarios.json')) {
    $usuarios = json_decode(file_get_contents('usuarios.json'), true);
}
foreach ($usuarios as $usuario) {
    echo "<tr><td style='padding: 10px;'>". $usuario['nome'] . "</td><td style='padding: 10px;'>" . $usuario['cpf'] . "</td><td style='padding: 10px;'>". $usuario['data_nascimento']."</td></tr>";
}
echo "</tbody>";
echo "</table>";
echo '<form action="index.html" method="POST">';
echo '<button type="submit">Voltar Home</button>';
echo '</form>';
?>
