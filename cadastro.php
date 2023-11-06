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
   
        <!--FORMULÁRIO DE CADASTRO-->
        <div class="content">   
        <div id="login">
          <form method="POST" action="_conexao.php"> 
            <h1>Cadastro</h1> 
             
            <p> 
              <label for="nome">Seu nome</label>
              <input id="nome" name="nome" required="required" type="text" placeholder="nome" />
            </p>
             
            <p> 
              <label for="email">Seu e-mail</label>
              <input id="email" name="email" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
            </p>
             
            <p> 
              <label for="senha">Sua senha</label>
              <input id="senha" name="senha" required="required" type="password" placeholder="ex. 1234"/>
            </p>
             
            <p> 
              <input type="submit" name="submit"  value="Cadastrar"/> 
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