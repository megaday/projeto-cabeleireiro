<!DOCTYPE html>

<html>

	<head>
		<title>Agendamento - Cabelos</title>
		<meta charset="UTF-8">
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
		<link rel="stylesheet" href="mdl/material.red-orange.min.css" />
		<script defer src="mdl/material.min.js"></script>
		<link rel="stylesheet" href="css/estilo.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #sucesso {
                text-align: center;
            }
        </style>
	</head>

	<body>
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<header class="mdl-layout__header">
           		<?php 
           		include("menu.php");

                $nome = $_GET['nome'];
                $telefone = $_GET['tel'];

                $arrNome = split(" ", $nome);
                $priNome = $arrNome[0];

           		?>
        	</header>

			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--2-col"></div> <!-- Espaçamento -->
				<div id="content" class="mdl-cell mdl-cell--8-col mdl-layout__content"> <!-- Conteúdo -->

                    <h3 class="mdl-layout__title" id="sucesso">Horário agendado!</h3>
					<p id="sucesso"><?php echo $priNome; ?></p>
						
				</div>
				<div class="mdl-cell mdl-cell--2-col"></div> <!-- Espaçamento -->
			</div>

			<footer class="mdl-mini-footer">
				<?php
				include("footer.html");
				?>
			</footer>
		</div>
	</body>
</html>