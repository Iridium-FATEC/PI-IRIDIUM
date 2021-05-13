<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table class="table table-striped table-hover table-bordered ">
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Data</th>
            </tr>
        </thead>

        <tbody>
            <?php
            include_once("conexao.php");

            $result_usuario = "SELECT * FROM voluntario ORDER BY id DESC";  
            $resultado_usuario = mysqli_query($conn, $result_usuario);  
                if(($resultado_usuario) and ($resultado_usuario->num_rows != 0)){}
                    while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
            ?>
            <tr>
                <th><?php echo $row_usuario['id']; ?></th>
                <td><?php echo $row_usuario['nome']; ?></td>
                <td><?php echo $row_usuario['created']; ?></td>
            </tr>  
            <?php 
                    }
            ?>

        </tbody>
    </table>
    
</body>
</html>