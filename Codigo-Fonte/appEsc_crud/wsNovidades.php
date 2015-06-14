<?php
    require_once 'conexao.php';
    require_once 'crud.php';

    $con = new conexao(); // instancia classe de conxao
    $con->connect(); // abre conexao com o banco


$sth = mysql_query("SELECT titulo,data,urlimg,conteudo,urllink,categoria FROM novidades");
$rows = array();

while($r = mysql_fetch_assoc($sth)) {
    $rows[] = $r;
    
}
print json_encode( array ("novidades" => $rows));



?>

<?php $con->disconnect(); // fecha conexao com o banco ?>