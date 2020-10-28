<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fseletro";

    // Criando a conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificando a conexão
    if(!$conn){
        die("A conexão falhou".mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Full Stack Eleto</title>
    <!-- Ícone do Site -->
    <link rel="shortcut icon" href="../assets/image/icons/stop-red-icon.png" type="image/png">
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- Links da Fonte Padrão no site da Google -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- JavaScript -->
    <script src="../assets/scripts/function.js" defer></script>
    <script src="https://kit.fontawesome.com/9fd7b899ce.js" crossorigin="anonymous" defer></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js" defer></script>
    <script src="https://unpkg.com/flickity-bg-lazyload@1/bg-lazyload.js" defer></script>
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
    <!-- Inicio das Categorias -->
    <aside id="category">
        <div rowspan="5" valign="top" width="20%">
            <p class="title-category">Categorias</p>
            <ul class="list-category">
                <li class="itens-category" onclick="showAll()">Todos</li>
                <li class="itens-category" onclick="showCategory('refrigerator')">Geladeiras</li>
                <li class="itens-category" onclick="showCategory('stove')">Fogões</li>
                <li class="itens-category" onclick="showCategory('dishwasher')">Lava-Louças</li>
                <li class="itens-category" onclick="showCategory('washing-machine')">Lavadora de Roupas</li>
                <li class="itens-category" onclick="showCategory('micro-wave')">Micro-Ondas</li>
            </ul>
        </div>
            <div class="box">
                <div class="box linha-vertical">
                </div>
            </div>
    </aside>
    <!-- Fim das Categorias -->
    <!-- Inicio do Conteúdo Principal -->
    <main>
        <article id="main-content">

            <?php
            $sql = "select * from product";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                while($rows = $result -> fetch_assoc()){
            ?>
            <div id="<?php echo $rows["categoria"]; ?>" class="block-product" onclick="noPageExists(alert)" onmouseover="colorChangeOver(this)" onmouseout="colorChangeOut(this)">
                    <img class="product-image" src="<?php echo $rows["imagem"]; ?>" alt="Geladeira">
                    <p class="product-title"><?php echo $rows["descricao"]; ?></p>
                    <!--
                    <p>02 Portas Frost Free</p>
                    <p>454 Litros Painel Eletrônico Inox</p>
                    -->
                    <div class="price-block">
                        <p class="strike"><?php echo $rows["preco"]; ?></p>
                        <p class="featured-text"><?php echo $rows["preco_venda"]; ?></p>
                    </div>
                    <hr class="price-separator">
                    <p class="sub-text">Até 12x de 299,99 sem juros</p>
                </div>
            <?php
                }
            } else {
                echo "Nenhum produto cadastrado!";
            }
            ?>  
                </div>
        </article>
    </main>
    <!-- Fim do Conteúdo Principal -->
    <!-- Inicio de Paginação -->
    <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
      </div>
    <!-- Fim de Paginação -->
    <!-- Inicio do Separador -->
    <div class="separator-medium"></div>
    <!-- Fim do Separador -->
    <!-- Inicio do Rodapé -->
    <?php
        include('footer.html');
    ?>
    <!-- Fim do Rodapé -->
</body>
</html>