<h1>Cadastrar Venda</h1>
<form action="?page=salvar-venda" method="POST">
    
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
        <label>Data da Venda</label>
        <input type="date" name="data-venda" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Valor da Venda</label>
        <input type="text" name="valor-venda" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>ID do Cliente</label>
        <input type="text" name="cliente-id-cliente" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>ID do Funcionario</label>
        <input type="text" name="funcionario-id-funcionario" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>ID do Modelo</label>
        <input type="text" name="modelo-id-modelo" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>