<?php

require_once 'index.php';
require_once 'conexao.php';
require_once 'crud.php';

    $con = new conexao(); // instancia classe de conxao
    $con->connect(); // abre conexao com o banco
    @$getId = $_GET['id'];  //pega id para ediçao caso exista
    if(@$getId){ //se existir recupera os dados e tras os campos preenchidos
    	$consulta = mysql_query("SELECT * FROM novidades WHERE id = + $getId");
    	$campo = mysql_fetch_array($consulta);
    }
    
    if(isset ($_POST['cadastrar'])){  
        
        $titulo = $_POST['titulo']; 
        $data = $_POST['data']; 
        $urlimg = $_POST['urlimg'];
        $conteudo = $_POST['conteudo'];
        $urllink = $_POST['urllink'];
        $categoria = $_POST['categoria']; 
        
        $crud = new crud('novidades');  // instancia classe com as operaçoes crud, passando o nome da tabela como parametro
        $crud->inserir("titulo,data,urlimg,conteudo,urllink,categoria", "'$titulo','$data','$urlimg','$conteudo','$urllink','$categoria'"); // utiliza a funçao INSERIR da classe crud
        
        header("Location: novidades.php"); // redireciona para a listagem
    }

    if(isset ($_POST['editar'])){ // caso  seja passado o id via GET edita 

        $titulo = $_POST['titulo']; 
        $data = $_POST['data']; 
        $urlimg = $_POST['urlimg'];
        $conteudo = $_POST['conteudo'];
        $urllink = $_POST['urllink'];
        $categoria = $_POST['categoria'];         
        
        $crud = new crud('novidades'); // instancia classe com as operaçoes crud, passando o nome da tabela como parametro
        
        $crud->atualizar("titulo='$titulo',data='$data',urlimg='$urlimg',conteudo='$conteudo',urllink='$urllink',categoria='$categoria'","id='$getId'"); // utiliza a funçao ATUALIZAR da classe crud
        
        header("Location: novidades.php"); // redireciona para a listagem
    }

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" type="text/css" href="css/style.css">
        <title></title>
    </head>
    <body>
<?php
require_once 'form.php';
?>
        <h1 style="text-align: right;">Novidades</h1>
         <table border="1" id="tableVisualizar">
            <thead>
                <tr>
                    <th>
                        Titulo
                    </th>
                    <th>
                        Data
                    </th>
                    <th>
                        urlimg
                    </th>
                    <th>
                        Conteudo
                    </th>
                    <th>
                    	urllink
                    </th>
                    <th>
                    	categoria
                    </th>
                </tr>
            </thead>

        
		<tbody>
                <?php
                    $consulta = mysql_query("SELECT * FROM novidades"); // query que busca todos os dados da tabela PRODUTO
                    while($campo = mysql_fetch_array($consulta)){ // laço de repetiçao que vai trazer todos os resultados da consulta
                ?>
                    <tr>
                        <td>
                            <?php echo $campo['titulo']; // mostrando o campo NOME da tabela ?>
                        </td>
                        <td>
                            <?php echo $campo['data']; // mostrando o campo NOME da tabela ?>
                        </td>
                        <td>
                            <?php echo $campo['urlimg']; // mostrando o campo NOME da tabela ?>
                        </td>
                        <td>
                            <?php echo $campo['conteudo']; // mostrando o campo NOME da tabela ?>
                        </td>
                        <td>
                            <?php echo $campo['urllink']; // mostrando o campo NOME da tabela ?>
                        </td>
                        <td>
                            <?php echo $campo['categoria']; // mostrando o campo NOME da tabela ?>
                        </td>
                        <td>
                            <a href="novidades.php?id=<?php echo $campo['id']; //pega o campo ID para a ediçao ?>">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="excluirNovidades.php?id=<?php echo $campo['id'];  //pega o campo ID para a exclusao ?>">
                                Excluir
                            </a>
                        </td>
                    </tr>
                <?php } ?>
         </tbody>
</table>
</body>
</html>