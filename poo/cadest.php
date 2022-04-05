<!DOCTYPE html>

<?php
    include_once "acaoI.php";
    $acaoI = isset($_GET['acaoI']) ? $_GET['acaoI'] : "";
    $dados;
    if ($acaoI == 'editar'){
        $id_estado = isset($_GET['id_estado']) ? $_GET['id_estado'] : "";
    if ($id_estado > 0)
        $dados = buscarDados($id_estado);
}
    $title = "Cadastro de Cidades";
    $nome_est = isset($_POST['nome_est']) ? $_POST['nome_est'] : "";
    $sigla = isset($_POST['sigla']) ? $_POST['sigla'] : "";


//var_dump($dados);
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/estilo.css">

</head>


<body>

   
  
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
    
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">

            <li>

            <a class="nav-link" href="cidade.php">Cidades</a>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="estado.php">Estados</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="cadest.php">Cadastro de Estado</a>
            </li>
          <li>
          <a class="nav-link" href="cadcid.php">Cadastro de Cidade</a>

          </li>
            <ul>
        </div>
        </div>
    </nav>
    

    <div class="container-fluid">
<br>
<h3>Insira o Estado</h3><hr>
        <form method="post" action="acaoI.php">
        <div class="form-group col-lg-3">

        <label>ID do Estado</label>
                    <input readonly  type="text" name="id_estado" id="id_estado" class="form-control" value="<?php if ($acaoI == "editar") echo $dados['id_estado']; else echo 0; ?>"><br>

        <label>Nome </label>
                    <input name="nome_est" id="nome_est" type="text" required="true" class="form-control" value="<?php if ($acaoI == "editar") echo $dados['nome_est']; ?>"><br>
                
        <label>Sigla  </label>
                    <input name="sigla" id="sigla" type="text" required="true" class="form-control" value="<?php if ($acaoI == "editar") echo $dados['sigla']; ?>"
                    maxlength="2" minlength="2"><br>
          
        


    <button name="acaoI" value="salvar" id="acaoI" type="submit" class="btn btn-outline-secondary">
                    Salvar
                </button>


                </div>
           
    </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>