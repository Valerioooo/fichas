create table Colaborador(
  nomeColaborador char(30) PRIMARY KEY,
  morada char(30) not null,
  cidade char(15) not null,
  estadoCivil char(15) not null );

create table Empresa(
  nomeEmpresa char(30) PRIMARY KEY,
  cidade char(15) not null );

  create table Trabalha(
  	nomeColaborador char(30),
  	nomeEmpresa char(30),
  	salario float not null ,
  	FOREIGN key(nomeColaborador) REFERENCES Colaborador(nomeColaborador),
    FOREIGN key(nomeEmpresa) REFERENCES Empresa(nomeEmpresa),
    PRIMARY KEY(nomeColaborador,nomeEmpresa)
  );

  create table Diretor(
    	nomeColaborador char(30),
    	nomeEmpresa char(30),
    	FOREIGN key(nomeColaborador) REFERENCES Colaborador(nomeColaborador),
      FOREIGN key(nomeEmpresa) REFERENCES Empresa(nomeEmpresa),
      PRIMARY KEY(nomeColaborador,nomeEmpresa)
  );
