SET GLOBAL FOREIGN_KEY_CHECKS=0;

INSERT INTO Empresa.Artigos (Designacao, Modelo, Preco) VALUES ('Busca polos', 'BP', 2.50);
INSERT INTO Empresa.Artigos (Designacao, Modelo, Preco) VALUES ('Serra de Metal', 'SM', 12.99);
INSERT INTO Empresa.Artigos (Designacao, Modelo, Preco) VALUES ('Martelo Pneumático', 'MP', 89.99);
INSERT INTO Empresa.Artigos (Designacao, Modelo, Preco) VALUES ('Rapa-tábuas', 'RT', 25.99);
INSERT INTO Empresa.Artigos (Designacao, Modelo, Preco) VALUES ('Berbequim', 'BB', 69.99);
INSERT INTO Empresa.Artigos (Designacao, Modelo, Preco) VALUES ('Motosserra', 'MS', 149.99);
INSERT INTO Empresa.Artigos (Designacao, Modelo, Preco) VALUES ('Rebarbadora', 'RB', 34.99);
INSERT INTO Empresa.Artigos (Designacao, Modelo, Preco) VALUES ('Chave de fendas', 'CF', 1.99);
INSERT INTO Empresa.Artigos (Designacao, Modelo, Preco) VALUES ('Morsa', 'MO', 20.00);
INSERT INTO Empresa.Artigos (Designacao, Modelo, Preco) VALUES ('Alicate', 'AL', 1.60);

INSERT INTO Empresa.Fornecedores (Nome, Endereco, Telefone) VALUES ('BOSCH', 'Cacia Aveiro', '760100200');
INSERT INTO Empresa.Fornecedores (Nome, Endereco, Telefone) VALUES ('Metalin', 'Rua do Caribe, Lisboa', '760100300');
INSERT INTO Empresa.Fornecedores (Nome, Endereco, Telefone) VALUES ('Ferafino', 'Rua dos oceanos', '808300404');

INSERT INTO Empresa.ForneceArtigos VALUES (2, 10, 0.90);
INSERT INTO Empresa.ForneceArtigos VALUES (1, 5, 40.00);
INSERT INTO Empresa.ForneceArtigos VALUES (2, 6, 100.00);
INSERT INTO Empresa.ForneceArtigos VALUES (3, 7, 17.99);
INSERT INTO Empresa.ForneceArtigos VALUES (3, 4, 15.00);
INSERT INTO Empresa.ForneceArtigos VALUES (1, 9, 10.00);


INSERT INTO Empresa.Compras VALUES (1, 5, '2020-02-26', 40.00, 2);
INSERT INTO Empresa.Compras VALUES (3, 9, '2020-01-17', 10.00, 3);
INSERT INTO Empresa.Compras VALUES (2, 10, '2020-03-03', 0.90, 5);
INSERT INTO Empresa.Compras VALUES (3, 7, '2020-02-19', 17.99, 2);
INSERT INTO Empresa.Compras VALUES (2, 6, '2020-04-23', 100.00, 1);

INSERT INTO Empresa.Clientes (Nome, Morada, Telefone) VALUES ('Aníbal de Sousa', 'Rua das 12 casas', '927999999');
INSERT INTO Empresa.Clientes (Nome, Morada, Telefone) VALUES ('Miguel Almeida', 'Rua 21', '933248021');
INSERT INTO Empresa.Clientes (Nome, Morada, Telefone) VALUES ('Rui Vitorino', 'Rua dos Logistas', '938888888');
INSERT INTO Empresa.Clientes (Nome, Morada, Telefone) VALUES ('Arnaldo Coelho', 'Rua dos Fanqueiros', '934555333');

INSERT INTO Empresa.Vendas (Data, CodCliente) VALUES ('2020-01-05', 2);
INSERT INTO Empresa.Vendas (Data, CodCliente) VALUES ('2020-02-02', 1);
INSERT INTO Empresa.Vendas (Data, CodCliente) VALUES ('2020-03-08', 4);

INSERT INTO Empresa.DetalhesVendas VALUES (1, 5, 3);
INSERT INTO Empresa.DetalhesVendas VALUES (2, 6, 2);
INSERT INTO Empresa.DetalhesVendas VALUES (3, 7, 1);

grant all privileges on Empresa.* to admin@'localhost' identified by '1234'
