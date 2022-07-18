<?php
    require_once "config.php";
    require_once "db/connDb.php";
   
    $section = "admin_inventario";
    
    //listar inventario
    $miConsulta = connDB()->prepare("SELECT * FROM producto");
    $miConsulta->execute();// Ejecutar consulta
    $data = $miConsulta->fetchAll(PDO::FETCH_ASSOC);// Obtener en array los datos de la BD
    


?>

<!DOCTYPE html>
<html>

<?php include_once "menu.php"; ?>

<body>

    <center>
        <div class="input-group mb-3 size-input-search">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username">
        </div>
    </center>

    <!-- inicio de tabla -->
    <div class="top-table table-responsive">
        <table class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Opcion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value) {
                    
                    echo '<tr>
                            <th scope="row">1</th>
                            <td>'. $value["codproducto"]. '</td>
                            <td>'. $value["descripcion"] . '</td>
                            <td>' . $value["precio"] . '</td>
                            <td>' . $value["cantidad de producto"] . '</td>
                            <td>
                                <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a href="#?delete" class="btn btn-danger js-delete"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        ';
                } ?>
                
            </tbody>
        </table>
    </div>
    <!--  end table -->


    <footer>
        <?php
        include_once("pie_de_pagina.php");
        ?>
        <script src="js/bootstrap_js/bootstrap.min.js"></script>
        <script src="js/sweetalert.min.js"></script>
        <script>
            var deletes = document.querySelectorAll(".js-delete");
            deletes.forEach(function(value, key) {
                value.addEventListener("click", function() {
                    dialogDelete(value)
                }, false);
            });

            function dialogDelete(value) {
                swal('ADVERTENCIA', "Estas seguro de eliminar el producto?.", "warning", {
                    buttons: ["Cancelar", "Eliminar"]
                }).then(function(val) {
                    var redir = value.getAttribute("href");
                    if (val)
                        window.location.href = redir.substr(1);
                }).then(function(val) {});
            }
        </script>
    </footer>
</body>

</html>