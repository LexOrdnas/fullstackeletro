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
    <!-- Links da Fonte Padrão no site da Google -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Inicio do Cabeçalho -->
    <?php
        include('header.html');
    ?>
    <!-- Fim do Cabeçalho -->
    <!-- Inicio da Apresentação -->
    <div class="welcome">
        <h2>Sejá bem-vindo(a) á Full Stack Eletro ! 😁</h2>
        <p>Aqui em nossa loja, <i>programadores tem desconto</i> nos produtos em sua casa!</p>
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
    <div class="separator-large">

    </div>
    <!-- Fim do Separador -->
    <!-- Inicio do Rodapé -->
    <footer>
    <!-- Inicio de Formas de Pagamento -->
    <div id="forms-payment">
        <p class="featured-text">Formas de pagamento</p>
        <img class="image-form-of-payment" src="../assets/image/formas-pagamento.png" alt="Formas de pagamento">
    </div>
        <!-- Fim de Formas de Pagamento -->
        <!-- Inicio de Endereços -->
        <div id="address">
            <div class="locality">
                <h3>Rio de Janeiro</h3>
                <p>Avenida de São João, 500</p>
                <p>10° Andar, Prédio AA</p>
                <p>Centro</p>
                <p>11 4512-4554</p>
            </div>
            <div class="locality">
                <h3>Rio de Janeiro</h3>
                <p>Avenida de São João, 500</p>
                <p>10° Andar, Prédio AA</p>
                <p>Centro</p>
                <p>11 4512-4554</p>
            </div>
            <div class="locality">
                <h3>Rio de Janeiro</h3>
                <p>Avenida de São João, 500</p>
                <p>10° Andar, Prédio AA</p>
                <p>Centro</p>
                <p>11 4512-4554</p>
            </div>
        </div>
        <!-- Fim de Endereços -->
        <!-- Inicio de Contatos -->
        <div id="contact">
             <div>
                 <img src="../assets/image/icons/email.png" alt="E-mail">
                 <p>contato@fullstackeletro.com</p>
             </div>
             <div class="locality">
                 <img src="../assets/image/icons/whatsapp.png" alt="whatsapp">
                 <p>(11) 99999-9999</p>
             </div>        
         </div>
         <div id="bottom-footer">
            <p>&copy;2020 - Todos os direitos reservados para Alexsandro Marques</p>
         </div>
        <!-- Fim de Contatos -->
        </footer>
        <!-- Fim do Rodapé -->
        <script src="https://kit.fontawesome.com/9fd7b899ce.js" crossorigin="anonymous"></script>
        <script src="../assets/scripts/function.js"></script>
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="https://unpkg.com/flickity-bg-lazyload@1/bg-lazyload.js"></script>
</body>
</html>