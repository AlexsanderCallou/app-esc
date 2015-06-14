<?php
    require_once 'conexao.php';
    require_once 'crud.php';

    $con = new conexao(); // instancia classe de conxao
    $con->connect(); // abre conexao com o banco


$sth = mysql_query("SELECT titulo,data,urlimg,conteudo,urllink,categoria FROM cursos");
$rows = array();

while($r = mysql_fetch_assoc($sth)) {
    $rows[] = $r;
    
}
print json_encode( array ("cursos" => $rows));

$fi=fopen($_POST ['json']."jsons/cadCusos.json", "w") or die("erro");

fwrite($fi, json_encode($rows));

fclose($fi);

?>

<?php $con->disconnect(); // fecha conexao com o banco ?>