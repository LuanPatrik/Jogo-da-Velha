<!DOCTYPE html>
<html>
<head>
	<title>Jogo da Velha</title>
	<link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>
	<div class="game">
		<div class="row">
			<div class="square" id="0"></div>
			<div class="square" id="1"></div>
			<div class="square" id="2"></div>
		</div>
		<div class="row">
			<div class="square" id="3"></div>
			<div class="square" id="4"></div>
			<div class="square" id="5"></div>
		</div>
		<div class="row">
			<div class="square" id="6"></div>
			<div class="square" id="7"></div>
			<div class="square" id="8"></div>
		</div>
	</div>

	<form action="jogar.php" method="POST">
		<input type="hidden" name="tabuleiro" id="tabuleiro">
		<input type="submit" value="Jogar">
	</form>

	<script src="script.js"></script>
</body>
</html>
