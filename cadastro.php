<?php
include_once 'header.php';
?>

<link rel="stylesheet" href="style.css">
   
        <!--FORMULÁRIO DE CADASTRO-->
        <div class="content">   
        <div id="login">
          <form method="POST" action="processa_cadastro.php"> 
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