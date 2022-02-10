<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php

			//== igual
			//=== identico
			//!= ou < diferente
			//!== nao identico
			//< menor
			//> maior
			//<= menor ou igual
			//>= maior ou igual


		//Lembrete: () estabelecer precedência (os mais internos são os primeiros)

		if((22 == 22 && 3 == 3) or 5 != 5){
			echo "Verdadeiro";
		} else {
			echo "Falso";
		}

			// && ou AND - Verdadeiro se todas as expressões forem verdadeiras.
			// OR - Verdadeiro se pelo menos uma das expressões for verdadeira.
			// XOR - Verdadeiro apenas se UMA das expressões for verdadeira, mas não ambas.
			// ! - Inverte o resultado da expressão
			// Operadores condicionas/comparacao. Pratica: fazer varios testes comparando as expressões com os operadores logicos.

		if(!(3 == 3 && 10 > 3)){
			echo "Verdadeiro";
		} else {
			echo "Falso";
		}
		if(2 == 3 or 5 > 7){
			echo "Verdadeiro";
		} else {
			echo "Falso";
		}

		?>

	</body>

</html>