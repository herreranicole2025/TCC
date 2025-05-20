<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

$conexao = mysqli_connect("localhost","root","","Agenda");
//servidor, usuario, senha e banco

$sql = "INSERT INTO contatos (nome,telefone) VALUES ('$nome','$telefone')";

if (mysqli_query($conexao, $sql)){

    echo "Inserido com sucesso!";

}else{
    echo "Falha na inserção!";
}
echo"<hr>";
echo '<a href="index.php"> Voltar </a>';

?>


