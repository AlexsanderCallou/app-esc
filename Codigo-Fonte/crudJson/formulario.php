<?php
    require_once 'config/conexao.class.php';
    require_once 'config/crud.class.php';

    $con = new conexao(); // instancia classe de conxao
    $con->connect(); // abre conexao com o banco
    @$getId = $_GET['id'];  //pega id para ediçao caso exista
    if(@$getId){ //se existir recupera os dados e tras os campos preenchidos
        $consulta = mysql_query("SELECT * FROM cadastro WHERE id = + $getId");
        $campo = mysql_fetch_array($consulta);
    }
    
    if(isset ($_POST['cadastrar'])){  // caso nao seja passado o id via GET cadastra 
        $titulo = $_POST['titulo'];  //pega o elemento com o pelo NAME 
        $conteudo = $_POST['conteudo']; //pega o elemento com o pelo NAME
        $data = $_POST['data'];
        $categoria = $_POST['categoria']; 
        $crud = new crud('cadastro');  // instancia classe com as operaçoes crud, passando o nome da tabela como parametro
        $crud->inserir("titulo,conteudo,data,categoria", "'$titulo','$conteudo','$data','$categoria'"); // utiliza a funçao INSERIR da classe crud
        header("Location: index.php"); // redireciona para a listagem
    }

    if(isset ($_POST['editar'])){ // caso  seja passado o id via GET edita 
        $titulo = $_POST['titulo'];  //pega o elemento com o pelo NAME 
        $conteudo = $_POST['conteudo']; //pega o elemento com o pelo NAME
        $data = $_POST['data'];
        $categoria = $_POST['categoria']; 
        $crud = new crud('cadastro'); // instancia classe com as operaçoes crud, passando o nome da tabela como parametro
        $crud->atualizar("titulo,conteudo,data,categoria", "'$titulo','$conteudo','$data','$categoria'"); // utiliza a funçao ATUALIZAR da classe crud
        header("Location: index.php"); // redireciona para a listagem
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post"><!--   formulario carrega a si mesmo com o action vazio  -->
            
            <label>Titulo:</label>
            <input type="text" name="titulo" value="<?php echo @$campo['titulo']; // trazendo campo preenchido caso esteja no modo de ediçao ?>" />
            <br />
            <br />
            <label>Conteudo:</label>
            <input type="text" name="conteudo" value="<?php echo @$campo['conteudo']; // trazendo campo preenchido caso esteja no modo de ediçao ?>" />
            <br />
            <br />
            <label>Data:</label>
            <input type="text" name="data" value="<?php echo @$campo['data']; // trazendo campo preenchido caso esteja no modo de ediçao ?>" />
            <br />
            <br />
            <label>Categoria:</label>
            <input type="text" name="categoria" value="<?php echo @$campo['categoria']; // trazendo campo preenchido caso esteja no modo de ediçao ?>" />
            <br />
            <br />
            <?php
                if(@!$campo['id']){ // se nao passar o id via GET nao está editando, mostra o botao de cadastro
            ?>
                <input type="submit" name="cadastrar" value="Cadastrar" />
            <?php }else{ // se  passar o id via GET  está editando, mostra o botao de ediçao ?>
                <input type="submit" name="editar" value="Editar" />    
            <?php } ?>
        </form>
    </body>
</html>
<?php $con->disconnect(); // fecha conexao com o banco ?>