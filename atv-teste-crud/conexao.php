<?php
    try {
        $conexao = new PDO("mysql:host=localhost; dbname=crudsimples", "root",
        "123456");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("set names utf8");
    } catch (PDOException $erro) {
        echo "Erro na conexão:" . $erro->getMessage();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agenda de alunos</title>
    </head>
    <body>
        <form action="?act=save" method="POST" name="form1" >
            <h1>Agenda de alunos</h1>
            <hr>
            <input type="hidden" name="id" <?php
                if (isset($id) && $id != null || $id != "") {
                    echo "value=\"{$id}\"";
                } ?>/>
            Nome:
            <input type="text" name="nome" />
            E-mail:
            <input type="text" name="email" />
            Celular:
            <input type="text" name="celular" />
            <input type="submit" value="Salvar" />
            <input type="reset" value="Novo" />
            <hr>
        </form>
    </body>
</html>