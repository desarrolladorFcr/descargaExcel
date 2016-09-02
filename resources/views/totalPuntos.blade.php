@extends('layouts.app')

@section('titulo', 'usuarios')

@section('contenido')
@include('layouts.btnVolver')
<!--Se inicializa el
contador-->
<?php $cont = 0?>
<table class="table table-striped" >
    <tr>
        <th>
            ID usuario
        </th>
        <th>
            Login
        </th>
        <th>
            Nombre
        </th>
        <th>
            Punto por
        </th>
        <th>
            Valor
        </th>
    </tr>
    
    <?php  foreach($puntosusuario as $punto):?>
     <!--    Se define el nombre de las
    filas y un contador de
    cantidad de filas-->
    <?php $nom = "fil".$cont;
          $filas = 0;
    ?>
    <tr name ="<?php echo $nom;?>">
        <td name="<?php $filas = $filas+1; echo $fila= 0 .$nom;?>">
              <?php echo $punto->usuarios->ID;?>
        </td>
        <td name="<?php $filas = $filas+1; echo $fila= $fila+1 .$nom;?>">
              <?php echo $punto->usuarios->user_login;?>
        </td>
        <td name="<?php $filas = $filas+1; echo $fila= $fila+1 .$nom;?>">
            <?php echo $punto->usuarios->user_registered;?>
        </td>
        <td name="<?php $filas = $filas+1; echo $fila= $fila+1 .$nom;?>">
            <?php echo $punto->ref;?>
        </td>
        <td name="<?php $filas = $filas+1; echo $fila= $fila+1 .$nom;?>">
            <?php echo $punto->creds;?>
        </td>
    </tr>
    <!--    Se agrega uno 
    al contador-->
    <?php $cont = $cont+1?>
   <?php endforeach;?>
</table>
<!--Contador de  la cantidad 
de filas-->
<input type="hidden" value="<?php echo $cont;?>" id="cntFila"> 

<!--contador de la cantidad
de columnas-->
<input type="hidden" value="<?php echo $filas;?>" id="cntCol">

{{$puntosusuario->links()}}

<br><br>
@include('btnConvertirExcel')
@endsection