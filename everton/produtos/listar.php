<?php
	session_start();
	if(isset($_GET["carrinho"])){
		if(!isset($_SESSION["carrinho"]))
			$_SESSION["carrinho"] = array();
		
		$adiciona=true;
		foreach($_SESSION["carrinho"] as $linha){
			if($linha == $_GET['id'])
				$adiciona=false;
		}
		if($adiciona)
			array_push($_SESSION["carrinho"], $_GET['id']);
		
		echo "<pre>";
		print_r($_SESSION["carrinho"]);
		//session_destroy();
	}
	
	include_once "../class/Produtos.class.php";
	include_once "../class/ProdutosDAO.class.php";
	
	$objProdutosDAO = new ProdutosDAO();
	$retorno =$objProdutosDAO->listar();
	?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<?php
			if(isset($_GET['excluirOk']))
				echo "<h2>Excluido com sucesso!";
			
			if(isset($_GET['excluirError']))
				echo "<h2>Erro ao excluir!";

		?>
		<table border>
			<thead>
				<th>ID</th>
				<th>Nome</th>
				<th>Preço</th>
				<th>Categoria</th>
				<th colspan="2">Ações</th>
			</thead>
			<tbody>
			<?php
			foreach($retorno as $linha){
				echo "
				<tr>
					<td>".$linha['idprodutos']."</td>
					<td>".$linha['nome']."</td>
					<td>".$linha['preco']."</td>
					<td>".$linha['categoria']."</td>
					<td><a href='editar.php?id=".$linha['idprodutos']."'>Editar</a></td>
					<td><a href='excluir.php?id=".$linha['idprodutos']."'>Excluir</a></td>
					<td><a href='?id=".$linha['idprodutos']."&carrinho'>Comprar</a></td>
				</tr>";
			}
			?>
			</tbody>
		</table>
	</body>
</html>