<?php 

$id = $_GET['id'];
$nome = filter_input(INPUT_GET, "nome");
$matricula = filter_input(INPUT_GET, "matricula");

$link = mysqli_connect("localhost", "root","lulu0306","crudLuana");

if($link){
    
    $query = msqli_query($link, "update nome set nome='$nome', matricula='matricula' where id='$id';");
    if($query){
        header("Location: CrudLuana.php");
    } else{
        die("Erro: ".mysqli_erro($link));
    }

    # TODO volta pra página inicial

} else{
    die("Erro: ".mysqli_erro($link));
}

?>