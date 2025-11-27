<?php 
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_POST['nome_modelo'];
            $ano = $_POST['ano_modelo'];
            $cor = $_POST['cor_modelo'];
            $tipo = $_POST['tipo_modelo'];
            $id_marca = $_POST['marca_id_marca'];

            // CORREÇÃO:
            // 1. Adicionada vírgula entre tipo_modelo e marca_id_marca
            // 2. Trocada a ordem de $tipo e $cor para bater com a ordem das colunas
            $sql = "INSERT INTO modelo 
                    (nome_modelo, ano_modelo, cor_modelo, tipo_modelo, marca_id_marca)
                    VALUES ('{$nome}', '{$ano}', '{$cor}', '{$tipo}', '{$id_marca}')";

            $res = $conn->query($sql);

            if ($res==true){
                print "<script>alert('cadastrou com sucesso');</script>";
                print "<script>location.href='?page=listar-modelo';</script>";
            }else {
                print "<script>alert('Não cadastrou');</script>";
                print "<script>location.href='?page=listar-modelo';</script>";
            }
            break;

        case 'editar':
            $nome = $_POST['nome_modelo'];
            $ano = $_POST['ano_modelo'];
            $cor = $_POST['cor_modelo'];
            $tipo = $_POST['tipo_modelo'];
            $marca = $_POST['marca_id_marca'];

            // CORREÇÃO:
            // Adicionadas as vírgulas que faltavam antes de tipo_modelo e marca_id_marca
            $sql = "UPDATE modelo SET 
                        nome_modelo='{$nome}', 
                        ano_modelo='{$ano}', 
                        cor_modelo='{$cor}', 
                        tipo_modelo='{$tipo}', 
                        marca_id_marca='{$marca}' 
                    WHERE id_modelo=".$_REQUEST['id_modelo'];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Editou com sucesso!');</script>";
                print "<script>location.href='?page=listar-modelo';</script>";
            }else{
                print "<script>alert('Falha na edição');</script>";
                print "<script>location.href='?page=listar-modelo';</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM modelo WHERE id_modelo=".$_REQUEST['id_modelo'];          
            $res = $conn->query($sql);          
            if($res == true){
                print "<script>alert('Excluiu com sucesso!');</script>";
                print "<script>location.href='?page=listar-modelo';</script>";
            }else{
                print "<script>alert('Não excluiu');</script>";
                print "<script>location.href='?page=listar-modelo';</script>";
            }
            break;
    }
?>