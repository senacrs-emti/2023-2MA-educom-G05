<?php
include_once 'header.php';
?>

<link rel="stylesheet" href="style.css">

<body>
    <main>
        <div class="content">      
            <!-- FORMULÁRIO DE LOGIN -->
            <div id="login">
                <form method="POST" action="processa_login.php"> 
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
    
    <?php
include_once 'footer.php';
?>
</body>

