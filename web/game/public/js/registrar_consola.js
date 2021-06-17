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