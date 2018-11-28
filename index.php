<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Banco de dados de Olimpidas - 1888-2014</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/graphic.js"> </script>
    </head>
    <body>
    <div class="container" >
    <div class="tooltable">

    <div class="header" >
	    <a class="navbar-brand" href="#" style="padding:1px;">
        <img src="img/olim.png"class="img_logo" >
        </a>
        <h3 style="font-size:2em; color:#5e5b5b;">The Olympic: DataSet</h3>
    <br>
    <h2>View All Databases on DataSet</h2>

    <tr>
        <td>
            <table width="100%">
                <tr>
                    <td align="left"><button class="button1" onclick="window.location.href='/OlympicGames/php/alldata.php';" style="background-color: #858180;"><span>View All Databases </span></button>
                    <td width="50">&nbsp;</td>
                    <td align="right"><button class="button1" onclick=" " style="background-color: #858180;"><span>Limpar Pagina </span></button>
                </tr>
            </table>
            <br>
            <h2>Access individual Tables</h2>

            <table width="100%">
                <tr>
                    <td align="left"><button class="button1" onclick="window.location.href='/OlympicGames/php/atleta.php';" /><span>show Atletas </span></button>
                    <td width="50">&nbsp;</td>
                    <td align="left"><button class="button1" onclick="window.location.href='/OlympicGames/php/atletaesporte.php';" /><span>show Atleta & Esporte </span></button>
                    <td width="50">&nbsp;</td>
                    <td align="left"><button class="button1" onclick="window.location.href='/OlympicGames/php/esporte.php';" /><span>show Esporte </span></button>
                    <td width="50">&nbsp;</td>
                    <td align="left"><button class="button1" onclick="window.location.href='/OlympicGames/TESTE/index.php';" /><span>show Mascote </span></button>
                    <td width="50">&nbsp;</td>
                    
                </tr>
                <br>

                <tr>
                    <td align="left"><button class="button1" onclick="window.location.href='/OlympicGames/php/olimpiada.php';" ><span>show Olimpiada </span></button>
                    <td width="50">&nbsp;</td>
                    <td align="left"><button class="button1" onclick="window.location.href='/OlympicGames/php/pais.php';" ><span>show Pais </span></button>
                    <td width="50">&nbsp;</td>
                    <td align="left"><button class="button1" onclick="window.location.href='/OlympicGames/php/participa.php';" ><span>Show Participa </span></button>
                    <td width="50">&nbsp;</td>
                    <td align="left"><button  class="button1" onclick="window.location.href='/OlympicGames/php/sede.php';" ><span>show sede </span></button>
                    <td width="50">&nbsp;</td>
                    
                </tr>
            </table>
            <br>
            <h2>Consultas</h2>

            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="left"><button class="button1" onclick=" final_results(); return false;" style="background-color: #858180;" ><span>Abrir Consultas </span></button>
                    <td width="50">&nbsp;</td>
                    <td align="right"><button class="button1" onclick=" clear_result2(); return false;" style="background-color: #858180;" ><span>Fechar Consultas </span></button>
                </tr>
            </table>
            


        </td>
    </tr>
</div>
</div>
    <script language="JavaScript" type="text/javascript">

    function final_results(){
        var ent = document.getElementById("fresults");
        if (ent.style.display === "none") {
            ent.style.display = "block";
        } else{
            ent.style.display = "block";
        }
    }
    function clear_result2(){
	setfinal= document.getElementById("fresults");
	if(setfinal.style.display === "block"){
		setfinal.style.display = "none";
	} else{
		setfinal.style.display = "none";
	}
}
    </script>

    <br>
    <div class="tooltable" id="fresults" style="display: none;">
				<table>
					<h2 style="background-color :rgb(7, 204, 0);">RESULTADOS DAS CONSULTAS</h2>
					<div>
					<tr>
                        <td>
                        <div id="chart_div" style="width: 40%; height: 30%;"></div>
                        
                        </td>
                        <td style="background-color: rgb(163, 215, 241); width: 60%; height: 30%;">
                        <h3>Consultas envolvendo a junção de duas relações</h3>
                        <p>Medalha conquistada no ano 2012 por Homem e Mulher, Duas consultas <i>create view</i> focado por Pais e Medalhas conquistada nas olimpiadas de Summer. 
                            Para acessar o banco dessa consulta <a href="php/paisourohm.php">clique aqui</a></p>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                        <div id="donutchart" style="width: 40%; height: 30%;"></div>
                        </td>
                        <td style="background-color: rgb(240, 154, 154); width: 60%; height: 30%;">
                        <h3>Número total de medalhas por pais no ano de 2012</h3>
                        <p> No ano 2012, 29 paises conquistaram um total de 265 Ouros na Olimpiada de Summer em Londres,
                            Essa consulta mostra uma tabela dos paises e quantas medalhas Ouros ganharam em ordem descrescente,
                        para acessar esse banco <a href="php/totalouropais.php">clique aqui</a></p>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <div id="table_div"></div>
                        </td>
                        <td style="background-color: rgb(247, 234, 123); width: 60%; height: 30%;">
                            <h3>Atletas Brasileiros Que Conquistou Medalha de Ouro em 2012</h3>
                            <p>O resultado da consulta de <i>Nome_Atleta</i>, <i>ANO_CONQUITA</i>, <i>MEDALHA</i> e <i>MODALIDADE</i> das atletas Brasileiros
                            na olimpiada em Londres no ano 2012, conforme o grafico mostra um numero pequeno das atletas, para visualizar a tabela completa <a href="php/nomeatlbra.php">clique aqui</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 40%; height: 30%; padding: 6% 0 4% 0;">
                                <form method="POST" action="php/search.php">
                                        <input type="text" name="q" placeholder="query">
                                        <input type="submit" name="search" value="Search">
                                    </form>
                                    

                        </td>
                        <td style="background-color: rgb(163, 215, 241); width: 60%; height: 30%;">
                            
                        </td>
                    </tr>
                    
					</div>
				</table>
		</div>


    </body>
</html>
