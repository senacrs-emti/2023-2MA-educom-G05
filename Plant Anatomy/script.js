let contadorDia = 0;
let nivelPoluicao = 0;
let atrasoTotal = 0;

function passarDia() {
    if (contadorDia < 20) {
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

function produtosPoluicao(id_produto) {
    if (id_produto == "regador") {
        if (nivelPoluicao > 0) {
            document.getElementById("regador").style.transformOrigin = "0 0";
            nivelPoluicao -= 5;
            document.getElementById("poluicaoPorcentagem").innerHTML = nivelPoluicao;
        }
    } else if (id_produto == "detergente") {
        if (nivelPoluicao < 100) {
            nivelPoluicao += 2;
            document.getElementById("poluicaoPorcentagem").innerHTML = nivelPoluicao;
        }
    } else if (id_produto == "oleo"){
        if (nivelPoluicao < 100) {
            nivelPoluicao += 5;
            document.getElementById("poluicaoPorcentagem").innerHTML = nivelPoluicao;
        }
    }
    calcularPoluicao();
}

function calcularPoluicao() {
    return atrasoTotal = ((41 / 100) * nivelPoluicao)/100;
}

function mudarEstagio() {
    if (contadorDia >= 13 + (13 * atrasoTotal)) {
        document.getElementById("plantas").src = "./img/Pumpkin_Stage_6.png";
        document.getElementById("plantas").style.width = "8em"
        document.getElementById("plantas").style.height = "8em" 
        document.getElementById("estagioN").innerHTML = 6;
    } else if (contadorDia >= 11 + (11 * atrasoTotal)) {
        document.getElementById("plantas").src = "./img/Pumpkin_Stage_5.png";
        document.getElementById("plantas").style.width = "7em"
        document.getElementById("plantas").style.height = "7em" 
        document.getElementById("estagioN").innerHTML = 5;
    } else if (contadorDia >= 7 + (7 * atrasoTotal)) {
        document.getElementById("plantas").src = "./img/Pumpkin_Stage_4.png";
        document.getElementById("plantas").style.width = "7em"
        document.getElementById("plantas").style.height = "7em" 
        document.getElementById("estagioN").innerHTML = 4;
    } else if (contadorDia >= 4 + (4 * atrasoTotal)) {
        document.getElementById("plantas").src = "./img/Pumpkin_Stage_3.png";
        document.getElementById("plantas").style.width = "6em"
        document.getElementById("plantas").style.height = "6em"
        document.getElementById("estagioN").innerHTML = 3; 
    } else if (contadorDia >= 2 + (2 * atrasoTotal)) {
        document.getElementById("plantas").src = "./img/Pumpkin_Stage_2.png";
        document.getElementById("plantas").style.width = "6em"
        document.getElementById("plantas").style.height = "6em" 
        document.getElementById("estagioN").innerHTML = 2;
    } else if (contadorDia >= 0) {
        document.getElementById("plantas").src = "./img/Pumpkin_Stage_1.png";
        document.getElementById("plantas").style.width = "5em"
        document.getElementById("plantas").style.height = "5em" 
        document.getElementById("estagioN").innerHTML = 1;
    }
}