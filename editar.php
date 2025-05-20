<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$tel = $_POST['telefone'];

include "conecta.php";

$sql = "UPDATE contatos SET nome='$nome', telefone='$tel' WHERE id=$id";

if (mysqli_query($conexao, $sql));{

    echo "Editado com sucesso!";

}else{
    echo "Falha na Edição!";
}

echo"<hr>";
echo '<a href="listar.php"> Voltar </a>';
?>