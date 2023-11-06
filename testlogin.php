<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['nome_login']) || !isset($_POST['senha_login']))
        return;

    $username = $_POST['nome_login']; // Nome do campo do formulário
    $password = $_POST['senha_login'];

    $server = 'localhost'; // Substitua pelos valores reais do servidor MySQL
    $db_username = 'root'; // Substitua pelo nome de usuário do MySQL
    $db_password = ''; // Substitua pela senha do MySQL
    $dbname = 'bd'; // Substitua pelo nome do banco de dados

    $connect = mysqli_connect($server, $db_username, $db_password, $dbname);

    if (!$connect) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM usuarios WHERE nome_cad = '$username'";
    $result = mysqli_query($connect, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['senha_cad'])) {
            echo "Login bem-sucedido! Bem-vindo, " . $row['nome_cad'];
        } else {
            echo "Login e/ou senha incorretos.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    mysqli_close($connect);
}
?>
