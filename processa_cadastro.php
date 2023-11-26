<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a senha

    // Conectar ao banco de dados
    $con = mysqli_connect('localhost', 'root', '', 'cad_usuario2');

    // Inserir os dados no banco de dados
    $query = "INSERT INTO cad_usuario2 (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    $result = mysqli_query($con, $query);

    if ($result) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($con);
    }
    

    mysqli_close($con);
}
?>
<button><a href="login.php">Clique para voltar</a></button>
