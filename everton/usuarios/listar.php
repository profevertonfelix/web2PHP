<?php
	include_once "../class/usuarios.class.php";
	include_once "../class/usuariosDAO.class.php";
	
	$objUsuariosDAO = new usuariosDAO();
	$retorno =$objUsuariosDAO->listar();
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
				<th>Email</th>
				<th>Foto</th>
				<th colspan="2">Ações</th>
			</thead>
			<tbody>
			<?php
			foreach($retorno as $linha){
				echo "
				<tr>
					<td>".$linha['id']."</td>
					<td>".$linha['nome']."</td>
					<td>".$linha['email']."</td>
					<td><img src='imagens/".$linha['imagem']."' width='100'/></td>
					<td><a href='editar.php?id=".$linha['id']."'>Editar</a></td>
					<td><a href='excluir.php?id=".$linha['id']."'>Excluir</a></td>
				</tr>";
			}
			?>
			</tbody>
		</table>
	</body>
</html>