@extends('layouts.app')

@section('titulo', 'usuarios')

@section('contenido')
@include('layouts.btnVolver')
<!--Se inicializa el
contador-->
<?php $cont = 0?>
<table  class="table table-striped" >
    <tr name = 'nomFilas'>
        <th>
            Fecha
        </th>
        <th>
            ID
        </th>
        <th>
            Cliente
        </th>
        <th>
            Email
        </th>
        <th>
            Teléfono
        </th>
        <th>
            dirección
        </th>
        <th>
            Ciudad
        </th>
        <th>
            Estado
        </th>
        <th>
            pedido
        </th>
        <th>
            Total
        </th>
    </tr>
    @foreach($posts as $post)
    <?php
    $fecha = $post->post_date;

    foreach ($post->postmetas as $metaData) {

        if ($metaData->meta_key == '_billing_first_name') {

            $nombre = $metaData->meta_value;
        }
        if ($metaData->meta_key == '_billing_last_name') {

            $apellido = $metaData->meta_value;
        }
        if ($metaData->meta_key == '_billing_email') {

            $email = $metaData->meta_value;
        }
        if ($metaData->meta_key == '_billing_phone') {
            $telefono = $metaData->meta_value;
        }
        if ($metaData->meta_key == '_billing_address_1') {

            $dir = $metaData->meta_value;
        }
        if ($metaData->meta_key == '_billing_city') {

            $ciudad = $metaData->meta_value;
        }
        if ($metaData->meta_key == '_billing_state') {

            $estado = $metaData->meta_value;
        }

        if ($metaData->meta_key == '_customer_user') {

            $idUser = $metaData->meta_value;
        }
        if( $metaData->meta_key=='_order_total'){
            
            $total = $metaData->meta_value;
        }
    }
    
    $articulos = [];
    foreach($post->woo_order_items as $woo_item){
        
        
        if($woo_item->order_item_type == 'line_item'){
            
            array_push($articulos, $woo_item->order_item_name);
        }
        
        $metaArticulos =[];
        foreach ($woo_item->woo_order_metadata as $woo_metadata){
            
            if($woo_metadata->meta_key == '_qty'){
                
                array_push($metaArticulos, $woo_metadata->meta_value);
            }
        }
    }
    ?>
<!--    Se define el nombre de las
    filas y un contador de
    cantidad de filas-->
    <?php $nom = "fil".$cont;
          $filas = 0;
    ?>
    <tr name ="<?php echo $nom;?>" >
        <td name="<?php $filas = $filas+1; echo $fila= 0 .$nom;?>">
            <?php echo $fecha ?>
        </td>
        <td name="<?php $filas = $filas+1; echo $fila= $fila+1 .$nom;?>">
            <?php echo $idUser; ?>
        </td>
        <td name="<?php $filas = $filas+1; echo $fila= $fila+1 .$nom;?>">
            <?php echo $nombre . " " . $apellido ?>
        </td>
        <td name="<?php $filas = $filas+1; echo $fila= $fila+1 .$nom;?>">
            <?php echo $email; ?>
        </td>
        <td name="<?php $filas = $filas+1; echo $fila= $fila+1 .$nom;?>">
            <?php echo $telefono; ?>
        </td>
        <td name="<?php $filas = $filas+1; echo $fila= $fila+1 .$nom;?>">
            <?php echo $dir; ?> 
        </td>
        <td name="<?php $filas = $filas+1; echo $fila= $fila+1 .$nom;?>">
            <?php echo $ciudad; ?>
        </td>
        <td name="<?php $filas = $filas+1; echo $fila= $fila+1 .$nom;?>">
            <?php echo $estado; ?>
        </td>
        <td name="<?php $filas = $filas+1; echo $fila= $fila+1 .$nom;?>">
            @foreach($articulos as $articulo)
                {{$articulo }}  
              @endforeach  
        </td>
        <td name="<?php $filas = $filas++; echo $fila= $fila+1 .$nom;?>">
            <?php echo $total;?>
        </td>
    </tr>
<!--    Se agrega uno 
    al contador-->
    <?php $cont = $cont+1?>
    @endforeach
</table>
<!--Contador de  la cantidad 
de filas-->
<input type="hidden" value="<?php echo $cont;?>" id="cntFila"> 

<!--contador de la cantidad
de columnas-->
<input type="hidden" value="<?php echo $filas;?>" id="cntCol">

{{$posts->links()}}
<br><br>
@include('btnConvertirExcel')

@endsection