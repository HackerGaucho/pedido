<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Pedido de namoro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="shortcut icon" href="img/coracao.png">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<a href="https://twitter.com/hackergaucho" title="Anderson">
					<img src="img/hackergaucho.jpg" width="200" height="200">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<form action="salvar.php" method="post" class="text-center">
					<fieldset>
						<legend>Pedido de namoro</legend>
						<div class="mb-3">
							<label for="question">
								Quézia, você quer namorar comigo?
							</label>
						</div>
						<div class="mb-3">
							<label>
								Sim
								<input type="radio" name="resposta" value="1">
							</label>
						</div>
						<div class="mb-3">
							<label>
								Não
								<input type="radio" name="resposta" value="0">
							</label>
						</div>
						<button class="btn btn-primary" type="submit">Enviar</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
