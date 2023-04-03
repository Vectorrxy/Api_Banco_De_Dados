<?php
        require_once 'autoload.php';

        use usuario;    
        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $data_nascimento = $_POST['data_nascimento'];
        // Cria o objeto usuário
        $usuario = new Usuario($cpf,$nome,$data_nascimento);
        // Guarda o usuário em um arquivo
        $usuarios = [];
        if (file_exists('usuarios.json')) {
            $usuarios = json_decode(file_get_contents('usuarios.json'), true);
        }
        $usuarios[] = $usuario;
        echo __DIR__;
        file_put_contents('usuarios.json', json_encode($usuarios,JSON_PRETTY_PRINT));
        if(isset($usuario)) {
            echo 'Cadastrado com sucesso';
            echo '<form action="cadastro.html" method="POST">';
            echo '<button type="submit">Voltar Cadastro</button>';
            echo '</form>';
            echo '<form action="index.html" method="POST">';
            echo '<button type="submit">Voltar Home</button>';
            echo '</form>';
        }
    ?>