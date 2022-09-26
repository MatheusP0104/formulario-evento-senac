<?php 
    if(isset($_POST['submit'])){
        // print_r($_POST['username']);
        // print_r('<br>');
        // print_r($_POST['email']);
        // print_r('<br>');
        // print_r($_POST['telefone']);
        // print_r('<br>');
        // print_r($_POST['feminino']);
        // print_r('<br>');
        // print_r($_POST['masculino']);

        include_once('config.php');

        $nome = $_POST['username'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $idade = $_POST['idade'];
        $genero = $_POST['genero'];
        $caixa = $_POST['caixa'];
        

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, idade, sexo, curso) VALUES ('$nome','$email','$telefone','$idade','$genero','$caixa')");

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animation.css">
    <link rel="shortcut icon" href="./ico-logo.png" type="image/x-icon">
    <title>Senac Minas</title>
</head>
<body>

 
     <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path class="onda1"fill="#E06410"   fill-opacity="1" d="M0,224L30,213.3C60,203,120,181,180,192C240,203,300,245,360,218.7C420,192,480,96,540,48C600,0,660,0,720,48C780,96,840,192,900,208C960,224,1020,160,1080,144C1140,128,1200,160,1260,160C1320,160,1380,128,1410,112L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        <path  class="onda2" fill="#F7941D" fill-opacity="1" d="M0,128L30,112C60,96,120,64,180,53.3C240,43,300,53,360,96C420,139,480,213,540,234.7C600,256,660,224,720,224C780,224,840,256,900,224C960,192,1020,96,1080,58.7C1140,21,1200,43,1260,53.3C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        <path  class="onda3"   fill="#FCC412"  fill-opacity="1" d="M0,0L30,0C60,0,120,0,180,48C240,96,300,192,360,234.7C420,277,480,267,540,218.7C600,171,660,85,720,85.3C780,85,840,171,900,176C960,181,1020,107,1080,112C1140,117,1200,203,1260,240C1320,277,1380,267,1410,261.3L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
    </svg>


    <img src="./logo.png" alt="logo_senac" class="logo">

    <main class="container">
        <h2>Formulário</h2>
        <form id="form" action="index.php" method="POST">
            <div class="input-field" >
                <input required type="text" name="username" id="username" class="inp1"  maxlength="37"   required autocomplete="off"  id="nome" placeholder="Nome">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="email" id="email" required autocomplete="off"   maxlength="27"  class="inp2"  placeholder="Email">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input required type="text" name="telefone" id="telefone" required  autocomplete="off"  placeholder="Telef. (00) 00000-0000" maxlength="15">
                <div class="underline"></div>
            </div>
            <div class="mini2">
                <p class="idade">Idade:</p>
                <div class="underline"></div>
                <div class="input-field  idadinpt">
                    <input type="text" name="idade" id="idade" class="idadeinpt" required  maxlength="2"  autocomplete="off"  onkeypress="return (ConsisteNumerico('2', this, event))">
                    
                </div>
            </div>
            <select name="caixa" id="select">
                <option>selecione o curso de interesse</option>
                <option>  Técnico em Administração</option>
                <option>  Técnico em Contabilidade</option>
                <option>  Técnico em Desenvolvimento de Sistemas</option>
                <option>  Técnico em Estética</option>
                <option>  Técnico em Informática</option>
                <option>  Técnico em Logística</option>
                <option>  Técnico em Marketing</option>
                <option>  Técnico em Recursos humanos</option>
                <option>  Técnico em Redes</option>
                <option>  Técnico em Segurança do Trabalho</option>
            </select>
            <div class="miniContainer">
            <p class="eit">Gênero:</p>
           
                <div class="input-field">
                    <input type="checkbox"  id="muie" name="genero"  value="feminino" onclick="marcaDesmarca(this)">
                    <label for="muie">Feminino</label>
                </div>
                <div class="input-field masc">
                    <input type="checkbox" id="masculino" name="genero" value="masculino" onclick="marcaDesmarca(this);">
                    <label for="masculino">Masculino</label>
                </div>
            </div>
            <div class="input-field">
                <input type="checkbox" name="termosUso"  onclick="actived()"  id="termo" value="termo">
                <label for="termo">Li e Aceito todos os <a  href="./terms.html" onclick="ShowModal()" target="_blank">termos de uso.</a></label>
            </div>
            <button type="submit" name="submit" id="btn"  onclick="confirmar()" disabled="disabled" value="Confirmar">Confirmar</button>
            
        </form>
       
    </main>
</body>
<script src="format.js"></script>
</html>