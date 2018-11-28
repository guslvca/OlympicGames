<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Banco de dados de Olimpidas - 1888-2014</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="/OlympicGames/css/main.css" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container" >
    <div class="tooltable">


    <div class="header">
	<a class="navbar-brand" href="#" style="padding:1px;">
        <img src="/OlympicGames/img/olim.png"class="img_logo" >
        </a>
        <h3 style="font-size:2em; color:#5e5b5b;">The Olympic: DataSet</h3>
    <br>
    <tr>
        <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    
                    <td width="50">&nbsp;</td>
                    <td align="right"><input type="button" value="Limpar pagina." name="button2" onclick=" window.location.href='/OlympicGames/index.php';" ></td>
                </tr>
            </table>
        </td>
    </tr>
    </div>
    <?php

    $conexao = mysqli_connect("localhost","grupo_bd","12345","Olimpiada");
    if(!$conexao){
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $resultsql = "SELECT ANO_OLIMP,TIPO_OLIMP,PAIS_SEDE FROM sede ORDER BY ANO_OLIMP DESC";
    $result = mysqli_query($conexao, $resultsql);
    if(!$result){

        die('could not query:'. mysqli_error());
    }
    if($result->num_rows > 0){
        echo "<table class='table table-striped table-bordered table-hover'>
        <thead class='thead-dark'>
        <tr><th>OLYMPIC YEAR</th><th>OLYMPIC TYPE</th><th>PAIS SEDE</th>
        
        
        

        </tr>
        </thead>";

        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>".$row["ANO_OLIMP"]."</td><td>".$row["TIPO_OLIMP"]."</td><td>".$row["PAIS_SEDE"]."</td>
            
            
            


            </tr>";
        }
        echo "</table>";

    }
    else{
        echo "0 results";
    }
    mysqli_close($conexao);

    ?>
    </body>
</html>
