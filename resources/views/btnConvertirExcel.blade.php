
Para descargar oprima aquí, aparecerá un botón que al oprimirlo descargará el archivo en formato .xls 
<button id="btndescargainf" class="btn btn-default">
    Iniciar Proceso
</button>
<form action="/descargaExcel" method="post" id="formDescargas">
    {{csrf_field()}}
    <input type="hidden" name="arrayData" >
    <input type="submit" value="Descargar Informe en formato .xls" class="btn btn-danger">
</form>

