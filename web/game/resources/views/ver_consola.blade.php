<!--cosa de controlador: 
class ConsolasController extends ConsolasController
{
    public fuction getMarcas{
        $marcas=array();//$marcas=["Sony","Microsoft","Nintendo","Sega"]
        $marcas[]="Sony";
        $marcas[]="Microsoft";
        $marcas[]="Nintendo";
        $marcas[]="Sega";
        return marcas;
    }
}*/-->
@extends('layouts.master')
@section("contenido")
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-info">
                    <tr>
                        <td>Nombre</td>
                        <td>Marca</td>
                        <td>Año de lanzamiento</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody id="tbody-consola">

                </tbody>
            </table>
        </div>
    </div>
@endsection
@section("javascript")
    <script scr="{{asset("js/servicios/consolasService.js")}}"></script>
    <script src="{{asset("js/ver_consola.js")}}"></script>
@endsection