<?php
include('config.php');

    if(isset($_POST['submit'])) {


    $nome = ($_POST['nome']);
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha' and nome = '$nome'";
    
    $result = $mysqli->query($sql);



    }
    
?>