let contadorDia = 0;
let nivelPoluicao = 0;
let atrasoTotal = 0;
let usaSuco = 0;

function displayAviso() {
    if (nivelPoluicao == 41 && contadorDia == 32) {
        document.getElementById("aviso").style.display = "block";
    }  
}
function passarDia(name_button) {
    if (contadorDia < 32) {
        if (name_button == "passarTodos"){
            contadorDia = document.getElementById("est6").innerHTML;
            document.getElementById("dia").innerHTML = contadorDia;
            mudarEstagio();
        } else{
            contadorDia++;
            document.getElementById("dia").innerHTML = contadorDia;
            mudarEstagio();
        }   
    }
    displayAviso();
}
function voltarDia(name_button) {
    if (contadorDia > 0) {
        if (name_button == "voltarTodos") {
            contadorDia = 0;
            document.getElementById("dia").innerHTML = contadorDia;
            mudarEstagio();
        } else {
            contadorDia--;
            document.getElementById("dia").innerHTML = contadorDia;
            mudarEstagio();   
        }
    }
    displayAviso();
}

function produtosAnimation(id_produto) {
    if (id_produto == "regador"){
        document.getElementById("regador").style.animation = "2s regagemAgua";
    } else if (id_produto == "detergente"){
        document.getElementById("detergente").style.animation = "2s regagemDetergente";
    } else if (id_produto == "oleo"){
        document.getElementById("oleo").style.animation = "2s regagemOleo";
    }
    setTimeout(() => {document.getElementById(id_produto).style.removeProperty('animation');}, 2000);
}

function produtosPoluicao(id_produto) {
    legendaEstagios();
    produtosAnimation(id_produto);
    if (id_produto == "regador") {
        if (nivelPoluicao > 0) {
            if (nivelPoluicao - 5 < 0){
                nivelPoluicao = 0;
            } else{nivelPoluicao -= 5}
            document.getElementById("poluicaoPorcentagem").innerHTML = nivelPoluicao;
        }
    } else if (id_produto == "detergente") {
        if (nivelPoluicao < 100) {
            if (nivelPoluicao + 2 > 100){
                nivelPoluicao = 100;
            } else{nivelPoluicao += 2}
            document.getElementById("poluicaoPorcentagem").innerHTML = nivelPoluicao;
        }
    } else if (id_produto == "oleo"){
        if (nivelPoluicao < 100) {
            if (nivelPoluicao + 5 > 100){
                nivelPoluicao = 100;
            } else{nivelPoluicao += 5}
            document.getElementById("poluicaoPorcentagem").innerHTML = nivelPoluicao;
        }
    }
    calcularPoluicao();
}

function calcularPoluicao() {
    return atrasoTotal = ((41 / 100) * nivelPoluicao)/100;
}

function puroSuco(){
    document.getElementById("poluicaoPorcentagem").innerHTML = "MAROMBAAAAAAAA";
    document.getElementById("produtos").style.display = "none";
    document.getElementById("protein").style.animation = "2s regagemSuco";
    nivelPoluicao = 0;
    usaSuco = 1;
    contadorDia = 0;
    legendaEstagios();
}

function mudarEstagio() {
    if (usaSuco == 1 && contadorDia >= 20){
        document.getElementById("plantas").src = "./img/Giant_Pumpkin.png";
        document.getElementById("plantas").style.width = "12em"
        document.getElementById("plantas").style.height = "12em" 
        document.getElementById("estagioN").innerHTML = "FAKE NATTY!";
    } else if (contadorDia == 32){
        document.getElementById("plantas").src = "./img/Pumpkin_Rotten.png";
        document.getElementById("plantas").style.width = "10em"
        document.getElementById("plantas").style.height = "8em" 
        document.getElementById("estagioN").innerHTML = "PODRE";
    } else if (contadorDia >= 13 + (13 * atrasoTotal)) {
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

function legendaEstagios(){
    if (usaSuco == 1){
        $('#legenda').append('<p id="est7">Estágio 7: dia 20</p>');
    } else{
        document.getElementById("est1").innerHTML = 0;
        document.getElementById("est2").innerHTML = Math.round(2 + (2 * atrasoTotal));
        document.getElementById("est3").innerHTML = Math.round(4 + (4 * atrasoTotal));
        document.getElementById("est4").innerHTML = Math.round(7 + (7 * atrasoTotal));
        document.getElementById("est5").innerHTML = Math.round(11 + (11 * atrasoTotal));
        document.getElementById("est6").innerHTML = Math.round(13 + (13 * atrasoTotal));
    }
}