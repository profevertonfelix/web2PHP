<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form action="inserir_ok.php" method="POST"
		enctype="multipart/form-data">
			Nome:<input type="text" name="nome"/><br />
			Email:<input type="email" name="email"/><br />
			Senha:<input type="password" name="senha"/><br />
			Foto:<input type="file" name="imagem"/><br />
			<button type="submit">Enviar</button>
		</form>
	</body>
</html>