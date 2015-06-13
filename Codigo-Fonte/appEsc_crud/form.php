<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form id="formCadastro" action="" method="post"><!--   formulario carrega a si mesmo com o action vazio  -->
            <div id="campos">
            <label>Titulo:</label>
            <input type="text" name="titulo" value="<?php echo @$campo['titulo']; // trazendo campo preenchido caso esteja no modo de ediçao ?>" />
            <br />
            <label>Data:</label>
            <input type="text" name="data" value="<?php echo @$campo['data']; // trazendo campo preenchido caso esteja no modo de ediçao ?>" />
            <br />
            <label>url Imagem:</label>
            <input type="text" name="urlimg" value="<?php echo @$campo['urlimg']; // trazendo campo preenchido caso esteja no modo de ediçao ?>" />
            <br />
            <label>Conteudo:</label>
            <input type="text" name="conteudo" value="<?php echo @$campo['conteudo']; // trazendo campo preenchido caso esteja no modo de ediçao ?>" />
            <br />
            <label>url Link:</label>
            <input type="text" name="urllink" value="<?php echo @$campo['urllink']; // trazendo campo preenchido caso esteja no modo de ediçao ?>" />
            <br />
            <label>Categoria:</label>
            <input type="text" name="categoria" value="<?php echo @$campo['categoria']; // trazendo campo preenchido caso esteja no modo de ediçao ?>" />
            <br />
            </div>
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