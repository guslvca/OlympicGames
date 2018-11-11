CREATE TABLE Funcionario
(Pnome VARCHAR(15) NOT NULL,
Minicial CHAR,
Unome VARCHAR(15) NOT NULL,
Cpf CHAR(11) NOT NULL,
Datanasc DATE,
Endereco VARCHAR(100),
Sexo CHAR,
Salario DECIMAL(10,2),
Cpf_Supervisor CHAR(11),
Dnr INT,
PRIMARY KEY (Cpf),
FOREIGN KEY (Cpf_Supervisor) REFERENCES Funcionario(Cpf) ON DELETE SET NULL);

CREATE TABLE Departamento
(Dnome VARCHAR(15) NOT NULL,
Dnumero INT NOT NULL,
Cpf_gerente CHAR(11),
Data_inicio_gerente DATE,
PRIMARY KEY (Dnumero),
UNIQUE (Dnome),
FOREIGN KEY (Cpf_gerente) REFERENCES Funcionario(Cpf));

CREATE TABLE Localizacao_Dep
(Dnumero INT NOT NULL,
Dlocal VARCHAR(15) NOT NULL,
PRIMARY KEY (Dnumero, Dlocal),
FOREIGN KEY (Dnumero) REFERENCES Departamento(Dnumero) ON DELETE CASCADE);

ALTER TABLE Funcionario ADD FOREIGN KEY (Dnr) REFERENCES Departamento(Dnumero);

CREATE TABLE Projeto
(Projnome VARCHAR(15) NOT NULL,
Projnumero INT NOT NULL,
Projlocal VARCHAR(15),
Dnum INT NOT NULL,
PRIMARY KEY (Projnumero),
UNIQUE(Projnome),
FOREIGN KEY(Dnum) REFERENCES Departamento(Dnumero));

CREATE TABLE Trabalha_em
(Fcpf CHAR(11) NOT NULL,
Pnr INT NOT NULL,
Horas DECIMAL(3,1),
PRIMARY KEY (Fcpf, Pnr),
FOREIGN KEY (Fcpf) REFERENCES Funcionario(Cpf),
FOREIGN KEY (Pnr) REFERENCES Projeto(Projnumero));

CREATE TABLE Dependente
(Fcpf CHAR(11) NOT NULL,
Nome_dependente VARCHAR(15) NOT NULL,
Sexo CHAR,
Datanasc DATE,
Parentesco VARCHAR(8),
PRIMARY KEY (Fcpf, Nome_dependente),
FOREIGN KEY (Fcpf) REFERENCES Funcionario(Cpf) ON DELETE CASCADE);

INSERT INTO Departamento VALUES ('Pesquisa', 5, NULL,'1988-05-22');
INSERT INTO Departamento VALUES ('Administracao', 4, NULL,'1995-01-01');
INSERT INTO Departamento VALUES ('Matriz', 1, NULL,'1981-06-19');

INSERT INTO Funcionario VALUES ('Jorge','E','Brito','88866555576','1937-11-10','Rua do Horto, 35, Sao Paulo, SP','M',55000,NULL,1);
INSERT INTO Funcionario VALUES ('Fernando','T','Wong','33344555587','1955-12-08','Rua da Lapa, 34, Sao Paulo, SP','M',40000,'88866555576',5);
INSERT INTO Funcionario VALUES ('Jennifer','S','Souza','98765432168','1941-06-20','Av. Arthur de Lima, 54, Santo Andre, SP','F',43000,'88866555576',4);
INSERT INTO Funcionario VALUES ('Joao','B','Silva','12345678966','1965-01-09','Rua das Flores, 751, Sao Paulo, SP','M',30000,'33344555587',5);
INSERT INTO Funcionario VALUES ('Alice','J','Zelaya','99988777767','1968-01-19','Rua Souza Lima, 35, Curitiba, PR','F',25000,'98765432168',4);
INSERT INTO Funcionario VALUES ('Ronaldo','K','Lima','66688444476','1962-09-15','Rua Rebouças, 65, Piracicaba, SP','M',38000,'33344555587',5);
INSERT INTO Funcionario VALUES ('Joice','A','Leite','45345345376','1972-07-31','Av. Lucas Obes, 74, Sao Paulo, SP','F',25000,'33344555587',5);
INSERT INTO Funcionario VALUES ('Andre','V','Pereira','98798798733','1969-03-29','Rua Timbira, 35, Sao Paulo, SP','M',25000,'98765432168',4);

UPDATE Departamento SET Cpf_gerente='33344555587' WHERE Dnumero=5;
UPDATE Departamento SET Cpf_gerente='98765432168' WHERE Dnumero=4;
UPDATE Departamento SET Cpf_gerente='88866555576' WHERE Dnumero=1;

INSERT INTO Localizacao_Dep VALUES (1,'Sao Paulo');
INSERT INTO Localizacao_Dep VALUES (4,'Maua');
INSERT INTO Localizacao_Dep VALUES (5,'Santo Andre');
INSERT INTO Localizacao_Dep VALUES (5,'Itu');
INSERT INTO Localizacao_Dep VALUES (5,'Sao Paulo');

INSERT INTO Projeto VALUES ('ProdutoX',1,'Santo Andre',5);
INSERT INTO Projeto VALUES ('ProdutoY',2,'Itu',5);
INSERT INTO Projeto VALUES ('ProdutoZ',3,'Sao Paulo',5);
INSERT INTO Projeto VALUES ('Informatizacao',10,'Maua',4);
INSERT INTO Projeto VALUES ('Reorganizacao',20,'Sao Paulo',1);
INSERT INTO Projeto VALUES ('Novosbeneficios',30,'Maua',4);

INSERT INTO Trabalha_em VALUES ('12345678966',1,32.5);
INSERT INTO Trabalha_em VALUES ('12345678966',2,7.5);
INSERT INTO Trabalha_em VALUES ('66688444476',3,40);
INSERT INTO Trabalha_em VALUES ('45345345376',1,20);
INSERT INTO Trabalha_em VALUES ('45345345376',2,20);
INSERT INTO Trabalha_em VALUES ('33344555587',2,10);
INSERT INTO Trabalha_em VALUES ('33344555587',3,10);
INSERT INTO Trabalha_em VALUES ('33344555587',10,10);
INSERT INTO Trabalha_em VALUES ('33344555587',20,10);
INSERT INTO Trabalha_em VALUES ('99988777767',30,30);
INSERT INTO Trabalha_em VALUES ('99988777767',10,10);
INSERT INTO Trabalha_em VALUES ('98798798733',10,35);
INSERT INTO Trabalha_em VALUES ('98798798733',30,5);
INSERT INTO Trabalha_em VALUES ('98765432168',30,20);
INSERT INTO Trabalha_em VALUES ('98765432168',20,15);
INSERT INTO Trabalha_em VALUES ('88866555576',20,NULL);

INSERT INTO Dependente VALUES ('33344555587','Alicia','F','1986-04-05','Filha');
INSERT INTO Dependente VALUES ('33344555587','Tiago','M','1983-10-25','Filho');
INSERT INTO Dependente VALUES ('33344555587','Janaina','F','1958-05-03','Esposa');
INSERT INTO Dependente VALUES ('98765432168','Antonio','M','1942-02-28','Marido');
INSERT INTO Dependente VALUES ('12345678966','Michael','M','1988-01-04','Filho');
INSERT INTO Dependente VALUES ('12345678966','Alicia','F','1988-12-30','Filha');
INSERT INTO Dependente VALUES ('12345678966','Elizabeth','F','1967-05-05','Esposa');
