  <?php
  // conectabd.inc.php
  $host_name = "localhost";
  $user_name = "aplicacao_curso";
  $password = "curso1234567";
  $database = "curso";
  $link = mysqli_connect($host_name, $user_name, $password, $database);
  
  // mysqli_connect_errno - devolve o código do erro
  if (mysqli_connect_errno()) {
	  // mysqli_connect_error - devolve a mensagem de erro
	  printf("Erro ao conectar ao banco de dados: %s<br> ", mysqli_connect_error() );
	  exit();
  }

//  var_dump($link);
 //   echo 'aqui <br>';