let contadorDia = 0;

function passarDia() {
        contadorDia++;
        document.getElementById("dia").innerHTML = contadorDia;
        mudarEstagio();
}
function voltarDia() {
    if (contadorDia > 0) {
        contadorDia--;
        document.getElementById("dia").innerHTML = contadorDia;
        mudarEstagio();
    }
}

function mudarEstagio() {
    if (contadorDia <= 1) {
        document.getElementById("imagem").src = "./img/Pumpkin_Stage_1.png";
        document.getElementById("imagem").style.width = "5em"
        document.getElementById("imagem").style.height = "5em" 
    } else if (contadorDia <= 2) {
        document.getElementById("imagem").src = "./img/Pumpkin_Stage_2.png";
        document.getElementById("imagem").style.width = "6em"
        document.getElementById("imagem").style.height = "6em" 
    }
    else if (contadorDia <= 4) {
        document.getElementById("imagem").src = "./img/Pumpkin_Stage_3.png";
        document.getElementById("imagem").style.width = "6em"
        document.getElementById("imagem").style.height = "6em" 
    }
    else if (contadorDia <= 7) {
        document.getElementById("imagem").src = "./img/Pumpkin_Stage_4.png";
        document.getElementById("imagem").style.width = "7em"
        document.getElementById("imagem").style.height = "7em" 
    }
    else if (contadorDia <= 11) {
        document.getElementById("imagem").src = "./img/Pumpkin_Stage_5.png";
        document.getElementById("imagem").style.width = "7em"
        document.getElementById("imagem").style.height = "7em" 
    }
    else if (contadorDia == 13) {
        document.getElementById("imagem").src = "./img/Pumpkin_Stage_6.png";
        document.getElementById("imagem").style.width = "8em"
        document.getElementById("imagem").style.height = "8em" 
    }
}