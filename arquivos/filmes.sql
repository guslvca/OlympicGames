create database filmes;
use filmes;

create table Ator (codigo_Ator int, nomeArtistico varchar(100), sexo char(1), dataNascimento date,
	primary key (codigo_Ator) );
	
create table Filme (id_Filme int, titulo varchar(255), anoLancamento int,
	primary key (id_Filme) );
	
create table Genero (descricao_Genero varchar(30),
	primary key (descricao_Genero) );
	
create table GeneroFilme (id_Filme int, descricao_Genero varchar(30), 
	primary key (id_Filme, descricao_Genero),
	constraint fk_GeneroFilme_Filme foreign key (id_Filme) references Filme(id_Filme),
	constraint fk_GeneroFilme_Genero foreign key (descricao_Genero) references Genero(descricao_Genero) );
	
create table Atuacao (codigo_Ator int, id_Filme int, papel varchar(100),
	primary key (codigo_Ator, id_Filme, papel),
	constraint fk_Atuacao_Ator foreign key (codigo_Ator) references Ator(codigo_Ator),
	constraint fk_Atuacao_Filme foreign key (id_Filme) references Filme(id_Filme) );

create table Usuario (apelido_Usuario varchar(20), email varchar(255), senha char(8),
	primary key (apelido_Usuario) );
	
create table Avaliacao (id_Filme int, apelido_Usuario varchar(20), data date, nota int, comentario text,
	primary key (id_Filme, apelido_Usuario),
	constraint fk_Avaliacao_Filme foreign key (id_Filme) references Filme(id_Filme),
	constraint fk_Avaliacao_Usuario foreign key (apelido_Usuario) references Usuario(apelido_Usuario) );
