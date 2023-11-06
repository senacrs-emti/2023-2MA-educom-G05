<?php
include_once 'header.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_login = $_POST['nome']; // Corrigir o nome do campo do formulário
    $senha = $_POST['senha']; // Corrigir o nome do campo do formulário

    $server = 'localhost'; // Substitua pelos valores reais
    $username = 'root';
    $password = '';
    $dbname = 'bd';

    $conexao = mysqli_connect($server, $username, $password, $dbname); // MySQLi

    if (!$conexao) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }

    $query_select = "SELECT * FROM usuarios WHERE nome = '$nome_login'";
    $select = mysqli_query($conexao, $query_select);

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_assoc($select);
        if (password_hash($senha, PASSWORD_DEFAULT)){;//password_verify($senha, $row['senha'])) {
            session_start();
            $_SESSION['nome'] = $nome_login;
            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('Senha incorreta');window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('Usuário não encontrado');window.location.href='login.php';</script>";
    }

    mysqli_close($conexao);
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="content">      
            <!-- FORMULÁRIO DE LOGIN -->
            <div id="login">
                <form method="POST" action=""> 
                    <h1>Login</h1> 
                    <p>  
                        <label for="nome">Seu nome</label>
                        <input id="nome" type="text" name="nome" required="required" placeholder="ex. contato@htmlecsspro.com"/>
                    </p>
                     
                    <p> 
                        <label for="senha">Senha</label>
                        <input id="senha" name="senha" required="required" type="password" placeholder="ex. senha" /> 
                    </p>
                     
                    <p> 
                        <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
                        <label for="manterlogado">Manter-me logado</label>
                    </p>
                     
                    <p> 
                        <input type="submit" value="Logar" /> 
                    </p>
                     
                    <p class="link">
                        Ainda não tem conta?
                        <a href="cadastro.php">Cadastre-se</a>
                    </p>
                </form>
            </div>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>
