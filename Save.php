<?php
$nome = filter_input(INPUT_GET, "nome");
$matricula = filter_input(INPUT_GET, "matricula");

$link = mysqli_connect("localhost", "luanacosta", "lulu0306", "crudLuana");
if($link){
    
    $query = msqli_query($link, "insert into nome values('', '$nome', '$matricula')");
    if($query){
        header("Location: CrudLuana.php");
    } else{
        die("Erro: ".mysqli_erro($link));
    }

} else{
    die("Erro: ".mysqli_erro($link));
}
?>