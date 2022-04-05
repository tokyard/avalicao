<?php

    include_once "conf/default.inc.php";
    require_once "conf/Conexao.php";

    
    $acaoI = isset($_GET['acaoI']) ? $_GET['acaoI'] : "";
    if ($acaoI == "excluir"){
        $id_estado = isset($_GET['id_estado']) ? $_GET['id_estado'] : 0;
        require_once ("classe/estado.class.php");
        $estado = new Estado("", "", "");
        $resultado = $estado->excluir($id_estado);
            header("location:estado.php");
    }
    

   
    $acaoI = isset($_POST['acaoI']) ? $_POST['acaoI'] : "";
    if ($acaoI == "salvar"){
        $id_estado = isset($_POST['id_estado']) ? $_POST['id_estado'] : "";
        if ($id_estado == 0){
            require_once ("classe/estado.class.php");

            $estado = new Estado("", $_POST['nome_est'], $_POST['sigla']);
            
            $resultado = $estado->inserir();
            header("location:estado.php");
        }
        else
        require_once ("classe/estado.class.php");

        $estado = new Estado("", $_POST['nome_est'], $_POST['sigla']);
        
        $resultado = $estado->editar($id_estado);
        header("location:estado.php");
    }
    
    
?>