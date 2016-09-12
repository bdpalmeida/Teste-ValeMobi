function validaCampo()
{
    if(document.cadastro.tipo.value=="")
    {
        alert("O campo tipo é obrigatório!");
        return false;
    }
    else
        if(document.cadastro.nome.value=="")
        {
            alert("O campo nome é obrigatório!");
            return false;
        }
        else   
            if(document.cadastro.quantidade.value=="")
            {
                alert("O campo quantidade é obrigatório!");
                return false;
            }
            else    
                if(document.cadastro.preco.value=="")
                {
                    alert("O campo preço é obrigatório!");
                    return false;
                }
                else
                    return true;
}