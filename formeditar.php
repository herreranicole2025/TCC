<?php

$id = $_GET['id'];

include "conecta.php";

$sql = "SELECT * FROM contatos WHERE id=$id";

$resultado = mysqli_query($conexao, $sql);

$dados = mysqli_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda - Editar</title>
</head>
<body>
   
    <h1> Ediatr Contato </h1>
    <form action="editar.php" method="post">
    <input type="hidden" name="id" value=" <?php echo $id;?> "/> <br>
    Nome:
    <input type="text" name="nome" value="<?php echo $dados['nome'];?>" /> <br>
    Telefone:
    <input type="text" name="telefone" value="<?php echo $dados['telefone'];?>" /> <br>
    <input type = "submit"value="OK">
   
</form>
</body>
</html>
