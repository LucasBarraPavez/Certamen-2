const getDatos = async (filtro ="todos")=>{
    let resp;
    if(filtro == "todos"){
        resp = await axios.get("api/Datos/get");
    }else {
        resp = await axios.get(`api/Datos/filtrar?filtro=${filtro}`);
    }
    return resp.data;
};

const crearDatos = async (Datos)=>{ 

    let resp = await axios.post("api/Datos/post", Datos, {
        headers: {
            "Content-Type": "application/json"
        }
    });
    return resp.data;
};

const eliminarDatos = async(id)=>{
    try{
        let resp = await axios.post("api/Datos/delete", {id}, {
            headers:{
                "Content-Type": "application/json"
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
    
}