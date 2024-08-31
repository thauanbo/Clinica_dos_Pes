<?php
include('config.php');

    if(isset($_POST['submit'])) {


    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $result = mysqli_query($mysqli, "INSERT INTO cadastro (id,nome,celular,email) VALUES ('$id','$nome','$celular','$email','$senha')");

    }
    
?>
    <script>
        window.location='/Login/login.html';alert('Cadrasto efetuado com sucesso!');
    </script>"