<?php
    include("abre.php");
    include("menu.php");
    include ("conexao.php");
?>        
<div id="conteudo">
<table>
<tr>
<th>Tipo da Mercadoria</th>
<th>Nome da Mercadoria</th>
<th>Quantidade</th>
<th>Preço</th>
<th>Tipo da Negociação</th>
</tr>

<?php
    $sql = "SELECT * FROM vwOperacao";

    $resultado = $PDO->query($sql);

    foreach ($resultado as $row) 
    {
       echo "<tr>
             <td>".$row['tipo_Mercadoria']."</td>
             <td>".$row['nome_Mercadoria']."</td>
             <td>".$row['quantidade']."</td>
             <td>".$row['preco']."</td>
             <td>".$row['tipo_negocio']."</td>
             </tr>";
    }

    echo "</table>
    </div>";
    
    include("fecha.php");
?>