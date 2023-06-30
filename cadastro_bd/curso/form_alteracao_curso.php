
<!DOCTYPE html>
<!-- form_alteracao.html -->
<?php
// examine como foi implementado a alteração da tb_aluno
// para implementar a alteração a sugestão é receber apenas o "id"
// use a função recupera_curso($id) que deve ser criada dentro do arquivo /inc/funcoes.inc.php

 $id = $_GET["id"];
 $curso = urldecode($_GET["curso"]);

 include_once "../inc/conectabd.inc.php";

 $query = "SELECT nr_carga_horaria, dt_inicio FROM tb_curso WHERE id_curso = '$id';";
  if ($result = mysqli_query($link, $query)) {
	while ($row = mysqli_fetch_assoc($result)) {
				$nr_carga_horaria = $row["nr_carga_horaria"];
				$dt_inicio = $row["dt_inicio"];
	}
}

?>

<html>
	<head>
	  <title>Cadastro de curso</title>
	  <meta charset="utf-8">
	</head>
	<body>
		<h1>Atualizar curso</h1>
		<form action="alteracao_curso.php" 
		      method="GET">
			  
			<input type="hidden" name="id" value="<?php echo $id;?>">

			<label for="ds_curso">Curso: </label>
			<input type="text" name="curso" id="ds_curso" value="<?php echo $curso;?>" required>
			<br>

			<label for="carga_horaria">Carga Horária: </label>
			<input type="text" name="carga_hr" id="nr_carga_horaria" value="<?php echo $nr_carga_horaria;?>" required>
			<br>

			<label for="dt_inicio">Data de Início: </label>
			<input type="text" name="inicio" id="dt_inicio" value="<?php echo $dt_inicio;?>">
			<br>
			
			<input type="submit" value="Ok">
		</form>
	</body>
</html>