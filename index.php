<?php 
    include_once("db.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Bootstrap v5.2 CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <!-- jQuery v3.6.0 Google CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- FontAwesome 4 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Custom JS Script File -->
        <script src="script.js"></script>
        <!-- Custom CSS Style File -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Qta.</th>
            <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM food";
                $result = $db->query($query);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo("<tr><th scope=\"row\">".$row["id"]."</th><td>".$row["name"]."</td><td>".$row["qty"]."</td><td><i class=\"fa fa-edit\"></i>&nbsp;<i class=\"fa fa-close\"></i></td></tr>");
                    }
                } else {
                    echo("<tr><th scope=\"row\">The table is empty</th></tr>");
                }
            ?>
        </tbody>
    </table>
    </body>
</html>