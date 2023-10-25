<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="header-content">
            <h1><a href="index.html">𝟑𝐃-𝐒𝐜𝐢𝐞𝐧𝐜𝐞 𝐋𝐚𝐛</a></h1>
        </div>
    </header>

    <nav>
        <ul class="nav-list">

            <li><a href="bio.html">Biologia</a></li>
            <li><a href="quim.html">Química</a></li>
            <li><a href="fis.html">Física</a></li>
        </ul>
        <div class="search-bar">
            <button class="search-button">Buscar</button>
            <input type="text" placeholder="Pesquisar...">
        </div>
    </nav>
<main>
    <div class="content">      
        <!--FORMULÁRIO DE LOGIN-->
        <div id="login">
          <form method="post" action=""> 
            <h1>Login</h1> 
            <p> 
              <label for="nome_login">Seu nome</label>
              <input id="nome_login" name="nome_login" required="required" type="text" placeholder="ex. contato@htmlecsspro.com"/>
            </p>
             
            <p> 
              <label for="email_login">Seu e-mail</label>
              <input id="email_login" name="email_login" required="required" type="password" placeholder="ex. senha" /> 
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
              <a href="#paracadastro">Cadastre-se</a>
            </p>
          </form>
        </div>
   
        <!--FORMULÁRIO DE CADASTRO-->
        <div id="cadastro">
          <form method="post" action=""> 
            <h1>Cadastro</h1> 
             
            <p> 
              <label for="nome_cad">Seu nome</label>
              <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="nome" />
            </p>
             
            <p> 
              <label for="email_cad">Seu e-mail</label>
              <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
            </p>
             
            <p> 
              <label for="senha_cad">Sua senha</label>
              <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234"/>
            </p>
             
            <p> 
              <input type="submit" value="Cadastrar"/> 
            </p>
             
            <p class="link">  
              Já tem conta?
              <a href="login.php"> Ir para Login </a>
            </p>
          </form>
        </div>
      </div>
    </div>  
</main>
    <footer>
        - &copy; 2023 - Data
    </footer>

    <script src="script.js"></script>
</body>

</html>