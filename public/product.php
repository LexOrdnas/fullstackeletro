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
    <div class="separator-medium">

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
            <p>Todos os direitos reservados para Alexsandro Marques</p>
         </div>
        <!-- Fim de Contatos -->
        </footer>
        <!-- Fim do Rodapé -->
        <script src="../assets/scripts/function.js"></script>
        <script src="https://kit.fontawesome.com/9fd7b899ce.js" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="https://unpkg.com/flickity-bg-lazyload@1/bg-lazyload.js"></script>
</body>
</html>