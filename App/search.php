<?php
$mysqli = new mysqli( "localhost", "root", "", "al-feb-15" );

$salida = "";
$query = "SELECT * FROM orders ORDER BY orders_cod";

if ( isset( $_POST['consulta'] ) ) {
    $q = ( $_POST['consulta'] );
    $query = "SELECT orders_cod,categories,cantidad, material_name FROM orders WHERE orders_cod LIKE '%".$q."%' OR categories LIKE '%".$q."%' order BY orders_cod";
}
?>
<table class="table table-striped">
    <th>Codigo</th>
    <th>Nombre</th>
    <th>Cantidad</th>
    <th>Categoria</th>
    <?php
$resultado = $mysqli->query( $query );
//var_dump( $resultado );
if ( $resultado->num_rows > 0 ) {
    
    

    while( $fila = $resultado->fetch_assoc() ) {
        ?>


    <tr>
        <td><?php echo $fila['orders_cod'] ?></td>
        <td><?php echo $fila['material_name'] ?></td>
        <td><?php echo $fila['cantidad'] ?></td>
        <td><?php echo $fila['categories'] ?></td>
    </tr>
</table>

<?php
    }

} else {

}
?>
