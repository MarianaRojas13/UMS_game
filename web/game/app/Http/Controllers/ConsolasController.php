<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consola;
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
public function crearConsola(){
//equivalente a un insert into 
    $consola=new Consola();
    $consola->nombre="Nontendo Switch";
    $consola->marca="Nontendo";
    $consola->anio=2015;
    $consola->save();
}
}