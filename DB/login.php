<?php
include('config.php');
    session_start();

    if(isset($_POST['submit'])) {


    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
    
    $result = $mysqli->query($sql);

    if(mysqli_num_rows($result) < 1) {
        header('Location: /login/login.html');
    }                     
    else {
        header('Location: /logon/logonpag.html');
    }

    }
    
?>
    <script>
        window.location='/Logon/logonpag.html';alert('Entrada com sucesso!');
    </script>"