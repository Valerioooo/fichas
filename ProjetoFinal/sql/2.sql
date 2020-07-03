
create table Fornecedores(
  CodForn int Auto_increment PRIMARY KEY,
  Nome varchar(30) not null,
  Endereco varchar(40) not null,
  Telefone char(9) not null
);

create table Artigos(
  CodArtigo int Auto_increment PRIMARY KEY,
  Designacao varchar(30) not null,
  Modelo char(20) not null,
  Preco decimal(10,2) not null
);

create table Clientes(
  CodCliente int Auto_increment PRIMARY KEY,
  Nome varchar(30) not null,
  Morada char(50) not null,
  Telefone char(9) not null
);

create table Vendas(
  Nfactura int Auto_increment PRIMARY KEY,
  Data date not null,
  CodCliente int not null,
	FOREIGN key(CodCliente) REFERENCES Clientes(CodCliente)
);

create table DetalhesVendas(
  NFactura int Auto_increment,
  CodArtigo int not null,
  Quantidade int not null,
	PRIMARY KEY(NFactura, CodArtigo),
	FOREIGN key(NFactura) REFERENCES Vendas(Nfactura),
	FOREIGN key(CodArtigo) REFERENCES Artigos(CodArtigo)
);

create table ForneceArtigos(
	CodForn int NOT NULL,
	CodArtigo int NOT NULL,
	preco decimal(10,2) not null,
	PRIMARY KEY (CodForn, CodArtigo),
	FOREIGN KEY (CodForn) REFERENCES Fornecedores(CodForn),
	FOREIGN KEY (CodArtigo) REFERENCES Artigos(CodArtigo)
);

CREATE TABLE Compras(
	CodForn int NOT NULL,
	CodArtigo int NOT NULL,
	data date,
	Preco decimal(10,2) NOT NULL,
	Quantidade int NOT NULL,
	PRIMARY KEY (CodForn, CodArtigo, data),
	FOREIGN KEY (CodForn) REFERENCES Fornecedores(CodForn),
	FOREIGN KEY (CodArtigo) REFERENCES Artigos(CodArtigo)
);
