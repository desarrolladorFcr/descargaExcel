@extends('layouts.app')

@section('titulo', 'usuarios')

@section('contenido')
@include('layouts.btnVolver')
<!--Se inicializa el
contador-->
<?php $cont = 0?>
<table class="table table-striped">
    <tr>
        <th>
            ID
        </th>
        <th>
            Usuario
        </th>
        <th>
            Email
        </th>
        <th>
            Nombre registro
        </th>
        <th>
            Fecha creación
        </th>
    </tr>
        @foreach($usuarios as $user)
    <!--    Se define el nombre de las
    filas y un contador de
    cantidad de filas-->
    <?php $nom = "fil".$cont;
          $filas = 0;
    ?> 
    <tr name ="<?php echo $nom;?>">
        <td name="<?php $filas = $filas+1; echo $fila= 0 .$nom;?>">
            {{$user->ID}}
        </td>
        <td name="<?php $filas = $filas+1; echo $fila= $fila+1 .$nom;?>">
            {{$user->user_login}}
        </td>
        <td name="<?php $filas = $filas+1; echo $fila= $fila+1 .$nom;?>">
            {{$user->user_email}}
        </td>
        <td name="<?php $filas = $filas+1; echo $fila= $fila+1 .$nom;?>">
            {{$user->display_name}}
        </td>
        <td name="<?php $filas = $filas+1; echo $fila= $fila+1 .$nom;?>">
            {{$user->user_registered}}
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

{{$usuarios->links()}}

<form action="/verVentas" method="post">
    {{csrf_field()}}
    <input type="submit" value="Ver ventas">
</form>
<br>
<form action="/verPuntos" method="post">
    {{csrf_field()}}
    <input type="submit" value="Ver puntos">
</form>
<br><br>
@include('btnConvertirExcel')
