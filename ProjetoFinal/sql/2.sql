Use Empresa;
Use empresa;

create table Empresa.Fornecedores(
  CodForn int Auto_increment PRIMARY KEY,
  Nome varchar(30) not null,
  Endereco varchar(40) not null,
  Telefone char(9) not null
);

create table Empresa.Artigos(
  CodArtigo int Auto_increment PRIMARY KEY,
  Designacao varchar(30) not null,
  Modelo char(20) not null,
  Preco decimal(10,2) not null
);

create table Empresa.Clientes(
  CodCliente int Auto_increment PRIMARY KEY,
  Nome varchar(30) not null,
  Morada char(50) not null,
  Telefone char(9) not null
);

create table Empresa.Vendas(
  Nfactura int Auto_increment PRIMARY KEY,
  Data date not null,
  CodCliente int not null,
	FOREIGN key(CodCliente) REFERENCES Clientes(CodCliente)
);

create table Empresa.DetalhesVendas(
  NFactura int Auto_increment,
  CodArtigo int not null,
  Quantidade int not null,
	PRIMARY KEY(NFactura, CodArtigo),
	FOREIGN key(NFactura) REFERENCES Vendas(Nfactura),
	FOREIGN key(CodArtigo) REFERENCES Artigos(CodArtigo)
);

create table Empresa.ForneceArtigos(
	CodForn int NOT NULL,
	CodArtigo int NOT NULL,
	preco decimal(10,2) not null,
	PRIMARY KEY (CodForn, CodArtigo),
	FOREIGN KEY (CodForn) REFERENCES Fornecedores(CodForn),
	FOREIGN KEY (CodArtigo) REFERENCES Artigos(CodArtigo)
);

CREATE TABLE Empresa.Compras(
	CodForn int NOT NULL,
	CodArtigo int NOT NULL,
	data date,
	Preco decimal(10,2) NOT NULL,
	Quantidade int NOT NULL,
	PRIMARY KEY (CodForn, CodArtigo, data),
	FOREIGN KEY (CodForn) REFERENCES Fornecedores(CodForn),
	FOREIGN KEY (CodArtigo) REFERENCES Artigos(CodArtigo)
);


create VIEW Empresa.ViewVendas AS(
	select Vendas.Nfactura, Nome, Data, Designacao, Quantidade
	from Vendas, Clientes, Artigos, DetalhesVendas
	where Vendas.CodCliente = Clientes.CodCliente and Vendas.Nfactura = DetalhesVendas.NFactura and DetalhesVendas.CodArtigo = Artigos.CodArtigo
);

create VIEW Empresa.ViewForneceArtigos AS(
	select Fornecedores.CodForn, Fornecedores.Nome, Designacao, ForneceArtigos.preco
	from ForneceArtigos,Fornecedores, Artigos
	where ForneceArtigos.CodArtigo = Artigos.CodArtigo and ForneceArtigos.CodForn = Fornecedores.CodForn
);

create VIEW Empresa.ViewCompras AS(
	select Fornecedores.Nome, Designacao, Modelo, data, Compras.Preco, Quantidade
	from Compras,Fornecedores, Artigos
	where Compras.CodArtigo = Artigos.CodArtigo and Compras.CodForn = Fornecedores.CodForn
);
