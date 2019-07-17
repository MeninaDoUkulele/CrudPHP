<html>
    <head>
        <meta charset="UTF-8">  
        <title> Edit Person | Luana's Crud </title>
        <link rel="stylesheet" href="Style.css"/>
        <?php 
        $id = filter_input(INPUT_GET, "id");
        $nome = filter_input(INPUT_GET, "nome");
        $matricula = filter_input(INPUT_GET, "matricula");
        ?>
    </head>
    <body>
        <div id="content">
            <h1> Edit Person </h1>
            <p>
            <form action="Edit.php">
                <input type="hidden" name="id" value="<?php echo $id ?>"/>
                Nome: <input type="text" name="nome" value="<?php echo $nome ?>"/> <br/>
                Matricula: <input type="text" name="matricula" value="<?php echo $matricula ?>"/> <br/>
                <input type="submit" value="Edit"/>
            </form>
            </p>
        </div>
    </body>
</html>