<?php
	//echo "Olá mundo!";
	
	$nomes = ["nome1", "nome2", "nome3"];
	//echo "<pre>";
	//var_dump($nomes);
	//print_r($nomes);
?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<h1>Nomes dos estudantes</h1>
		<ul>
		<?php
			foreach($nomes as $linha){
		?>
			<li><?=$linha;?></li>
		<?php 
		}
		?>
		</ul>
		<ul>
		<?php
		foreach($nomes as $linha){
			echo "<li>$linha</li>";			
		}
		?>
		</ul>
		<?php
		foreach($nomes as $linha){
			echo "<a href='pagina2.php?$linha'>$linha</a>";			
		}
		?>
	</body>
</html>