<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\usuarios;
use App\Post;
use App\myCRED_log;

class UsuariosCtr extends Controller {

    public function usuariosInicio() {

        $usuarios = usuarios::orderBy('user_registered', 'DESC')->paginate(100);
        return view('inicioUsuarios', ['usuarios' => $usuarios]);
    }

    public function verVentas() {

        $posts = Post::where('post_type', '=', 'shop_order')->orderBy('post_date', 'DESC')->paginate(100);

        return view('totalVentas', ['posts' => $posts]);
    }

    public function descargarExcel() {


        \Maatwebsite\Excel\Facades\Excel::create('prueba', function ($excel) {

            $excel->sheet('Sheetname', function ($sheet) {

                $arrayExcel = $_REQUEST['arrayData'];

                $dataExcel = json_decode($arrayExcel);
                $sheet->fromArray($dataExcel);
            });
        })->export('xls');
    }
    
    public function verPuntos(){
        
        $puntos = myCRED_log::orderBy('user_id', 'DESC')->paginate(100);
        
        return view('totalPuntos', ['puntosusuario' => $puntos]);
    }

}
