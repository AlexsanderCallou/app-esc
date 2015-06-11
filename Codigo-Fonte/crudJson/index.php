<?php
    require_once 'config/conexao.class.php';
    require_once 'config/crud.class.php';

    $con = new conexao(); // instancia classe de conxao
    $con->connect(); // abre conexao com o banco
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //apenas testando a conexao
            if($con->connect() == true){
                echo 'Conectou';
            }else{
                echo 'Não conectou';
            }
        ?>
        <a href="formulario.php">
            Novo
        </a>
        <table style="border: 1px solid red;">
            <thead>
                <tr>
                    <th>
                        Titulo
                    </th>
                    <th>
                        Conteudo
                    </th>
                    <th>
                        Data
                    </th>
                    <th>
                        Categoria
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $consulta = mysql_query("SELECT * FROM cadastro"); // query que busca todos os dados da tabela PRODUTO
                    while($campo = mysql_fetch_array($consulta)){ // laço de repetiçao que vai trazer todos os resultados da consulta
                ?>
                    <tr>
                        <td>
                            <?php echo $campo['titulo']; // mostrando o campo NOME da tabela ?>
                        </td>
                        <td>
                            <?php echo $campo['conteudo']; // mostrando o campo DESCRICAO da tabela ?>
                        </td>
                        <td>
                            <?php echo $campo['data']; // mostrando o campo NOME da tabela ?>
                        </td>
                        <td>
                            <?php echo $campo['categoria']; // mostrando o campo DESCRICAO da tabela ?>
                        </td>
                        <td>
                            <a href="formulario.php?id=<?php echo $campo['id']; //pega o campo ID para a ediçao ?>">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="excluir.php?id=<?php echo $campo['id'];  //pega o campo ID para a exclusao ?>">
                                Excluir
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>


<?php
//php do json

$sth = mysql_query("SELECT titulo,conteudo,data,categoria FROM cadastro");
$rows = array();

while($r = mysql_fetch_assoc($sth)) {
    $rows[] = $r;
    
}
print json_encode($rows);

$fi=fopen($_POST ['json']."cad.json", "a") or die("erro");

fwrite($fi, json_encode($rows));

fclose($fi);

?>
    </body>
</html>
<?php $con->disconnect(); // fecha conexao com o banco ?>