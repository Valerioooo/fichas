create database Pais;


create table Distrito(
  CodDistrito int Auto_increment PRIMARY KEY,
  nomeDistrito varchar(30),
  AreaTotal float not null,
  População int not null
);

create table Provincia(
  CodProvincia int Auto_increment PRIMARY KEY,
  nomeProvincia varchar(30) not null,
  DescricaoPorvincia varchar(250)not null
);

create table Concelho(
  CodConcelho int Auto_increment PRIMARY KEY,
  CodDistrito int not null,
  nomeConcelho varchar(30) not null,
  CodProvincia int not null,
  FOREIGN key(CodDistrito) REFERENCES Distrito(CodDistrito),
  FOREIGN key(CodProvincia) REFERENCES Provincia(CodProvincia)
);

insert into Distrito(nomeDistrito, AreaTotal, Populacao) values('Lisboa', 2761, 3079772);
insert into Distrito(nomeDistrito, AreaTotal, Populacao) values('Leiria', 3506, 470895);
insert into Distrito(nomeDistrito, AreaTotal, Populacao) values('Aveiro', 2798.54, 714200);
insert into Distrito(nomeDistrito, AreaTotal, Populacao) values('Castelo Branco', 6675, 196264 );
insert into Distrito(nomeDistrito, AreaTotal, Populacao) values('Coimbra', 3947, 429987);

insert into Provincia(nomeProvincia, DescricaoPorvincia) values('Estremadura', 'A Estremadura é uma província histórica (ou região natural) de Portugal, estabelecida na Idade Média e extinta no século XIX, devendo o seu nome derivar do latim Extrema Durii');
insert into Provincia(nomeProvincia, DescricaoPorvincia) values('Beira Litoral', 'A Beira Litoral é uma província histórica (ou região natural) situada na região do Centro de Portugal, formalmente instituída por uma reforma administrativa havida em 1936.');
insert into Provincia(nomeProvincia, DescricaoPorvincia) values('Beira Baixa', 'A Beira Baixa é uma província histórica (ou região natural) situada na região do Centro de Portugal, originalmente criada no século XIX a partir de parte do território da anterior Província da Beira.');
insert into Provincia(nomeProvincia, DescricaoPorvincia) values('Beira Alta', 'A Beira Alta é uma província histórica (ou região natural) situada na região do Centro de Portugal. Foi criada, em 1832, por subdivisão da antiga província da Beira, passando a ser constituída pelas comarcas de Viseu, Lamego e Trancoso.');
insert into Provincia(nomeProvincia, DescricaoPorvincia) values('Douro Litoral', 'O Douro Litoral é uma província histórica de Portugal, formalmente instituída por uma reforma administrativa havida em 1936.');

insert into Concelho(CodDistrito, nomeConcelho, CodProvincia) values(1,'Alcobaça',1);
insert into Concelho(CodDistrito, nomeConcelho, CodProvincia) values(2,'Alcobaça',1);
insert into Concelho(CodDistrito, nomeConcelho, CodProvincia) values(3,'Castelo de Paiva',2);
insert into Concelho(CodDistrito, nomeConcelho, CodProvincia) values(4,'Fundão',3);
insert into Concelho(CodDistrito, nomeConcelho, CodProvincia) values(5,'Arganil',3);
