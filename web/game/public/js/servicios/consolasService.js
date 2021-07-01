//este archivo va a tener las operaciones tipicas para comunicarce con el controlador
//getConsolas
const getConsolas= async ()=>{
    let resp=await axios.get("api/consolas/get");
    return resp.data;
};
//crear consola
const crearConsola= async (consola)=>{
    //Extructura de peticion post al servidor de axios
    let resp=await axios.post("api/consolas/post",consola,{
        headers:{
            'Content-Type':'application/json'
        }
    });
    return resp.data;
};