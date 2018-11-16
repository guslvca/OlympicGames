<?php
 include("./core/dadosconexao.php");
 try
	{
        
		$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha);
		$consultaSQL = "SELECT arquivo_tipo, MASCOTES FROM mascote WHERE ANO_OLIMP_MASCOTE=$_GET[ANO_OLIMP_MASCOTE]";
		$exComando = $conecta->prepare($consultaSQL); //testar o comando
		$exComando->execute(array());
        foreach($exComando as $resultado) 
		{
            $tipo = $resultado['arquivo_tipo'];
            $conteudo = $resultado['MASCOTES'];
            header("Content-Type: $tipo");
            echo $conteudo;
		}	
    }catch(PDOException $erro)
	{
		echo("Errrooooo! foi esse: " . $erro->getMessage());
	}
?>
