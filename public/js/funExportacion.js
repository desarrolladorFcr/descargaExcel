var funExportacion = {
    inicio: function () {

        $('#btndescargainf').click(funExportacion.convertir);
        $("#btndescargainf").show();
        $("#formDescargas").hide();
    },
    convertir: function () {
        
        $("#btndescargainf").hide();
        $("#formDescargas").show();
        $cantFilas = parseInt($("#cntFila").val());
        $cantColumnas = parseInt($("#cntCol").val());
        $_token = $("[name='_token']").val();
//        $cantFilas = $cantFilas - 1;
        $arrayDataTabla = [];

        for ($i = 0; $i < $cantFilas; $i++) {

            $nombreFila = "fil" + $i;
            $arrayDataFila = [];

            for ($j = 0; $j < $cantColumnas; $j++) {

                $arrayDataFila.push($.trim($("td[name=" + $j + $nombreFila + "]").text()));
                
            }

            $arrayDataTabla.push($arrayDataFila);
        }
        
        $("[name='arrayData']").val(JSON.stringify($arrayDataTabla));
    }
}
$(document).ready(funExportacion.inicio);