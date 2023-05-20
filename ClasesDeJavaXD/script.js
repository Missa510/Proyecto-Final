let ALL_validar = document.querySelectorAll(".formulario-validar")
let aviso = document.querySelector("#aviso")

if(ALL_validar){
    ALL_validar.forEach(validar => { //Dividir los formularios
        validar.addEventListener("submit", (e) => {
          
            e.preventDefault();
            aviso.innerHTML = `
                <div id = "Check">
                    <button data-type="check">Checkeo</button>
                    <button data-type="no-check">No Checkeo</button>
                </div>`

            let check = document.querySelector("#check")

            check.addEventListener("click", () => {
                if(!validar.checkValidity()){
                    e.preventDefault();
                } else {
                    validar.submit();
                }

            })
        })
    })
}