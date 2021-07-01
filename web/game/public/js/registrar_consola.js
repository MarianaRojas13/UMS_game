const cargarMarcas = async()=>{
    //ir a buscar las marcas a la api
    let resultado= await axios.get("api/marcas/get");
    console.log(resultado.data);
    //cargar las marcas dentro del select
    let marcasSelect= document.querySelector("#marca-select");
    let marcas=resultado.data;
    marcas.forEach(m=>{
        let option=document.createElement("option");
        option.innerText=m;
        marcasSelect.appendChild(option);
    });//por cada uno de  las marcas 
}
cargarMarcas();
document.querySelector("#registrar-btn").addEventListener("click",async ()=>{
    let nombre=document.querySelector("#Nombre-txt").value;
    let marca=document.querySelector("#marca-select").value;
    let anio=document.querySelector("#anio-txt").value;
    let consola={};
    consola.nombre=nombre;
    consola.marca=marca;
    consola.anio=anio;
    //falta validar
    let res=await crearConsola(consola);
    await Swal.fire("Consola Creada","Consola creada exitosamente","info");
    window.location.href="ver_consola";//localiza las ventanas
});