
const cargarmedidas = async()=>{

    let medidor = await getmedidor();

    let medidorSelect = document.querySelector("#medidor-select");
    medidor.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        medidorSelect.appendChild(option);
    });
    
};
document.addEventListener("DOMContentLoaded", ()=>{
    cargarmedidas();
});
const cargartipo = async()=>{

    let medida = await getmedida();

    let medidaSelect = document.querySelector("#medida-select");
    medida.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        medidaSelect.appendChild(option);
    });
    
};

document.addEventListener("DOMContentLoaded", ()=>{
    cargartipo();
});

document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let fecha = document.querySelector("#fecha-txt").value.trim();
    let hora = document.querySelector("#hora-txt").value.trim();
    let medidor = document.querySelector("#medidor-select").value.trim();
    let direccion = document.querySelector("#direccion-txt").value.trim();
    let valor = document.querySelector("#precio-txt").value.trim();
    let medida = document.querySelector("#medida-select").value.trim();

    let errores = [];
    if(hora === ""){
        errores.push("Debe ingresar una hora");
    }

    if(isNaN(valor)){
        errores.push("El valor debe ser mayor a 0");
    }else if( +anio < -1){ 
        errores.push("El valor es incorrecto");
    }

    if(errores.length == 0){

        let datos = {};
        datos.fecha = fecha;
        datos.hora = hora;
        datos.medidor = medidor;
        datos.direccion = direccion;
        datos.valor = valor;
        datos.medida = medida;

        let res = await crearDatos(Datos); 
        await Swal.fire("Datos Creados", "Datos guardados exitosamente", "info");

    
        window.location.href = "mediciones_existentes";

    } else {

        Swal.fire({
            title: "Errores de validacion",
            icon: "warning",
            html: errores.join("<br />")
        });
    }
});