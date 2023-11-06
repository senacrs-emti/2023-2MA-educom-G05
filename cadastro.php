<?php
include_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_cad = $_POST['nome_cad'];  // Nome do campo do formulário
    $senha_cad = $_POST['senha_cad']; 

    
    if (!$connect) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }

    $query_select = "SELECT nome_cad FROM usuarios WHERE nome_cad = '$nome_cad'";
    $select = mysqli_query($connect, $query_select);

    if (mysqli_num_rows($select) > 0) {
        echo "<script>alert('Esse nome de usuário já existe');window.location.href='cadastro.html';</script>";
    } else {
        // Use password_hash para criar um hash seguro da senha antes de armazená-la no banco de dados
        $senha_hashed = password_hash($senha_cad, PASSWORD_BCRYPT);
        $query = "INSERT INTO usuarios (nome_cad, senha_cad) VALUES ('$nome_cad', '$senha_hashed')";
        $insert = mysqli_query($connect, $query);

        if ($insert) {
            echo "<script>alert('Usuário cadastrado com sucesso!');window.location.href='login.html';</script>";
        } else {
            echo "<script>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html';</script>";
        }
    }

    mysqli_close($connect);
}
?>