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
	<h2 style="padding: 0 40px 0 0;">DataSet: Olimpidas</h2>
	<p>O banco de dados entre 19** ate 2016</p>
    <p>O web esta rodando, nao-pronto mas rodando, lets create the database </p>
    <p>Test com banco de dados dado na aula EMPRESA.sql (mostrando tabela -> Departamento) </p>
    <tr>
        <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="left"><input type="button" value="Show All Database" name="button1" onclick=" " /></td>
                    <td width="50">&nbsp;</td>
                    <td align="right"><input type="button" value="Limpar pagina." name="button2" onclick=" window.location.href='/OlympicGames/index.php';" /></td>
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
    $resultsql = "SELECT Year,City,Sport,Discipline,Athlete,Country,Gender,Event,Medal FROM Summer";
    $result = mysqli_query($conexao, $resultsql);
    if(!$result){

        die('could not query:'. mysqli_error());
    }
    if($result->num_rows > 0){
        echo "<table><tr><th>Year</th><th>City</th><th>Sport</th><th>Discipline</th>
        <th>Athlete</th>
        <th>Country</th>
        <th>Gender</th>
        <th>Event</th>
        <th>Medal</th>

        </tr>";

        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>".$row["Year"]."</td><td>".$row["City"]."</td><td>".$row["Sport"]."</td><td>".$row["Discipline"]."</td>
            <td>".$row["Athlete"]."</td>
            <td>".$row["Country"]."</td>
            <td>".$row["Gender"]."</td>
            <td>".$row["Event"]."</td>
            <td>".$row["Medal"]."</td>


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
