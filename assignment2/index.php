<?php

$sql ="SELECT id, title,name, superpowers*FROM superhuman";
        require_once("./connect.php");
        $rows = [];
if($conn){
    $result =$conn->query($sql);
    $rows=$result->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Superhumans</title>
    </head>

    <body>
        <div class="container">
            <header class="mt-3">
                <h1>Superhumans</h1>
                <p>
                    <a href="./new.php">Enter new superhuman</a>
                </p>
            </header>

            <hr>

            <table class="table for superhuman">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Name</th>
                        <th>Powers</th>
                    </tr>
                </thead >
                <tbody>
                    <?php foreach($rows as $row): ?>
                        <tr>
                            <td><?= $row->title ?></td>
                            <td><?= $row->name ?></td>
                            <td><?= $row->Superpowers ?></td>
                            <td>
                                <a href="./edit.php?id=<?=$row->id ?>">edit</a>
                                <a href="./delete.php?id=<?=$row->id ?>">delete</a>
                            </td>
                            
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </body>
</html>