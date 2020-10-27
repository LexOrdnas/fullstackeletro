-- Criação do banco de dados fseletro
create database `fseletro`;

-- Selecionando o banco de dados
use fseletro;

-- Criando a tabela product
create table product (
id_product int auto_increment not null,
categoria varchar(100) not null,
descricao varchar (500) not null,
preco decimal(8,2),
preco_venda decimal(8,2),
imagem varchar(100) not null,
primary key (id_product)
);

create table contact (
id_contact int auto_increment not null,
nome varchar(50) not null,
snome varchar(50) not null,
email varchar(50) not null,
telefone varchar(20) not null,
sexo varchar(10) not null,
cidade varchar(20) not null,
estado varchar(20) not null,
mensagem varchar(500) not null,
primary key (id_contact) 
);

-- Visualizando conteúdo da tabela product
select * from product;

-- Dropando a tabela product
-- drop table produto;

-- Inserindo valores na tabela product
insert into product (id_product, categoria, descricao, preco, preco_venda, imagem)
values ('1', 'refrigerator', 'Refrigerador Bottom Freezer Electrolux 02 Portas Frost Free 454 Litros Painel Eletrônico Inox', '4499.99', '3499.99', '../assets/image/product/geladeira.jpg');

insert into product (categoria, descricao, preco, preco_venda, imagem)
values ('stove', 'Fogão de Piso Brastemp Clean Branco com Acendimento Automático Prateleira Deslizante', '1199.99', '1099.99', '../assets/image/product/fogao.jpg');

insert into product (categoria, descricao, preco, preco_venda, imagem)
values ('dishwasher', 'Lava-Louças Brastemp Prata 08 Serviços, 05 Programas de Lavagem Painel Blue Touch', '2199.99', '1799.99', '../assets/image/product/lava-loucas.jpg');

insert into product (categoria, descricao, preco, preco_venda, imagem)
values ('washing-machine', 'Lava & Seca 11 Kg LG Vivace VC2 Aço Escovado Preta 14 Programas de Lavagem', '3899.99', '2899.99', '../assets/image/product/lavadoura-de-roupas.jpg');

insert into product (categoria, descricao, preco, preco_venda, imagem)
values ('micro-wave', 'Micro-ondas Electrolux 31 Litros de Capacidade Cor Prata', '899.99', '699.99', '../assets/image/product/micro-ondas.jpg');

insert into product (categoria, descricao, preco, preco_venda, imagem)
values ('refrigerator', 'Refrigerador Bottom Freezer Samsung Barosa 02 Portas Frost Free com 435 L Painel Eletrônico Inox Look', '6499.99', '5330.47', '../assets/image/product/geladeira-2.jpg');

insert into product (categoria, descricao, preco, preco_venda, imagem)
values ('stove', 'Fogão de Piso Brastemp 05 Bocas com Turbo Chama Touch Timer e Autodesligamento Inox', '2799.99', '2499.99', '../assets/image/product/fogao-2.jpg');

insert into product (categoria, descricao, preco, preco_venda, imagem)
values ('dishwasher', 'Lava-Louças Electrolux 08 Serviços, 06 Programas de Lavagem Painel Blue Touch Prata', '2799.99', '2599.99', '../assets/image/product/lava-loucas-2.jpg');

insert into product (categoria, descricao, preco, preco_venda, imagem)
values ('washing-machine', 'Lavadora de Roupas Panasonic 12 kg Design Black Premium 09 Programas de Lavagem e Sensor de Carga', '1999.99', '1799.99', '../assets/image/product/lavadoura-de-roupas-2.jpg');

insert into product (categoria, descricao, preco, preco_venda, imagem)
values ('micro-wave', 'Micro-ondas de Mesa Panasonic Style 32 Litros de Capacidade Cor Inox', '799.99', '649.99', '../assets/image/product/micro-ondas-2.jpg');

insert into product (categoria, descricao, preco, preco_venda, imagem)
values ('refrigerator', 'Refrigerador French Door Samsung Family Hub 03 Portas Frost Free 582 Litros Black Inox', '26499.99', '24699.99', '../assets/image/product/geladeira-3.jpg');

insert into product (categoria, descricao, preco, preco_venda, imagem)
values ('stove', 'Fogão de Piso Consul 05 Bocas Mesa de Vidro Inox', '1999.99', '1599.99', '../assets/image/product/fogao-3.jpg');

-- Deletando alguma coluna
-- DELETE FROM `fseletro`.`product` WHERE (`id` = '1');

-- Visualizando elementos da categoria geladeira
select *
from fseletro.product
where categoria = 'refrigerator';

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
primary key (id_pedidos)
);

insert into pedidos (id_pedidos, nome_cliente, nome_produto, endereco, telefone, valor_unitario, quantidade, valor_total)
values ('1', 'Alexsandro da Silva Marques', 'Fogão de Piso Consul 05 Bocas Mesa de Vidro Inox', 'Rua do irineu n°26 - Diadema', '1140917559', '1999.99', '1', '1599.99');

-- Visualizando o conteúdo da tabela pedidos
select * from fseletro.pedidos;

create user 'fseletro'@'localhost' identified with mysql_native_password by 'pass123';