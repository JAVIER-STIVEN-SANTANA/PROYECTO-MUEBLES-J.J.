<?php 
    include 'conexion.php';
 
    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($conexion,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Control de usuarios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link  rel="stylesheet"  href="usuarios.css">
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_usuario" placeholder="id_usuario">
                                    <input type="text" class="form-control mb-3" name="nombre_completo" placeholder="nombre_completo">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="correo">
                                    <input type="text" class="form-control mb-3" name="usuario" placeholder="usuario">
                                    <input type="text" class="form-control mb-3" name="contraseña" placeholder="contraseña">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id_usuario</th>
                                        <th>nombre_completo</th>
                                        <th>correo</th>
                                        <th>usuario</th>
                                        <th>contraseña</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_usuario']?></th>
                                                <th><?php  echo $row['nombre_completo']?></th>
                                                <th><?php  echo $row['correo']?></th>
                                                <th><?php  echo $row['usuario']?></th> 
                                                <th><?php  echo $row['contraseña']?></th> 
                                                
                                                <th><a href="actualizar.php?id=<?php echo $row['id_usuario'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_usuario'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>