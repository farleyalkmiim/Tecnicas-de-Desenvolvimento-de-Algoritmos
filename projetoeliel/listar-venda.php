<h1>Listar Venda</h1>

<?php
    $sql = "SELECT * FROM venda";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Data da Venda</th>";        
        print "<th>Valor da Venda</th>";        
        print "<th>ID Cliente</th>";        
        print "<th>ID Funcionario</th>";
        print "<th>ID Modelo</th>";
        print "<th>Ações</th>";
        print "</tr>";
        
        while( $row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_venda."</td>";
            print "<td>".$row->data_venda."</td>";
            print "<td>".$row->valor_venda."</td>";
            print "<td>".$row->cliente_id_cliente."</td>";
            print "<td>".$row->funcionario_id_funcionario."</td>";
            print "<td>".$row->modelo_id_modelo."</td>";
            print "<td>
    <button class='btn btn-success' 
   onclick=\"location.href='?page=editar-venda&id-venda={$row->id_venda}';\">
   Editar
</button>
  <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-venda&acao=excluir&id-venda={$row->id_venda}';}else{false;}\">Excluir</button>
            
               </td>";   
             print "</tr>";
            
                      
        }
        print "</table>";

    }else{
        print "<p>Não encontrou resultado</p>";
    }