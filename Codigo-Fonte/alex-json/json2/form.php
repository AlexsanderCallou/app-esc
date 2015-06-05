<?php

$dados = array (
"titulo"=>$_POST ['titulo'],
"tag"=>$_POST ['tag'],
"conteudo"=>$_POST ['conteudo'],
);

$fi=fopen($_POST ['json'].".json", "a") or die("erro");

fwrite($fi, json_encode($dados));

fclose($fi);

?>
