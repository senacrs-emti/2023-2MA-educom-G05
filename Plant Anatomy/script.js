let contadorDia = 0;

function passarDia() {
    if (contadorDia <= 14) {
        contadorDia++;
        document.getElementById("dia").innerHTML = contadorDia;
        mudarEstagio();
    }
}
function voltarDia() {
    if (contadorDia > 0) {
        contadorDia--;
        document.getElementById("dia").innerHTML = contadorDia;
        mudarEstagio();
    }
}

function mudarEstagio() {
    if (contadorDia >= 13) {
        document.getElementById("plantas").src = "./img/Pumpkin_Stage_6.png";
        document.getElementById("plantas").style.width = "8em"
        document.getElementById("plantas").style.height = "8em" 
    } else if (contadorDia >= 11) {
        document.getElementById("plantas").src = "./img/Pumpkin_Stage_5.png";
        document.getElementById("plantas").style.width = "7em"
        document.getElementById("plantas").style.height = "7em" 
    } else if (contadorDia >= 7) {
        document.getElementById("plantas").src = "./img/Pumpkin_Stage_4.png";
        document.getElementById("plantas").style.width = "7em"
        document.getElementById("plantas").style.height = "7em" 
    } else if (contadorDia >= 4) {
        document.getElementById("plantas").src = "./img/Pumpkin_Stage_3.png";
        document.getElementById("plantas").style.width = "6em"
        document.getElementById("plantas").style.height = "6em" 
    } else if (contadorDia >= 2) {
        document.getElementById("plantas").src = "./img/Pumpkin_Stage_2.png";
        document.getElementById("plantas").style.width = "6em"
        document.getElementById("plantas").style.height = "6em" 
    } else if (contadorDia >= 0) {
        document.getElementById("plantas").src = "./img/Pumpkin_Stage_1.png";
        document.getElementById("plantas").style.width = "5em"
        document.getElementById("plantas").style.height = "5em" 
    }
}