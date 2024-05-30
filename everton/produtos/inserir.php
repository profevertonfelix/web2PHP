<?php
	include_once "../class/Categorias.class.php";
	include_once "../class/CategoriasDAO.class.php";
	
	$objCategoriasDAO = new CategoriasDAO();
	$retorno = $objCategoriasDAO->listar();
?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form action="inserir_ok.php" method="POST">
			Nome:<input type="text" name="nome"/><br />
			Preço:<input type="text" name="preco"/><br />
			Categoria:
			<select name="idcategorias">
				<?php
					foreach($retorno as $linha){
						echo "<option value='".$linha["idcategorias"]."'>
							".$linha["nome"]."
						</option>";
					}
				?>
			
			</select>
			<br />
			<button type="submit">Enviar</button>
		</form>
	</body>
</html>