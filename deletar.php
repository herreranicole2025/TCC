<?php

$id = $_GET['id'];
include "conecta.php";

$sql = "DELETE FROM contatos WHERE id = $id";
mysqli_query($conexao,$sql);

echo "Contato deletado!";

echo "<hr>";
echo '<a href="listar.php"> Voltar </a>';
?>