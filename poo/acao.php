<?php

    include_once "conf/default.inc.php";
    require_once "conf/Conexao.php";

    
    $acao = isset($_GET['acao']) ? $_GET['acao'] : "";
    if ($acao == "excluir"){
        $id_cidade = isset($_GET['id_cidade']) ? $_GET['id_cidade'] : 0;
        require_once ("classe/cidade.class.php");
        $cidade = new Cidade("", "", "");
        $resultado = $cidade->excluir($id_cidade);
        header("location:cidade.php");
    }

  
    $acao = isset($_POST['acao']) ? $_POST['acao'] : "";
    if ($acao == "salvar"){
        $id_cidade = isset($_POST['id_cidade']) ? $_POST['id_cidade'] : "";
        if ($id_cidade == 0){
            require_once ("classe/cidade.class.php");

            $cidade = new Cidade("", $_POST['nome_cid'], $_POST['id_estado']);
            
            $resultado = $cidade->inserir();
            header("location:cidade.php");
        }
        else
        require_once ("classe/cidade.class.php");

        $cidade = new Cidade("", $_POST['nome_cid'], $_POST['id_estado']);
        
        $resultado = $cidade->editar($id_cidade);
        header("location:cidade.php");
    }


?>