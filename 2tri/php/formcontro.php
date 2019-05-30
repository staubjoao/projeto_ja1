<?php
echo "<h2>Dados do formulário</h2>";

//Receber os dados pelo "nome" de cada um
//A "posição" da request é o nome d campo do formulário

$login = $_REQUEST['login'];
$senha = $_REQUEST['senha'];

echo "O login é $login possui a senha $senha";

 ?>
