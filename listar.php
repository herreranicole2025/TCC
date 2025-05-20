<?php
include "conecta.php";
$sql = "SELECT * FROM contatos";

$resultado = mysqli_query($conexao, $sql);

//função empty verifica se a variável está vazia ou nãp
if(!empty($resultado)){

    //lista de contatos
    echo "<table border=1>";
    echo "<tr>
     <th> NOME </th>
     <th> CONTATO </th>
     <th> OPÇÕES </th>
     </tr>";

    while ($dados = mysqli_fetch_assoc($resultado)){
        echo "<tr>";
        echo "<td> {$dados['nome']} </td>";
        echo "<td> {$dados['telefone']} </td>" ;
        echo "<td> 
        <a href='formeditar.php?id={$dados['id']}'><img src='icons/lápis.png'></a> <br>
         
        <a href='deletar.php?id={$dados['id']}'><img src='icons/lixo.png'></a> <br>
        </td>" ;
        echo "</tr>";
    }
    echo "</table>";
}else{
    echo "ainda não há contatos cadastrados";
}

echo "<hr>";
echo '<a href="index.php"> Voltar </a>';
?>
