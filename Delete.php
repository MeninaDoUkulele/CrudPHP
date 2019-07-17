<?php
$id = $_GET['id'];

$link = mysqli_connect("localhost", "root", "lulu0306", "crudLuana");

if($link){
    $sql = "delete from nome where id='$id';";
    $query = msqli_query($link, $sql);
    if($query){
        header("Location: CrudLuana.php");
    } else{
        die("Erro: ".mysqli_erro($link));
    }

} else{
    die("Erro: ".mysqli_erro($link));
}

?>