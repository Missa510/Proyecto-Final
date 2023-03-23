function ViewPassword(){
    var tipo = document.getElementById("Password");
    if(tipo.type == "password"){
        tipo.type = "text";
    }else{
        tipo.type = "password";
    }
}