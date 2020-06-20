a)

select CodArtigo, Designacao
from Artigos
where Designacao like "%Chave%";

b)
select *
from Artigos
where preco not between 200 and 400;

c)
select FO.*
from Fornecedores FO, ForneceArtigos FA
where FO.CodForn = FA.CodForn and FA.CodArtigo = 10;

d)

select FO.*
from Fornecedores FO, ForneceArtigos FA
where FO.CodForn = FA.CodForn and FA.CodArtigo = 10 and Preco = 300;

e)
select A.*
from Artigos A, ForneceArtigos FA
where FA.CodArtigo = A.CodArtigo and CodForn = 2;

f)
Select *
from Compras
where CodForn = 3;

g)
Select V.Nfactura, Data, A.* , Quantidade
from Vendas V, DetalhesVendas DV, Artigos A
where CodCliente = 1 and V.Nfactura = DV.NFactura and DV.CodArtigo = A.CodArtigo;

h)
Select *
from Compras
where Data between "2008-01-06" and "2008-01-08";
