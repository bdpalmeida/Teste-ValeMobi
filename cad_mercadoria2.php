<?php
    include("abre.php");
    include("menu.php");
    include("conexao.php");

    $tipo = $_POST['tipo'];
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];

    $sql = "SELECT COUNT(*) FROM Mercadoria WHERE tipo_Mercadoria = '$tipo' && nome_Mercadoria = '$nome'";
    
    if($PDO->query($sql)->fetchColumn() > 0)
    {
        echo "<script>alert('Problema no cadastro! Tipo e nome de mercadoria repetidos!')</script>";
    }
    else
    {
        $sql = "INSERT INTO Mercadoria (tipo_Mercadoria, nome_Mercadoria, quant_Mercadoria, preco_Mercadoria) values
                                     (:tipo, :nome, :quantidade, :preco)";

        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(':tipo', $tipo);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':quantidade', $quantidade, PDO::PARAM_INT);
        $stmt->bindParam(':preco', $preco, PDO::PARAM_INT);
 
        $resultado = $stmt->execute();
 
        if (!$resultado)
        {
            echo "<script>alert('Problema no cadastro!')</script>";
            exit;
        }
        else
        {
            $sql = "SELECT cod_Mercadoria FROM Mercadoria WHERE tipo_Mercadoria = '$tipo' && nome_Mercadoria = '$nome'";
         
            $resultado = $PDO->query($sql);

            foreach ($resultado as $row) 
            {
               echo "<script>alert('Mercadoria cadastrada, o código incluido é ".$row['cod_Mercadoria']."')</script>";
            }	               
        }
    }

    include('fecha.php');

    echo "<script>self.location='cad_mercadoria.php'</script>";
?>