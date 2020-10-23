-- Criação do banco de dados fseletro
create database `fseletro`;

-- Selecionando o banco de dados
use fseletro;

-- Criando a tabela produtos
create table produtos (
id int auto_increment not null,
categoria varchar(100) not null,
descricao varchar (500) not null,
preco decimal(8,2),
preco_venda decimal(8,2),
imagem varchar(100) not null,
primary key (id)
);

-- Visualizando conteúdo da tabela produtos
select * from produtos;

-- Dropando a tabela produtos
-- drop table produto;

-- Inserindo valores na tabela produtos
insert into produtos (id, categoria, descricao, preco, preco_venda, imagem)
values ('1', 'geladeira', 'Refrigerador Bottom Freezer Electrolux 02 Portas Frost Free 454 Litros Painel Eletrônico Inox', '4499.99', '3499.99', 'image/product/geladeira.jpg');

insert into produtos (categoria, descricao, preco, preco_venda, imagem)
values ('fogao', 'Fogão de Piso Brastemp Clean Branco com Acendimento Automático Prateleira Deslizante', '1199.99', '1099.99', 'image/product/fogao.jpg');

insert into produtos (categoria, descricao, preco, preco_venda, imagem)
values ('lava-loucas', 'Lava-Louças Brastemp Prata 08 Serviços, 05 Programas de Lavagem Painel Blue Touch', '2199.99', '1799.99', 'image/product/lava-loucas.jpg');

insert into produtos (categoria, descricao, preco, preco_venda, imagem)
values ('lavadoura-de-roupas', 'Lava & Seca 11 Kg LG Vivace VC2 Aço Escovado Preta 14 Programas de Lavagem', '3899.99', '2899.99', 'image/product/lavadoura-de-roupas.jpg');

insert into produtos (categoria, descricao, preco, preco_venda, imagem)
values ('micro-ondas', 'Micro-ondas Electrolux 31 Litros de Capacidade Cor Prata', '899.99', '699.99', 'image/product/micro-ondas.jpg');

insert into produtos (categoria, descricao, preco, preco_venda, imagem)
values ('geladeira', 'Refrigerador Bottom Freezer Samsung Barosa 02 Portas Frost Free com 435 L Painel Eletrônico Inox Look', '6499.99', '5330.47', 'image/product/geladeira-2.jpg');

insert into produtos (categoria, descricao, preco, preco_venda, imagem)
values ('fogao', 'Fogão de Piso Brastemp 05 Bocas com Turbo Chama Touch Timer e Autodesligamento Inox', '2799.99', '2499.99', 'image/product/fogao-2.jpg');

insert into produtos (categoria, descricao, preco, preco_venda, imagem)
values ('lava-loucas', 'Lava-Louças Electrolux 08 Serviços, 06 Programas de Lavagem Painel Blue Touch Prata', '2799.99', '2599.99', 'image/product/lava-loucas-2.jpg');

insert into produtos (categoria, descricao, preco, preco_venda, imagem)
values ('lavadoura-de-roupas', 'Lavadora de Roupas Panasonic 12 kg Design Black Premium 09 Programas de Lavagem e Sensor de Carga', '1999.99', '1799.99', 'image/product/lavadoura-de-roupas-2.jpg');

insert into produtos (categoria, descricao, preco, preco_venda, imagem)
values ('micro-ondas', 'Micro-ondas de Mesa Panasonic Style 32 Litros de Capacidade Cor Inox', '799.99', '649.99', 'image/product/micro-ondas-2.jpg');

insert into produtos (categoria, descricao, preco, preco_venda, imagem)
values ('geladeira', 'Refrigerador French Door Samsung Family Hub 03 Portas Frost Free 582 Litros Black Inox', '26499.99', '24699.99', 'image/product/geladeira-3.jpg');

insert into produtos (categoria, descricao, preco, preco_venda, imagem)
values ('fogao', 'Fogão de Piso Consul 05 Bocas Mesa de Vidro Inox', '1999.99', '1599.99', 'image/product/fogao-3.jpg');

-- Deletando alguma coluna
-- DELETE FROM `fseletro`.`produtos` WHERE (`id` = '1');

-- Visualizando elementos da categoria geladeira
select *
from fseletro.produtos
where categoria = 'geladeira';

-- Criando a tabela pedidos
create table pedidos (
id_pedidos int auto_increment,
nome_cliente varchar(100),
nome_produto varchar(300),
endereco varchar(300),
telefone int,
valor_unitario decimal(8,2),
quantidade int,
valor_total decimal(8,2),
data datetime default now(),
primary key (id)
);

insert into pedidos (id, nome_cliente, nome_produto, endereco, telefone, valor_unitario, quantidade, valor_total)
values ('1', 'Alexsandro da Silva Marques', 'Fogão de Piso Consul 05 Bocas Mesa de Vidro Inox', 'Rua do irineu n°26 - Diadema', '1140917559', '1999.99', '1', '1599.99');

-- Visualizando o conteúdo da tabela pedidos
select * from fseletro.pedidos;

create user 'fseletro'@'localhost' identified with mysql_native_password by 'pass123';