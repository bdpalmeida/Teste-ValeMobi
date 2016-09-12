<?php
    include("abre.php");
    include("menu.php");
    include("conexao.php");

    $tipo = $_POST['tipo'];
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $tipo_Negocio = $_POST['negociacao'];

    $sql = "SELECT cod_Mercadoria, (preco_Mercadoria * '$quantidade') AS preco FROM Mercadoria WHERE tipo_Mercadoria = '$tipo' && nome_Mercadoria = '$nome'";
    
    $resultado = $PDO->query($sql);

    foreach ($resultado as $row) 
    {
        $cod_Mercadoria = $row['cod_Mercadoria'];
        $preco = $row['preco'];
    }

    $sql = "INSERT INTO Operacao (cod_Mercadoria, quantidade, preco, tipo_negocio) values
                                 (:cod_Mercadoria, :quantidade, :preco, :tipo_Negocio)";

    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':cod_Mercadoria', $cod_Mercadoria);
    $stmt->bindParam(':quantidade', $quantidade, PDO::PARAM_INT);
    $stmt->bindParam(':preco', $preco, PDO::PARAM_INT);
    $stmt->bindParam(':tipo_Negocio', $tipo_Negocio);

    $resultado = $stmt->execute();

    if (!$resultado)
    {
        echo "<script>alert('Problema no cadastro!')</script>";
        exit;
    }   
    else
    {
        echo "<script>alert('Operação cadastrada! O valor total da operação foi de R$ ".$preco."')</script>";
    }

    include('fecha.php');

    echo "<script>self.location='cad_operacao.php'</script>";
?>