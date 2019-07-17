<!-- https://www.youtube.com/watch?v=nfBMKc2gkcU -->

<html>
    <head>
        <title> Luana's Crud </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Style.css"/>

        <?php
            $parametro = filter_input(INPUT_GET, "parametro");
            $mysqllink = mysqli_connect("localhost", "root","lulu0306","crudLuana");
            if (!$mysqlink){
                echo "Unable to connect to DB: " . mysqli_error($mysqllink);
                exit;
            }

            if (!mysql_select_db("crudLuana")){
                echo "Unable to select crudLuana: " . mysqli_error($mysqllink);
                exit;
            } else{
                echo "conected to crudLuana";
            }

            $dados = mysql_query("select * from nome order by nome");
            if (!$dados) {
                echo "Could not successfully run query from DB: " . mysqli_error($mysqllink);
                exit;
            }

            $linha = mysql_fecth_assoc($dados);


            $total = mysqli_num_rows($dados);

            if ($total == 0) {
                echo "No rows found, nothing to print so am exiting";
                exit;
            }

            
        ?>
    </head>
    <body>
        esse aqui eh html
    <?php
    echo "tem php sim";
     ?>
        <div id="content">
            <h1> Register  <?php var_dump($dados); ?> </h1>

            <p>
                <form action="<?php echo $_SERVER[PHP_SELF]; ?>">
                    <input type="text" name="parametro"/>
                    <input type="submit" value="Search"/>
                </form>
            </p>

            <p>
                <a href="Page.html"> Add New Name </a>
            </p>

            <table border ="1">

                <tr>
                    <td> Id </td>
                    <td> Name </td>
                    <td> Registration </td>
                </tr>

                <?php
                    if($total){ do {
                ?>
                <tr>
                    <td> <?php echo $linha['id']; ?> </td>
                    <td> <?php echo $linha['nome'] ?> </td>
                    <td> <?php echo $linha['matricula'] ?> </td>
                    <td> <a href="Edit.php"> Edit </a> </td>
                    <td> <a href="<?php echo "Delete.php?id=" . $linha['id'] ?> "> Delete </a> </td>
                </tr>

                <?php
                    } while($linha = mysql_fetch_assoc($dados));
                    mysql_free_result($dados);}
                    mysql_close($mysqllink);
                ?>

            </table>
        </div>
    </body>
</html>

