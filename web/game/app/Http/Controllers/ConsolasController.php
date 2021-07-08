<?php

namespace App\Http\Controllers;
use App\Models\Consola;
use Illuminate\Http\Request;

//Aqui va toda la logica vinculada a las consolas
class ConsolasController extends Controller
{
    public function getMarcas(){
        $marcas=array();//$marcas=["Sony","Microsoft","Nintendo","Sega"]
        $marcas[]="Sony";
        $marcas[]="Microsoft";
        $marcas[]="Nintendo";
        $marcas[]="Sega";
        return $marcas;
    }

/* va a ir a buscar odas las consolas que xisten en la bd y las retirna*/
    public function getConsolas(){
    //equivalente a un select * fron consolas
        $consolas=Consola::all();
        return $consolas;
    }
/*Esta funcion va a registrar ina consola de ejemplo */
    public function crearConsolas(Request $request){
//equivalente a un insert into
        $input=$request->all(); 
        $consola=new Consola();
        $consola->nombre=$input["nonbre"];
        $consola->marca=$input["marca"];
        $consola->anio=$input["anio"];
        $consola->save();
        return $consola;
    }
}