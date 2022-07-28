<!DOCTYPE html>
<html lang="pt" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Sucesso</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="shortcut icon" href="img/coracao.png">
		<style>
			.flip-horizontally {
				transform: scaleX(-1);
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row text-center">
				<div class="col">
					<img src="img/coracao_partido.png" alt="Coração" width="120" height="120">
				</div>
			</div>
			<div class="row">
				<div class="col text-end">
					<a href="https://twitter.com/hackergaucho" title="Anderson">
						<img class="flip-horizontally" src="img/hackergaucho.jpg" width="200" height="200">
					</a>
				</div>
				<div class="col text-start">
					<a href="https://twitter.com/queziacode" title="Quézia">
						<img class="flip-horizontally" src="img/queziacode.jpg" width="200" height="200">
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col text-center">
					<h1>Sucesso</h1>
					<p>Anderson e Quézia namoraram desde <?php print @$desde; ?> até Sat, 09 Jul 2022 18:59
						-0300</p>
				</div>
			</div>
		</div>
	</body>
</html>
