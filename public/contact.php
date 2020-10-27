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
    <!-- Links da Fonte Padrão no site da Google -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- JavaScript -->
    <script src="../assets/scripts/function.js" defer></script>
    <script src="https://kit.fontawesome.com/9fd7b899ce.js" crossorigin="anonymous" defer></script>
</head>
<body>
    <!-- Inicio do Cabeçalho -->
    <?php
        include('header.html');
    ?>
    <!-- Fim do Cabeçalho -->
    <!-- Inicio do Separador -->
    <div class="separator-small">

    </div>
    <!-- Fim do Separador -->
    <!-- Inicio de Formulário -->
    <div id="contact-form">
        <div id="forms">
            <h2 class="title-form">Entre em contato conosco</h2>
            <form action="" name="contact" method="post">
                <fieldset>
                    <!-- Inicio do Grupo de campos Nome/ Sobrenome -->
                    <fieldset class="group">
                        <div class="field">
                            <label for="nome">Nome</label>
                            <input type="text" id="nome" name="nome" style="width: 20em" required/>
                        </div>
                        <div class="field">
                            <label for="snome">Sobrenome</label>
                            <input type="text" id="snome" name="snome" style="width: 20em" required/>
                        </div>
                    </fieldset>	
                    <!-- Fim do Grupo de campos Nome/ Sobrenome -->
                    <!-- Inicio do Elemento para escolher o Sexo -->

                        <div class="field">
                        <label>Sexo</label>
                        <label class="checkbox">
                            <input type="radio" name="sexo" value="masculino" checked> Masculino
                        </label>
                        <label class="checkbox">
                            <input type="radio" name="sexo" value="feminino"> Feminino
                        </label>
                        <label class="checkbox">
                            <input type="radio" name="sexo" value="outro"> Outro
                        </label>
                    </div>

                    <!-- Fim do Elemento para escolher o Sexo -->                
                    <!-- Inicio do Elemento de Email -->
                    <div class="field">
                        <label for="email">E-mail</label>
                        <input type="text" id="email" name="email" style="width: 41em" required/>
                    </div>
                    <!-- Fim do Elemento de Email -->
                    <!-- Inicio do Elemento de Telefone -->
                    <div class="field">
                        <label for="telefone">Telefone</label>
                        <input type="text" id="telefone" name="telefone" style="width: 20em" required/>
                    </div>
                    <!-- Fim do Elemento de Telefone -->
                    <!-- Inicio do Grupo de campos Cidade/ Estado -->

                        <fieldset class="group">
                        <div class="field">
                            <label for="cidade">Cidade</label>
                            <input type="text" id="cidade" name="cidade" style="width: 20em" required/>
                        </div>
                        <div class="field">
                            <label for="estado">Estado</label>
                            <select name="estado" id="estado">
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP" selected>São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                    </fieldset>
                    <!-- Fim do Grupo de campos Cidade/ Estado -->
                    <!-- Inicio do Elemento Mensagem -->
    
                    <div class="field">
                        <label for="mensagem">Mensagem</label>
                        <textarea rows="6" style="width: 41em" id="mensagem" name="mensagem" required></textarea>
                    </div>
    
                    <!-- Fim do Elemento Mensagem -->
                    <!-- Inicio do Elemento Newsletter -->
                    <!--
                    <div class="field">
                        <label>Newsletter</label>
                        <label class="checkbox">
                            <input type="checkbox" name="newsletter" value="1"> Gostaria de receber a Newsletter do Full Stack Eletro
                        </label>
                    </div>
                    -->
                    <!-- Fim do Elemento Newsletter -->
                    <!-- Inicio do botão Enviar -->
                    <button class="botao submit" type="submit" name="submit" value="Enviar">Enviar</button>
                    <!-- Fim do botão Enviar -->
                </fieldset>
            </form>
        </div>
        <!-- Inicio da Imagem Contato -->
        <div class="image-form">
            <img src="../assets/image/image-contact.jpeg" alt="Imagem de Contato">
        </div>
        <!-- Fim da Imagem Contato -->
    </div>
    <!-- Fim do Formulário -->
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
</body>
</html>