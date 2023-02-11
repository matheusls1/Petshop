<?php
    require_once('Connect.php');
    
    class Inserir{
//construtor lek
        public function cadastrar(

        Conexao $conexao,
            string $nomeDaTabela,
            string $nome,
            string $cpf,
            string $telefone,
            string $email,
            string $senha)
                  
    {   
        
        $nome       =  $_POST['tNome'];
        $cpf        = $_POST['tCpf'];
        $telefone   = $_POST['tTelefone'];
        $email      = $_POST['tEmail'];
        $senha      = $_POST['tSenha'];
        try
        {
            $conn = $conexao->Conectar();//abre a conexao
            $sql  = "insert into $nomeDaTabela (id, nome, cpf, telefone, email, senha) 
            values ('','$nome','$cpf','$telefone','$email','$senha')";//escreve o script
            $result = mysqli_query($conn,$sql);//executa a ação acima.
            if($result){
                echo "<br><br>Foi inserido kekw!";
            }

            return;//fechano
        }
        catch(Exception $erro)
        {
            echo $erro;
        }//fim do try catch
    }//fim do cadastrar
    //fim da classe
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Healthy Mind</title>
	<link rel="stylesheet" type="text/css" href="../css/cadastro.css    ">

	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
	<!----1 parte---->

	<div class="hero">
		<nav>
			<h2 class="logo"><span>VET e AMOR</span></h2>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="sobre.php">SOBRE NÓS</a></li>
				<li><a href="#entreemcontato">CONTATO</a></li>
				<li><a href="cadastro.php">CADASTRE-SE</a></li>
			
			</ul>
			<a href="login.html" class="btn">Login</a>
		</nav>

		
    


    <h3>Cadastre-se</h3>
    <fieldset class="container">
        <form method="POST">
            


            <div class="input-field">

                <input type="text" name="tNome"

                    placeholder="Digite seu Nome">

                <div class="underline"></div>

            </div>

            <div class="input-field">

                <input type="number"   name="tCpf"

                    placeholder="Digite seu Cpf">

                <div class="underline"></div>

            </div>

            <div class="input-field">

                <input type="text"  name="tTelefone"

                    placeholder="Digite seu telefone">

                <div class="underline"></div>

            </div>

            <div class="input-field">

                <input type="email"  name="tEmail"

                    placeholder="Digite seu email ">

                <div class="underline"></div>

            </div>

            <div class="input-field">

                <input type="password"  name="tSenha"

                    placeholder="Digite sua senha ">

                <div class="underline"></div>

            </div>


            

            <br>
            
            <div id="campo">
                <button><h10 href="--------">Enviar</h10></button>
            </div>
        
            
            <?php
            if($_POST['tNome'] != "" && $_POST['tCpf'] != 0 && $_POST['tTelefone'] != ""&& $_POST['tEmail'] != ""&& $_POST['tSenha'] != ""){
                $conexao = new Conexao();
                $cad     = new Inserir();
                echo $cad->cadastrar($conexao, "cliente",$_POST['tNome'],$_POST['tCpf'],$_POST['tTelefone'],$_POST['tEmail'],$_POST['tSenha']);
                return;
            }
            echo "Erro, preencha o campo!";

            ?>

            
        </form>
        

        
    </fieldset>
    </div>
        

	


</body>
</html>

