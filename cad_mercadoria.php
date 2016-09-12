<?php
    include("abre.php");
    include("menu.php");
?>

<div id="conteudo">
    <h2>Cadastro de Mercadoria</h2>
    <form id="cadastro" name="cadastro" onsubmit="return validaCampo();" method="post" action="cad_mercadoria2.php">
        <p><label>Tipo: </label><input type="text" id="tipo" name="tipo" placeholder="Insira o tipo da mercadoria"/></p>
        <p><label>Nome: </label><input type="text" id="nome" name="nome" placeholder="Insira o nome da mercadoria"/></p>
        <p><label>Quantidade: </label><input type="number" id="quantidade" name="quantidade" min="1" step="1" placeholder="0"/></p>
        <p><label>Preço: </label><input type="number" id="preco" name="preco" min="0" step="any" placeholder="R$"/></p>      
        
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