<?php
session_start();

//declarar variaveis
$username =  "";
$email = "";



//conexao á base de dados

$db = mysqli_connect('localhost','root','','bd') or die('Conexão falhada');




//verificação da conta
if(isset($_GET["vkey"])){
    $vkey1 = $_GET['vkey'];
    $resultSet = ("SELECT 1 FROM user WHERE verification=0 AND vkey='$vkey1' ");
    $result = mysqli_query($db, $resultSet);
    if(mysqli_num_rows($result) == 1){
        //validar email
        $update = $db->query("UPDATE user SET verification=1 WHERE vkey='$vkey1' LIMIT 1");
        if($update){
            echo '<script type="text/JavaScript">  
     window.alert("A sua conta foi verificada, já pode fazer o login")
     </script>';
        }else{
            echo '<script type="text/JavaScript">  
     window.alert("ERRO")
     </script>';
        }
    }else{
        echo '<script type="text/JavaScript">  
     window.alert("Erro")
     </script>';
    }
}






//registar utilizador
if(isset($_POST['register'])) {
    $username = mysqli_real_escape_string($db, $_POST['username2']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password1 = mysqli_real_escape_string($db, $_POST['password2']);
    $password2 = mysqli_real_escape_string($db, $_POST['passwordconfirmation']);
//validação do form
    if ($password1 != $password2) {
        echo '<script type="text/JavaScript">  
     window.alert("As passwords não coincidem")
     </script>';

    } else if(strlen($username) < 5){
        echo '<script type="text/JavaScript">  
     window.alert("Username necessita no minimo de 5 caracteres")
     </script>';
    } else{
        //verifcação de username na base de dados
        $user_check_query = "SELECT * FROM user WHERE username = '$username' or email= '$email' LIMIT 1";
        $results = mysqli_query($db, $user_check_query);
        if(mysqli_num_rows($results) > 0){
            $user = mysqli_fetch_assoc($results);
            if ($user['username'] == $username) {
                echo '<script type="text/JavaScript">  
     window.alert("Username existente, tente outro")
     </script>';
            }
            if ($user['email'] == $email) {
                echo '<script type="text/JavaScript">  
     window.alert("Email existente, tente outro")
     </script>';
            }
        }
        else{
            //se não houver erros, regista o utilizador
            $vkey = md5(time().$username);
            $password = password_hash($password1, PASSWORD_DEFAULT);
            $date = date('Y-m-d H:i:s');
            $query = "INSERT INTO user (username, email, password,vkey,date) VALUES ('$username','$email','$password','$vkey','$date')";
            $insert= mysqli_query($db, $query);
            if($insert){
               $to = $email;
                $assunto= "Verificação de email";
                $mensagem= "<p>Obrigado pelo seu registo no Piratehood<br>Para confirmar a sua conta carregue neste link:
                    <a href='http://localhost/index.php?vkey=$vkey'>Confirmar Registo</a></p>";
                $headers="From: joao.cristo112@gmail.com \r\n";
                $headers .= "MIME-Version: 1.0" . "\r\n";
                $headers .="Content-type:text/html;charset=UTF-8" ."\r\n";
                mail($to,$assunto,$mensagem,$headers);
                echo '<script type="text/JavaScript">
                     window.alert("Obrigado pelo registo, enviamos-lhe um email de confirmação")
                     </script>';
            }
        }
    }
}

if(isset($_POST['add_filme'])) {
    $image = mysqli_escape_string($db, $_POST['image']);
    $name = mysqli_escape_string($db, $_POST['name']);
    $genero = mysqli_escape_string($db, $_POST['genero']);
    $duracao= mysqli_escape_string($db, $_POST['duracao']);
    $releasedate = mysqli_escape_string($db, $_POST['releasedate']);
    $sql = "INSERT INTO `filmes` (`image`, `name`, `genero`, `duracao`, `releasedate`) VALUES ('$image', '$name', '$genero', '$duracao', '$releasedate');";
    $insert= mysqli_query($db,$sql);
    if ($insert) {
        echo '<script type="text/JavaScript">  
                         alert("Filme adicionado com sucesso")
                         </script>';
    } else {
        echo '<script type="text/JavaScript">  
                         alert("Erro")
                         </script>';
    }}

if(isset($_POST['add_serie'])) {
    $image = mysqli_escape_string($db, $_POST['image']);
    $name = mysqli_escape_string($db, $_POST['name']);
    $genero = mysqli_escape_string($db, $_POST['genero']);
    $episodios= mysqli_escape_string($db, $_POST['episodios']);
    $estreia = mysqli_escape_string($db, $_POST['estreia']);
    $sql = "INSERT INTO `series` (`image`, `name`, `genero`, `episodios`, `estreia`) VALUES ('$image', '$name', '$genero', '$episodios', '$estreia');";
    $insert= mysqli_query($db,$sql);
    if ($insert) {
        echo '<script type="text/JavaScript">  
                         alert("Série adicionado com sucesso")
                         </script>';
    } else {
        echo '<script type="text/JavaScript">  
                         alert("Erro")
                         </script>';
    }}
if(isset($_POST['add_realizador'])) {
    $image = mysqli_escape_string($db, $_POST['image']);
    $name = mysqli_escape_string($db, $_POST['name']);
    $nascimento = mysqli_escape_string($db, $_POST['nascimento']);
    $pais= mysqli_escape_string($db, $_POST['pais']);
    $maiorprojeto = mysqli_escape_string($db, $_POST['maiorprojeto']);
    $sql = "INSERT INTO `realizadores` (`image`, `name`, `nascimento`, `pais`, `maiorprojeto`) VALUES ('$image', '$name', '$nascimento', '$pais', '$maiorprojeto');";
    $insert= mysqli_query($db,$sql);
    if ($insert) {
        echo '<script type="text/JavaScript">  
                         alert("Realizador adicionado com sucesso")
                         </script>';
    } else {
        echo '<script type="text/JavaScript">  
                         alert("Erro")
                         </script>';
    }}
if(isset($_POST['add_ator'])) {
    $image = mysqli_escape_string($db, $_POST['image']);
    $name = mysqli_escape_string($db, $_POST['name']);
    $nascimento = mysqli_escape_string($db, $_POST['nascimento']);
    $altura= mysqli_escape_string($db, $_POST['altura']);
    $pais = mysqli_escape_string($db, $_POST['pais']);
    $sql = "INSERT INTO `atores` (`image`, `name`, `nascimento`, `altura`, `pais`) VALUES ('$image', '$name', '$nascimento', '$altura', '$pais');";
    $insert= mysqli_query($db,$sql);
    if ($insert) {
        echo '<script type="text/JavaScript">  
                         alert("Ator adicionado com sucesso")
                         </script>';
    } else {
        echo '<script type="text/JavaScript">  
                         alert("Erro")
                         </script>';
    }}
if(isset($_POST['add_estudio'])) {
    $image = mysqli_escape_string($db, $_POST['image']);
    $name = mysqli_escape_string($db, $_POST['name']);
    $fundacao = mysqli_escape_string($db, $_POST['fundacao']);
    $local= mysqli_escape_string($db, $_POST['local']);
    $sql = "INSERT INTO `estudios` (`image`, `name`, `fundacao`, `local`) VALUES ('$image', '$name', '$fundacao', '$local');";
    $insert= mysqli_query($db,$sql);
    if ($insert) {
        echo '<script type="text/JavaScript">  
                         alert("Estudio adicionado com sucesso")
                         </script>';
    } else {
        echo '<script type="text/JavaScript">  
                         alert("Erro")
                         </script>';
    }}
if(isset($_POST['edit_filme'])){
    $image = mysqli_escape_string($db, $_POST['image']);
    $name = mysqli_escape_string($db, $_POST['name']);
    $genero = mysqli_escape_string($db, $_POST['genero']);
    $duracao= mysqli_escape_string($db, $_POST['duracao']);
    $releasedate = mysqli_escape_string($db, $_POST['releasedate']);
    $sql = "UPDATE filmes  SET image='$image', name='$name', genero='$genero', duracao='$duracao',releasedate='$releasedate');";
    $resultado = mysqli_query($db,$sql);
    if ($resultado){
        echo '<script type="text/JavaScript">  
                         alert("Filme editado com sucesso")
                         </script>';
        header("Location:Backoffice.php");
    }else{
        echo '<script type="text/JavaScript">  
                         alert("ERRO")
                         </script>';
    }
}