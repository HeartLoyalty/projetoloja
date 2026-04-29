<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HomePage</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<form action="contato.php" method="post">
	<label for="idname">Nome:</label>
	<input type="text" name="Name" id="idname" class="Cname" placeholder="Insira seu Nome" maxlength="50" autocomplete="off" required autofocus>
	<br>
	<br>

	<label for="idmail">Email</label>
	<input type="Email" name="Email" id="idmail" class="Cmail" placeholder="Insira seu Email" maxlength="50" autocomplete="off">
	<br>
	<br>

	<label for="idmensagem">Mensagem</label>
	<textarea name="Mensagem" id="idmensagem" class="Cmensagem"></textarea>

	<input type="submit" name="Enviar">
	<input type="reset" name="Limpar" value="Limpar">
</form>


<script src="js/script.js"></script>
</body>
</html>