<!DOCTYPE html>
<!-- alteracao.php -->
<html>
	<head>
	  <title>Cadastro de curso - Alteração</title>
	  <meta charset="utf-8">
	</head>
	<body>
<?php 


// efetua alteração do curso informado em form_alteracao.php
  $id = $_GET["id"];
  $curso = $_GET["curso"];
  $nr_carga_horaria = $_GET["carga_hr"];
  $dt_inicio = $_GET["inicio"];

  include_once "../inc/conectabd.inc.php";

  $query = "UPDATE tb_curso 
            SET ds_curso = '$curso'
              , nr_carga_horaria = '$nr_carga_horaria'
              , dt_inicio =  '$dt_inicio'
	          WHERE id_curso = $id;";
	  // echo $query.'<br>';

  if ($result = mysqli_query($link, $query)) {
	  echo "<script> alert('Alteração efetuada com sucesso')</script>";
  } else {
	  echo mysqli_error($link);
  }
  
  // fecha a conexão
  mysqli_close($link);
?>  
 <br>
 <a href="consulta_curso.php">Ver cursos cadastrados</a>
 
 </body>
</html>

