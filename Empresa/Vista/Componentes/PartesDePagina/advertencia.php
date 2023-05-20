<script>

    let con = window.confirm("¿Estás seguro de que quieres eliminar el USUARIO " + <?= $ID; ?> + "?")

    if (con == true) {

        if(localStorage.getItem("con")){
            localStorage.setItem("con", true)
        } else {
            localStorage.setItem("con", true)
        }

        <?php
            // $verificacion = 1; 
        ?>
        console.log("OK") 
    }
    else {

        if(localStorage.getItem("con")){
            localStorage.setItem("con", false)
        } else {
            localStorage.setItem("con", false)
        }

        <?php
            // $verificacion = 0;
        ?>
        console.log("Ah bueno")
    }

</script>