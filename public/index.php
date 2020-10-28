<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Eleto - Eletrodomésticos</title>
    <meta name="description" content="Site para avaliação individual da Recode Pro 2020">
    <meta name="keywords" content="Full Stack Eletro, Recode Pro 2020">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Alexsandro da Silva Marques">
    <!-- Ícone do Site -->
    <link rel="shortcut icon" href="../assets/image/icons/stop-red-icon.png" type="image/png">
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Links da Fonte Padrão no site da Google -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Javascript -->
    <script src="https://kit.fontawesome.com/9fd7b899ce.js" crossorigin="anonymous" defer></script>
    <script src="../assets/scripts/function.js" defer></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js" defer></script>
    <script src="https://unpkg.com/flickity-bg-lazyload@1/bg-lazyload.js" defer></script>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
    <!-- Inicio do Cabeçalho -->
    <header>
        <?php include('header.html'); ?>
    </header>
    <!-- Fim do Cabeçalho -->
    <!-- Inicio do Separador -->
    <div class="separator-small">

    </div>
    <!-- Fim do Separador -->
    <!-- Inicio da Apresentação -->
    <div class="container text-center my-5">
        <p class="h2">Sejá bem-vindo(a) á Full Stack Eletro ! 😁</p>
        <p class="h4">Aqui em nossa loja, <i class="text-danger">programadores tem desconto</i> nos produtos em sua casa!</p>
    </div>
    <!-- Fim da Apresentação -->
    <!-- Inicio do Banner -->
    <div class="carousel" data-flickity='{ "bgLazyLoad": true }'>
        <div class="carousel-cell" 
        data-flickity-bg-lazyload="https://images.pexels.com/photos/1287150/pexels-photo-1287150.jpeg?cs=srgb&dl=pexels-lisa-fotios-1287150.jpg&fm=jpg"></div>
        <div class="carousel-cell" 
        data-flickity-bg-lazyload="https://images.pexels.com/photos/3773573/pexels-photo-3773573.png?cs=srgb&dl=pexels-curtis-adams-3773573.jpg&fm=jpg"></div>
        <div class="carousel-cell" 
        data-flickity-bg-lazyload="https://images.pexels.com/photos/4682124/pexels-photo-4682124.jpeg?cs=srgb&dl=pexels-curtis-adams-4682124.jpg&fm=jpg"></div>
    </div>
    <!-- Fim do Banner -->
    <!-- Inicio do Separador -->
    <div class="separator-medium">

    </div>
    <!-- Fim do Separador -->
    <main class="container">
        <img class="rounded mx-auto d-block" src="../assets/image/image-index.jpg" width="400px" alt="">
    </main>
    <!-- Inicio do Separador -->
    <div class="separator-small">

    </div>
    <!-- Fim do Separador -->
    <!-- Inicio do Rodapé -->
    <?php
        include('footer.html');
    ?>
    <!-- Fim do Rodapé -->
</body>
</html>