<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $sexo = $_POST['genero'];
        $data_de_nascimento = $_POST['data_de_nascimentoimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        
        $sqlInsert = "UPDATE cadastros 
        SET nome='$nome',senha='$senha',email='$email',cpf='$cpf',sexo='$sexo',data_de_nascimento='$data_de_nascimento',cidade='$cidade',estado='$estado',endereco='$endereco'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>