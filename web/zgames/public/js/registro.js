const cargarDatos = async()=>{
    let Datos = await getDatos();
    let DatosSelect = document.querySelector("#Datos-select");
    Datos.forEach(c=>{
        let option = document.createElement("option");
        option.value = c.id;
        option.innerText = c.nombre;
        DatosSelect.appendChild(option);
    });
};


document.addEventListener("DOMContentLoaded", ()=>{
    cargarConsolas();
});

document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let fecha = document.querySelector("#fecha-txt").value;
    let hora = document.querySelector("#hora-txt").value.trim();
    let medidorID = document.querySelector("#medidor-select").value;
    let direccion = document.querySelector("#direccion-txt").value.trim();
    let valor = +document.querySelector("#valor-txt").value.trim();
    let medidaID = document.querySelector("#medida-select").value;

    let Datos = {};
    datos.fecha = fecha;
    datos.hora = hora;
    datos.medidorID = medidorID;
    datos.direccion = direccion;
    datos.valor = valor;
    datos.medidaID = medidaID;
    await crearJuego(juego);
    Swal.fire("Datos ingresados");

});