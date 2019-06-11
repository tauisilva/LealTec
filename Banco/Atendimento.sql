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
	endereco varchar(250),
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
	qtd_atendimento int default '0',
	foreign key(funcionario) references Funcionario(id_func)
)default charset = utf8 engine = InnoDB;

create table if not exists Tecnico(
	id_tecnico int unsigned not null auto_increment primary key,
	funcionario int unsigned not null,
	especializacao varchar(100) not null,
	qtd_servico int default '0',
	qtd_servico_errado int default '0',
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

insert into Marca values
(default,'Acer'),
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

insert into Telefone values
(default, '(61)98371-7627'),
(default, '(62)92345-9876'),
(default, '(63)98915-1234'),
(default, '(41)95632-8585'),
(default, '(21)94240-7070'),
(default, '(11)93640-9674'),
(default, '(51)98790-9696'),
(default, '(31)98630-6012'),
(default, '(11)98960-8484'),
(default, '(21)94560-8585'),
(default, '(61)98647-0000');

insert into pessoa values
(default, '033.334.331-37', 'Noel Lucas Cunha Magalhães', '1'),
(default, '000.000.000-01', 'Irineu Voce Nao Sabe E Nem Eu', '2'),
(default, '000.000.000-02', 'Railson', '3'),
(default, '000.700.000-03', 'Taui', '5'),
(default, '000.005.000-00', 'Jackson', '6'),
(default, '000.070.000-00', 'Gabriel', '4'),
(default, '000.010.000-00', 'Mestik Peireli', '9'),
(default, '080.000.060-00', 'Manoel É o Cara', '8'),
(default, '090.000.000-00', 'Mergulhão Ilimited', '7'),
(default, '070.000.000-00', 'Godofredo', '11'),
(default, '032.000.000-00', 'Godolores', '10');

insert into Cliente values
(default, '1','Quadra 21 Lote 5 Del Lago I(Itapoã)'),
(default, '2','Quadra 22 Lote 5 Del Lago II(Itapoã)'),
(default, '3','Quadra 25 Lote 5 Lago Sul'),
(default, '4','Quadra 26 Lote 5 Lago Norte'),
(default, '5','Quadra 27 Lote 5 Del Lago II(Itapoã)'),
(default, '6','Quadra 28 Lote 5 Jardim Botânico VI'),
(default, '7','Quadra 27 Lote 5 Sudoeste'),
(default, '8','Quadra 17 Lote 5 Del Lago I(Itapoã)'),
(default, '9','Quadra 58 Lote 5 Novo Gama'),
(default, '10','Quadra 19 Lote 5 Estancia Quinta da Alvorada'),
(default, '11','Quadra 10 Lote 5 Paranoa');

insert into funcionario values
('1', '5000.00', '12:00', '20:00', 'Jackson','jackson.leal@lealtec.com.br', md5('123')),
('2', '2500.00', '12:00', '20:00', 'Noel','noel.magalhaes@lealtec.com.br', md5('456')),
('3', '2500.00', '12:00', '20:00', 'Taui','tauisilva@gmail.com', md5('123')),
('4', '2500.00', '12:00', '20:00', 'Railson','railson.santiago@lealtec.com.br', md5('147')),
('5', '2500.00', '12:00', '20:00', 'Bruno','bruno@lealtec.com.br', md5('258'));

insert into tecnico (id_tecnico, funcionario, especializacao)
values(default, '1','Conserta tudo');

insert into atendente (id_atendent, funcionario) 
values (default, '2'),
(default, '3'),
(default, '4'),
(default, '5');
