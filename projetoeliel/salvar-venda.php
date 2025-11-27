<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar':

            $data_venda = $_POST['data-venda'];
            $valor_venda = $_POST['valor-venda'];
            $cliente_id_cliente = $_POST['cliente-id-cliente'];
            $funcionario_id_funcionario = $_POST['funcionario-id-funcionario'];
            $modelo_id_modelo = $_POST['modelo-id-modelo'];
            
            $sql = "INSERT INTO venda (data_venda, valor_venda, cliente_id_cliente, funcionario_id_funcionario, modelo_id_modelo)  
                    VALUES ('{$data_venda}', '{$valor_venda}', '{$cliente_id_cliente}', '{$funcionario_id_funcionario}', '{$modelo_id_modelo}')";
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrou com sucesso');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }else{
                print "<script>alert('Não Cadastrou');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }

            break;

        case 'editar':
      
            $data_venda = $_POST['data-venda'];
            $valor_venda = $_POST['valor-venda'];
            $cliente_id_cliente = $_POST['cliente-id-cliente'];
            $funcionario_id_funcionario = $_POST['funcionario-id-funcionario'];
            $modelo_id_modelo = $_POST['modelo-id-modelo'];

            $id_venda = $_POST['id-venda']; 

            $sql = "UPDATE venda SET 
                        data_venda ='{$data_venda}', 
                        valor_venda ='{$valor_venda}', 
                        cliente_id_cliente ='{$cliente_id_cliente}', 
                        funcionario_id_funcionario = '{$funcionario_id_funcionario}',                      
                        modelo_id_modelo ='{$modelo_id_modelo}' 
                        
                    WHERE id_venda =" . $id_venda;
            
            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Editou com sucesso');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }else{
                print "<script>alert('Não Editou');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }

            break;

        case 'excluir':
      
            $id_venda = isset($_REQUEST['id-venda']) ? (int)$_REQUEST['id-venda'] : 0;
            
            $sql = "DELETE FROM venda WHERE id_venda = " . $id_venda;

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Excluiu com sucesso');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }else{
                print "<script>alert('Não Excluiu');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }
            break;
    }
?>