<?php
	include_once "../class/usuarios.class.php";
	include_once "../class/usuariosDAO.class.php";
	
	$id = $_GET["id"];
	$objUsuarioDAO = new usuariosDAO();
	$retorno = $objUsuarioDAO->listarUm($id);
?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form action="editar_ok.php" method="POST">
			Nome:<input type="text" name="nome" value="<?=$retorno['nome'];?>"/><br />
			Email:<input type="email" name="email" value="<?=$retorno['email'];?>"/><br />
			<input type="hidden" name="id" value="<?=$retorno['id'];?>"/>
			<button type="submit">Enviar</button>
		</form>
	</body>
</html>