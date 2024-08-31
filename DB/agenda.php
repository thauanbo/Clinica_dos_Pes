<?php
include('config.php');

    if(isset($_POST['submit'])) {


    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $result = mysqli_query($mysqli, "INSERT INTO agenda (id,nome,celular,email) VALUES ('$nome','$celular','$email')");

    }
    
?>
    <script>
        window.location='/pag/index.html';alert('Sua mensagem foi enviada com sucesso! Estaremos retornando em breve');
    </script>"