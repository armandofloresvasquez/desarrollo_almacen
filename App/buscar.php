<?php 

	require_once "../class/conexion/database.php";
	require_once "../functions/metodosCrud.php";

	
?>


<?php 
            if(isset($_POST['consulta'])){?>

<div class="container">
    <div class="row">
        <table class="table table-striped table-hover table-sm">
            <tr>
                <th>Codigo</th>
                <th>Codigo material</th>
                <th>Nombre material</th>
                <th>Cantidad</th>
                <th>area</th>
                <th>Solicitada por</th>
                <th>Fecha ingreso</th>
                <th>Acciones</th>
            </tr>

            <?php
                
                        $query = "select * from orders orders by date";
                        $obj= new metodos();
                        $q =($_POST['consulta']);
                        //$sql="SELECT * from `orders` where orders_cod LIKE '%".$q."%' ";
                        $sql = "SELECT * FROM orders WHERE orders_cod LIKE '%".$q."%' OR categories LIKE '%".$q."%' OR created_by LIKE '%".$q."%' order BY orders_cod";
                        $datos=$obj->mostrarDatos($sql);

                        foreach ($datos as $key ) {
                    ?>
            <tr>
                <td><a href='vistas/mostrarOrders.php' target='_blank'><?php echo $key['orders_cod']; ?></a></td>
                <td><?php echo $key['id']; ?></td>
                <td><?php echo $key['material_name']; ?></td>
                <td><?php echo $key['cantidad']; ?></td>
                <td><?php echo $key['area']; ?></td>
                <td><?php echo $key['created_by']; ?></td>
                <td><?php echo $key['date']; ?></td>
                <td>
                    <a href="../functions/procesos/editar.php?id=<?php echo $key['id'] ?>">
                        Editar
                    </a>


                    <a href="../functions/procesos/eliminar.php?id=<?php echo $key['id'] ?>">
                        Eliminar
                    </a>
                </td>
            </tr>
            <?php 
                        }
            }
                    ?>
        </table>
    </div>

</div>
