<h1>Editar Modelo</h1>
<?php
$id_modelo = (int) $_REQUEST['id_modelo']; 
$sql = "SELECT * FROM modelo WHERE id_modelo=".$_REQUEST['$id_modelo']; 
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar-modelo" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_modelo" value="<?php print $row->id_modelo;
    ?>">
    <div class="mb-3">
    <label>Marca</label>
<select name="marca_id_marca" class="form-control">
    <option>-- Escolha --</option>
<?php
    $sql_l = "SELECT * FROM marca";
    $res_l = $conn->query($sql_l);
    $qtd_l = $res_l->num_rows;

    if($qtd_l > 0){
        while($row_l = $res_l->fetch_object()){
            if($row->marca_id_marca == $row_l->id_marca){
                print "<option value='{$row_l->id_marca}' selected>{$row_l->nome_marca}</option>";
            } else {
                print "<option value='{$row_l->id_marca}'>{$row_l->nome_marca}</option>";
            }
        }
    } else {
        print "<option>Não há marcas</option>";
    }
?>
</select>
        <label>Nome
            <input type="text" name="nome_modelo" class="form-control" value="<?php print $row->nome_modelo; ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Ano
            <input type="ano" name="ano_modelo" class="form-control" value="<?php print $row->ano_modelo; ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Cor
            <input type="text" name="cor_modelo" class="form-control" value="<?php print $row->cor_modelo; ?>">
        </label>
    </div>
  <div class="mb-3">
    <label>Tipo
        <input type="text" name="tipo_modelo" class="form-control" value="<?php print $row->tipo_modelo; ?>">
    </label>
</div>
<div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>
</form>