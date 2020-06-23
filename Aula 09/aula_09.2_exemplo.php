<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Aula 09 de PHP</title>
	</head>
	<body>        
        <?php
            $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
            $i = date("Y") - $a;
            echo "Você nasceu em $a e tem $i anos. <br/>";
            if($i < 16){
                $voto = "não vota";
                echo "E com essa idade, você $voto";
            }
            elseif(($i >= 16 && $i < 18) || ($i < 65)){
                $voto = "opcional";
            }else{
                $voto = "obrigatório";
            }
            echo "E seu voto é $voto";
        ?>
	</body>
</html>