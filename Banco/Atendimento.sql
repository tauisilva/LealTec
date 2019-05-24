drop database if exists LealTec;

create database if not exists LealTec
default collate utf8_general_ci
default character set utf8;

use LealTec;

create table if not exists Tipo_Pag(
	id_Tipo int unsigned not null auto_increment primary key,
	descricao tinyText
)default charset = utf8 engine = InnoDB;

create table if not exists Pagamentos(
	id_pag int unsigned not null auto_increment primary Key,
	Tipo int unsigned not null,
	valor decimal(6,2),
	foreign key(Tipo) references Tipo_Pag(id_Tipo)
)default charset = utf8 engine = InnoDB;

create table if not exists Fl_caixa(
	id_FlCaixa int unsigned not null auto_increment primary key,
	pagamento int unsigned not null,
	despesas varchar(50) not null,
	foreign key(pagamento) references Pagamentos(id_pag)
)default charset = utf8 engine = InnoDB;

create table if not exists Caixa(
	id_caixa int unsigned not null auto_increment primary key,
	FlCaixa int unsigned not null,
	foreign key(FlCaixa) references Fl_Caixa(id_FlCaixa)
)default charset = utf8 engine = InnoDB;

create table if not exists Marca(
	id_marca int unsigned not null auto_increment primary key,
    marca varchar(50) not null
)default charset = utf8 engine = InnoDB;

create table if not exists Computador(
	id_Comp int unsigned not null auto_increment primary key,
    marca int unsigned not null,
	teclado varchar(250),
	nome varchar(250) not null,
	processador varchar(100) not null,
	ram varchar(80) not null,
	hd varchar(150) not null,
	so varchar(250) not null,
    foreign key (marca) references Marca(id_marca)
)default charset = utf8 engine = InnoDb;

create table if not exists Desktop(
	fonte varchar(100),
	computador int unsigned not null auto_increment,
	foreign key(computador) references Computador(id_Comp)
)default charset = utf8 engine = InnoDB;

create table if not exists Notebook(
	carregador varchar(100),
	bateria varchar(100),
	computador int unsigned not null auto_increment,
	foreign key(computador) references Computador(id_Comp)
)default charset = utf8 engine = InnoDB;

create table if not exists Mobile(
	id_Mobil int unsigned not null auto_increment primary key,
	marca int unsigned not null,
    nome varchar(250) not null,
	carregador varchar(100) not null,
	tela varchar(100),
    foreign key(marca) references Marca(id_marca)
)default charset = utf8 engine = InnoDB;

create table if not exists Celular(
	mobile int unsigned not null,
	imei int not null,
	pelicula varchar(50),
	foreign key(mobile) references Mobile(id_Mobil)
)default charset = utf8 engine = InnoDB;

create table Tablet(
	mobile int unsigned not null,
	tamanho decimal(2,1),
	foreign key(mobile) references Mobile(id_Mobil)
)default charset = utf8 engine = InnoDB;

create table if not exists Telefone(
	id_tel int unsigned not null auto_increment primary key,
	numero varchar(15)
)default charset = utf8 engine = InnoDB;

create table if not exists Pessoa(
	id_pessoa int unsigned not null auto_increment primary key,
	cpf char(14) not null,
	nome varchar(50) not null,
	numero int unsigned not null,
	foreign key(numero) references Telefone(id_tel)
)default charset = utf8 engine = InnoDB;

create table if not exists Cliente(
	id_cliente int unsigned not null auto_increment primary key,
	pessoa int unsigned not null,
	endereço varchar(250),
	foreign key(pessoa) references Pessoa(id_pessoa)
)default charset = utf8 engine = InnoDB;

create table if not exists Funcionario(
	id_func int unsigned not null auto_increment  primary key,
	salario decimal(6,2) not null,
	hora_entrada time,
	hora_saida time,
    nome varchar(100),
    email varchar(250),
    senha varchar(32)
)default charset = utf8 engine = InnoDB;

create table if not exists Atendente(
	id_atendent int unsigned not null auto_increment primary key,
	funcionario int unsigned not null,
	qtd_atendimento int,
	foreign key(funcionario) references Funcionario(id_func)
)default charset = utf8 engine = InnoDB;

create table if not exists Tecnico(
	id_tecnico int unsigned not null auto_increment primary key,
	funcionario int unsigned not null,
	especializacao varchar(100) not null,
	qtd_servico int,
	qtd_servico_errado int,
	foreign key(funcionario) references Funcionario(id_func)
)default charset = utf8 engine = InnoDB;

create table if not exists Peca(
	id_peca int unsigned not null auto_increment primary key,
	nome varchar(200) not null
)default charset = utf8 engine = InnoDB;

create table if not exists Fornecedor(
	id_fornecedor int unsigned not null auto_increment primary key,
	razao_Social varchar(250)
)default charset = utf8 engine = InnoDB;

create table if not exists Compra(
	id_compra int unsigned not null auto_increment primary key,
	peca int unsigned not null,
	fornecedor int unsigned not null,
	tecnico int unsigned not null,
	valor decimal(6,2) not null,
	qtd int not null,
	foreign key(peca) references Peca(id_peca),
	foreign key(fornecedor) references Fornecedor(id_fornecedor),
	foreign key(tecnico) references Tecnico(id_tecnico)
)default charset = utf8 engine = InnoDB;

create table if not exists Item_Estoque(
	id_item int unsigned not null auto_increment not null primary key,
	peca int unsigned not null,
	qtd_pecas int,
	foreign key(peca) references Peca(id_peca)
)default charset = utf8 engine = InnoDB;

create table if not exists OrdemServico(
	protocolo int unsigned not null primary key,
	caixa int unsigned not null,
	mobile int unsigned not null,
	computador int unsigned not null,
	pessoa int unsigned not null,
	orcamento text not null,
	defeito varchar(150) not null,
	dataHora datetime not null,
	foreign key(caixa) references Caixa(id_Caixa),
	foreign key(mobile) references Mobile(id_Mobil),
	foreign key(computador) references Computador(id_comp),
	foreign key(pessoa) references Pessoa(id_Pessoa)
)default charset = utf8 engine = InnoDB;

insert into Marca
values (default,'Acer'),
(default,'Apple'),
(default,'Alcatel'),
(default,'Asus'),
(default,'Blu'),
(default,'CCE'),
(default,'Dell'),
(default,'Gigabyte'),
(default,'HP'),
(default,'HTC'),
(default,'Huewai'),
(default,'Lenovo'),
(default,'LG'),
(default,'Microsoft'),
(default,'Motorola'),
(default,'Multilaser'),
(default,'Nokia'),
(default,'OnePlus'),
(default,'Positivo'),
(default,'Philco'),
(default,'Quantum'),
(default,'Samsung'),
(default,'Sony'),
(default,'Win'),
(default,'Xiaomi'),
(default,'ZTE'),
(default,'Outros');
