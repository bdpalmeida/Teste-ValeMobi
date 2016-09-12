<?php
    include("abre.php");
    include("menu.php");
    include('conexao.php');
?>

<div id="conteudo">
    <h2>Cadastro de Operação</h2>
    <form id="cadastro" name="cadastro" onsubmit="return validaCampo();" method="post" action="cad_operacao2.php">
        <p><label>Tipo da mercadoria: </label><select id="tipo" name="tipo">
            <?php
                $sql = "SELECT * FROM Mercadoria";

                $resultado = $PDO->query($sql);

                foreach ($resultado as $row) 
                {
                    echo '<option value="'.$row['tipo_Mercadoria'].'">'.$row['tipo_Mercadoria'].'</option>';
                }            
            ?>
            </select>
        </p>
        <p><label>Nome da mercadoria: </label><select id="nome" name="nome">
            <?php
                $sql = "SELECT * FROM Mercadoria";

                $resultado = $PDO->query($sql);

                foreach ($resultado as $row) 
                {
                    echo '<option value="'.$row['nome_Mercadoria'].'">'.$row['nome_Mercadoria'].'</option>';
                }            
            ?>
            </select>
        </p>
        <p><label>Quantidade: </label><input type="number" id="quantidade" name="quantidade" min="1" step="1" onselect="precoTotal()"/></p>
        <p><label>Tipo negociação: </label>
            <select id="negociacao" name="negociacao">
                <option value="Compra">Compra</option>
                <option value="Venda">Venda</option>
            </select>
        </p>
        
        <br />
        
        <p>
            <input id="cadastrar" name="cadastrar" type="submit" value="Cadastrar">
            <input id="limpar" name="limpar" type="reset" value="Limpar">
        </p>
        
    </form>
</div>

<script src="valida_Campo.js"></script>

<?php
    include("fecha.php");
?>