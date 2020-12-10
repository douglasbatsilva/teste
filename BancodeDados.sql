-- CREATE TABLE fseletro;

USE fseletro;

create table produtos (
	id int auto_increment,
	categoria varchar(100) NOT NULL,
    descricao varchar(500) NOT NULL,
    preco float NOT NULL,
    preco_venda float NOT NULL,
    imagem varchar(100),
    primary key (id)
);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("geladeiras", "produtos/geladeira1.jpg", "Geladeira Samsung Family Hub Frost Free French Door Inverse 582 Litros Inox", 21339.00, 19900.00);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("geladeiras", "produtos/geladeira2.jpg", "Refrigerador Consul Frost Free, 2 Portas, 340L", 2200.00, 1898.00);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("celulares", "produtos/celular1.jpg", "Celular Samsung Galaxy A30s Preto 64gb Câmera Tripla 25mp + 8mp + 5mp", 1239.00, 1039.00);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("celulares", "produtos/celular2.jpg", "Celular LG K51S Vermelho 64GB, RAM de 3GB, Octa-Core 2.3", 1699.00, 1499.00);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("celulares", "produtos/celular3.jpg", "Celular Motorola Moto G G8 Plus XT2019-2 64GB", 1519.00, 1199.00);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("notebooks", "produtos/notebook1.jpg", "Notebook Lenovo IdeaPad S145 Intel Core i3, 4GB RAM, HD 1 TB", 2999.00, 2599.00);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("notebooks", "produtos/notebook2.jpg", "Notebook Acer Aspire 5 Intel Core i5 8265U 15, 8GB RAM, HD 1 TB GeForce MX130", 3999.00, 3569.00);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("microondas", "produtos/micro-ondas1.jpg", "Micro-ondas Brastemp 20 Litros BMS20AR Inox", 587.90, 539.90);

insert into produtos (categoria, imagem, descricao, preco, preco_venda)
values ("microondas", "produtos/micro-ondas2.jpg", "Micro-ondas Consul 20 Litros cor Inox Espelhado com Função Descongelar", 799.90, 549.90);


USE fseletro;

CREATE TABLE pedidos (
n_cliente varchar(100) NOT NULL,
endereco varchar(50) NOT NULL,
telefone varchar(14),
n_produto varchar(500) NOT NULL,
v_unitario float NOT NULL,
quantidade INTEGER NOT NULL,
v_total float NOT NULL
);

insert into pedidos (n_cliente, endereco, telefone, n_produto, v_unitario, quantidade, v_total)
values ("Douglas Batista", "Rua Fantasia1, 22", "(21)11111-1111", "Notebook Lenovo IdeaPad S145 Intel Core i3, 4GB RAM, HD 1 TB", 2599.00, 1, 2599.00);

insert into pedidos (n_cliente, endereco, telefone, n_produto, v_unitario, quantidade, v_total)
values ("João Carlos", "Rua Fantasia2, 33", "(21)22222-2222", "Celular Motorola Moto G G8 Plus XT2019-2 64GB", 1199.00, 3, 3597.00);

insert into pedidos (n_cliente, endereco, telefone, n_produto, v_unitario, quantidade, v_total)
values ("Pedro Camargo", "Rua deMentira, 44", "(22)33333-3333", "Refrigerador Consul Frost Free, 2 Portas, 340L", 1898.00, 1, 1898.00);

insert into pedidos (n_cliente, endereco, telefone, n_produto, v_unitario, quantidade, v_total)
values ("Paula Martins", "Rua Fictícia, 11", "(11)11111-1111", "Notebook Acer Aspire 5 Intel Core i5 8265U 15, 8GB RAM, HD 1 TB GeForce MX130", 3569.00, 2, 7138.00);

insert into pedidos (n_cliente, endereco, telefone, n_produto, v_unitario, quantidade, v_total)
values ("Mariana Pacheco", "Rua SemNome, 2", "(35)55555-5555", "Micro-ondas Brastemp 20 Litros BMS20AR Inox",539.90, 1, 539.90);

insert into pedidos (n_cliente, endereco, telefone, n_produto, v_unitario, quantidade, v_total)
values ("Andréia Alcântara", "Rua Nada, 32", "(35)65542-1234", "Celular Motorola Moto G G8 Plus XT2019-2 64GB", 1199.00, 3, 3597.00);

insert into pedidos (n_cliente, endereco, telefone, n_produto, v_unitario, quantidade, v_total)
values ("Juliana Cunha", "Rua Fantasia5, 443", "(11)11111-1111", "Notebook Lenovo IdeaPad S145 Intel Core i3, 4GB RAM, HD 1 TB", 2599.00, 1, 2599.00);

insert into pedidos (n_cliente, endereco, telefone, n_produto, v_unitario, quantidade, v_total)
values ("Pedro Carvalho", "Rua qualquernome, 13", "(11)33331-2253", "Celular LG K51S Vermelho 64GB, RAM de 3GB, Octa-Core 2.3", 1499.00, 1, 4497.00);

create table comentarios (
id int auto_increment,
nome varchar(100),
msg varchar(100),
data datetime default now(),
primary key (id)
);