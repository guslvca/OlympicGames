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


    <div class="header">
	<h2 style="padding: 0 40px 0 0;">DataSet: Olimpidas</h2>
	<p>O banco de dados entre 19** ate 2016</p>
    <p>O web esta rodando, nao-pronto  rodando, lets create the database </p>
    <p>Test com banco de dados dado na aula EMPRESA.sql (mostrando tabela -> Departamento) </p>
    <br>
    <h2>View All Databases on DataSet</h2>

    <tr>
        <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="left"><input type="button" value="Show All Database" name="button1" onclick="window.location.href='/OlympicGames/php/alldata.php';" /></td>
                    <td width="50">&nbsp;</td>
                    <td align="right"><input type="button" value="Limpar pagina." name="button2" onclick=" " /></td>
                </tr>
            </table>
            <br>
            <h2>Access individual Tables</h2>

            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="left"><input type="button" value="Show Atletas" name="button1" onclick="window.location.href='/OlympicGames/php/atleta.php';" /></td>
                    <td width="50">&nbsp;</td>
                    <td align="left"><input type="button" value="Show Atleta & Esporte" name="button1" onclick="window.location.href='/OlympicGames/php/atletaesporte.php';" /></td>
                    <td width="50">&nbsp;</td>
                    <td align="left"><input type="button" value="Show Esporte" name="button1" onclick="window.location.href='/OlympicGames/php/esporte.php';" /></td>
                    <td width="50">&nbsp;</td>
                    <td align="left"><input type="button" value="Show Mascote" name="button1" onclick="window.location.href='/OlympicGames/php/mascote.php';" /></td>
                    <td width="50">&nbsp;</td>
                    
                </tr>
                <br>

                <tr>
                    <td align="left"><input type="button" value="Show Olimpiada" name="button1" onclick="window.location.href='/OlympicGames/php/olimpiada.php';" /></td>
                    <td width="50">&nbsp;</td>
                    <td align="left"><input type="button" value="Show Pais" name="button1" onclick="window.location.href='/OlympicGames/php/pais.php';" /></td>
                    <td width="50">&nbsp;</td>
                    <td align="left"><input type="button" value="Show Participa" name="button1" onclick="window.location.href='/OlympicGames/php/participa.php';" /></td>
                    <td width="50">&nbsp;</td>
                    <td align="left"><input type="button" value="Show Sede" name="button1" onclick="window.location.href='/OlympicGames/php/sede.php';" /></td>
                    <td width="50">&nbsp;</td>
                    
                </tr>
            </table>
            <br>
            <h2>Consultas</h2>

            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="left"><input type="button" value="Open Consults" name="button1" onclick=" final_results(); return false;" /></td>
                    <td width="50">&nbsp;</td>
                    <td align="right"><input type="button" value="Close Consults." name="button2" onclick=" clear_result2(); return false;" /></td>
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
					<h2>RESULTADOS DAS CONSULTAS</h2>
					<div>
					<tr>
                        <td>
                        <div id="chart_div"></div>
                        </td>
                    </tr>
					</div>
				</table>
		</div>


    </body>
</html>
