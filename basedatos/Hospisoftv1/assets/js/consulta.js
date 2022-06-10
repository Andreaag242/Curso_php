let btnEnviar = document.getElementById("btnEnviar");

btnEnviar.addEventListener("click", (e)=>{
    e.preventDefault();
    let datos = new FormData(document.getElementById("frmCliente"));

    fetch("", {
        method: "post",
        body: datos,
    })
    .then((response) => response.json)
    .then((data) => {
        console.log("Exito: ", data);
    })
    .catch((error) =>{
        console.log("Hay un error: ", error);
    });
});