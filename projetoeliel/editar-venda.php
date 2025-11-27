<h1>Editar Venda</h1>
<?php

    $sql = "SELECT * FROM venda WHERE id_venda = " . $_REQUEST['id-venda'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>
<form action="?page=salvar-venda" method="POST">    
    <input type="hidden" name="acao" value="editar">
    
    <input type="hidden" name="id-venda" value="<?php print $row->id_venda; ?>">
    
    <div class="mb-3">
        <label>Data da Venda
            <input type="date" name="data-venda" class="form-control" value="<?php print $row->data_venda;?>">
        </label>
    </div>
    
    <div class="mb-3">
        <label>Valor da Venda
            <input type="text" name="valor-venda" class="form-control" value="<?php print $row->valor_venda;?>">
        </label>
    </div>
    
    <div class="mb-3">
        <label>ID do Cliente
            <input type="text" name="cliente-id-cliente" class="form-control" value="<?php print $row->cliente_id_cliente;?>">
        </label>
    </div>
    
    <div class="mb-3">
        <label>ID do Funcionario
            <input type="text" name="funcionario-id-funcionario" class="form-control" value="<?php print $row->funcionario_id_funcionario;?>">
        </label>
    </div>
    
    <div class="mb-3">
        <label>ID do Modelo
            <input type="text" name="modelo-id-modelo" class="form-control" value="<?php print $row->modelo_id_modelo;?>">
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>