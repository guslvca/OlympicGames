 --Consulta usando apenas as operações de seleção e projeção
 --Consulta Simples mostrando onde foram as olimpiadas de inverno de cada ano
 select SEDE,TIPO,ANO
 from OLIMPIADA
 where TIPO = 'Winter';
 
 --2 Consultas envolvendo a junção de apenas duas relações, uma deve conter outer join

 --Consultando o nome de todos os jogadores que tem MONIKA no nome
 Create View ONLY_MONIKA as
 select NOME_PAIS, NOME
 from atleta inner join pais 
 on ABREVIACAO_PAIS = PAIS_ORIGEM
 where atleta.NOME like "%Monika%";
 
 Select NOME_PAIS, NOME
 from ONLY_MONIKA;

 --Mostrando cada pais que já recebeu uma medalha em softball, qual medalha e em que ano NÃO TO CONSEGUINDO USAR O GROUP BY NEM O ORDER BY PLS SEND HELP
 select NOME_PAIS, MEDALHA, ANO_CONQUISTA
 from atletaesporte AE inner join atleta A
 on AE.NOME_ATLETA = A.NOME
 left outer join pais P
 on A.PAIS_ORIGEM = P.ABREVIACAO_PAIS 
 Where MODALIDADE = 'Softball'
 --GROUP BY ANO_CONQUISTA
 --ORDER BY ANO_CONQUISTA DESC;

 --2 Consultas envolvendo a junção de tês ou mais relaçÕes
 CREATE VIEW PaisOuroHomem as  
 SELECT DISTINCT PAIS_ORIGEM , count(distinct MODALIDADE) AS N 
 from atletaesporte inner join atleta
 on NOME_ATLETA = NOME
 inner join olimpiada
 on ANO_CONQUISTA = ANO
 WHERE MEDALHA = 'GOLD' and ANO_CONQUISTA = 2012 AND TIPO = 'Summer' AND GENERO = 'Men'
 GROUP BY PAIS_ORIGEM
 ORDER BY N DESC  ;  

 create view PaisOuroMulher as 
 SELECT DISTINCT PAIS_ORIGEM , count(distinct MODALIDADE) AS M 
 from atletaesporte inner join atleta
 on NOME_ATLETA = NOME
 inner join olimpiada
 on ANO_CONQUISTA = ANO
 WHERE MEDALHA = 'GOLD' and ANO_CONQUISTA = 2012 AND TIPO = 'Summer' AND GENERO = 'Women'
 GROUP BY PAIS_ORIGEM
 ORDER BY M DESC  ; 
 
 --Número total de medalhas por pais no ano de 2012
 create view SomaOuro as 
 select distinct PaisOuroHomem.PAIS_ORIGEM , N + M 
 from PaisOuroHomem inner join PaisOuroMulher 
 on PaisOuroHomem.PAIS_ORIGEM = PaisOuroMulher.PAIS_ORIGEM
 ORDER BY M DESC; 

 --Numero total de Medalhas por pais só de atletas femininas no ano de 2012
select distinct PaisOuroHomem.PAIS_ORIGEM , M 
 from PaisOuroHomem inner join PaisOuroMulher 
 on PaisOuroHomem.PAIS_ORIGEM = PaisOuroMulher.PAIS_ORIGEM 
 ORDER BY M DESC; 
 --
 
 --1 consulta envolvendo uma das operações sobre conjuntos (união, diferença ou intersecção);
 

 -- Quais atletas brasileiros e argentinos ganharam medalha de ouro em londres 2012. 
(select distinct NOME_ATLETA,ANO_CONQUISTA,MEDALHA , MODALIDADE
from atletaesporte inner join atleta
on NOME_ATLETA = NOME
inner join olimpiada
on ANO_CONQUISTA = ANO
WHERE MEDALHA = 'GOLD' and 
PAIS_ORIGEM = 'BRA' and ANO_CONQUISTA = 2012 AND TIPO = 'Summer';)
union
(select distinct NOME_ATLETA,ANO_CONQUISTA,MEDALHA , MODALIDADE
from atletaesporte inner join atleta
on NOME_ATLETA = NOME
inner join olimpiada
on ANO_CONQUISTA = ANO
WHERE MEDALHA = 'GOLD' and 
PAIS_ORIGEM = 'ARG' and ANO_CONQUISTA = 2012 AND TIPO = 'Summer';)

--3 consultas	envolvendo	funções	de	agregação;


--Maior medalhistas de ouro brasileiros.

 SELECT DISTINCT NOME_ATLETA , count(distinct MODALIDADE)
 from atletaesporte inner join atleta
 on NOME_ATLETA = NOME
 inner join olimpiada
 on ANO_CONQUISTA = ANO
 WHERE MEDALHA = 'GOLD' AND TIPO = 'Summer' and PAIS_ORIGEM = 'BRA'
 GROUP BY NOME_ATLETA 
 ORDER BY count(distinct MODALIDADE) DESC;
 

--Primeiro ano da Olimpiada em cada país que já foi sede mais de uma vez
create view sederecorrente as
select SEDE, count(ANO) as quantas_vezes
from  olimpiada
group by SEDE;
 
Select sederecorrente.SEDE, min(ANO)
from olimpiada, sederecorrente
where quantas_vezes > 1
group by SEDE;
 
 

-- Evolução no Quadro de medalhas brasileiro.
 SELECT DISTINCT ANO_CONQUISTA , count(distinct MODALIDADE)
 from atletaesporte inner join atleta
 on NOME_ATLETA = NOME
 inner join olimpiada
 on ANO_CONQUISTA = ANO
 WHERE MEDALHA = 'GOLD' AND TIPO = 'Summer' and PAIS_ORIGEM = 'BRA'
 GROUP BY ANO_CONQUISTA ;
 
 
 -- 1 consulta	envolvendo	subconsultas	aninhadas
 --mostra todos os paises que tem pelo menos um atleta que já ganhou mais de 10 medalhas
 select NOME_PAIS 
from pais 
where ABREVIACAO_PAIS in(select distinct ABREVIACAO_PAIS 
from atleta as A inner join atletaesporte as AE on (A.NOME = AE.NOME_ATLETA) inner join pais on (ABREVIACAO_PAIS = PAIS_ORIGEM) 
group by NOME, ABREVIACAO_PAIS 
having count(MEDALHA) >=10 ) 
order by NOME_PAIS;
 
 

