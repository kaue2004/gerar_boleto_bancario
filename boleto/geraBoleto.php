<?php
if(isset($_POST['valor'])){
    $valor = str_replace(',','.',$_POST['valor']);
}

echo $valor;
?>