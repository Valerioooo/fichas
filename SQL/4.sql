ALTER TABLE Colaborador
ADD FOREIGN KEY(cidade) REFERENCES Cidade(nomeCidade);

ALTER TABLE Empresa
ADD FOREIGN KEY(cidade) REFERENCES Cidade(nomeCidade);
