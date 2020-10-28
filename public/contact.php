<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fseletro";

    // Criando a conexão
    $con = mysqli_connect($servername, $username, $password, $database) or die ("Erro de conexão");

    //if(isset($_POST['nome']) && isset($_POST['snome']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['mensagem'])){

        if(isset($_POST['submit'])){
            $nome = $_POST['nome'];
            $snome = $_POST['snome'];
            $sexo = $_POST['sexo'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $mensagem = $_POST['mensagem'];
            //$mensagem = $_POST['mensagem'];
            $query = mysqli_query($con, "INSERT INTO contact (nome,snome,sexo,email,telefone,cidade,estado,mensagem) VALUES ('$nome', '$snome', '$sexo', '$email', '$telefone', '$cidade', '$estado', '$mensagem')");
        }

    //}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Full Stack Eleto</title>
    <!-- Ícone do Site -->
    <link rel="shortcut icon" href="../assets/image/icons/stop-red-icon.png" type="image/png">
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="../assets/styles/main.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Links da Fonte Padrão no site da Google -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- JavaScript -->
    <script src="../assets/scripts/function.js" defer></script>
    <script src="https://kit.fontawesome.com/9fd7b899ce.js" crossorigin="anonymous" defer></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" defer></script>
</head>
<body>
    <!-- Inicio do Cabeçalho -->
    <header>
        <?php include('header.html'); ?>
    </header>
    <!-- Fim do Cabeçalho -->
    <!-- Inicio do Separador -->
    <div class="separator-large">

    </div>
    <!-- Fim do Separador -->
    <!-- Inicio de Formulário -->
    <?php include('contact-form.html');?>
    <!-- Fim do Formulário -->
    <!-- Inicio do Separador -->
    <div class="separator-medium">

    </div>
    <!-- Fim do Separador -->
    <!-- Inicio do Rodapé -->
    <?php
        include('footer.html');
    ?>
    <!-- Fim do Rodapé -->
</body>
</html>