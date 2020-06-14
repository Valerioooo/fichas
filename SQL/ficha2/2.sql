a)

SELECT CodDistrito, nomeDistrito
FROM Distrito
ORDER by Populacao

b)

SELECT MAX(AreaTotal) as 'Area maxima'
FROM Distrito
WHERE CodDistrito < 10

c)
<--- Assumindo que o codigo de distrito de Viseu é 9 ------------

SELECT CodConcelho, nomeConcelho
From Concelho
where CodDistrito = 9

d)

SELECT CodDistrito, nomeDistrito
FROM Distrito
WHERE AreaTotal BETWEEN 2000 and 5000

e)

SELECT nomeDistrito AS Distrito, nomeProvincia AS Provincia, nomeConcelho AS Concelho
FROM Distrito d, Concelho c, Provincia p
WHERE d.CodDistrito = c.CodDistrito AND p.CodProvincia = c.CodProvincia
ORDER BY nomeDistrito ASC;

f)

SELECT nomeDistrito, COUNT(CodConcelho) as 'Contagem'
FROM Distrito, Concelho
where Distrito.CodDistrito = Concelho.CodConcelho
GROUP BY Distrito.CodDistrito

g)
SELECT nomeDistrito
FROM Distrito, Concelho
where Distrito.CodDistrito = Concelho.CodConcelho
GROUP BY Distrito.CodDistrito
HAVING COUNT(CodConcelho) > 18

h)

SELECT CodDistrito, nomeDistrito
FROM Distrito
WHERE Populacao > 1000000

i)

SELECT Count(CodDistrito) as 'Contagem'
FROM Distrito
WHERE Populacao > 1000000

j)

SELECT Distrito.CodDistrito, nomeDistrito, COUNT(CodConcelho) as 'Contagem'
FROM Distrito, Concelho
where Distrito.CodDistrito = Concelho.CodConcelho
GROUP BY Distrito.CodDistrito

k)

SELECT CodDistrito, (Populacao/AreaTotal) as 'Densidade Populacional'
FROM Distrito
ORDER BY CodDistrito

l)
SELECT SUM(Populacao) as 'População da Provincia'
FROM Distrito, Provincia, Concelho
WHERE Distrito.CodDistrito = Concelho.CodDistrito and Concelho.CodProvincia = Provincia.CodProvincia and Provincia.CodProvincia = 2

m)

SELECT SUM(Populacao) as 'População da Provincia'
FROM Distrito, Provincia, Concelho
WHERE Distrito.CodDistrito = Concelho.CodDistrito and Concelho.CodProvincia = Provincia.CodProvincia and Provincia.CodProvincia = 1 and AreaTotal < 4000

n)

SELECT nomeDistrito
FROM Distrito
WHERE AreaTotal > 5000 and Populacao > 20000
ORDER BY nomeDistrito
