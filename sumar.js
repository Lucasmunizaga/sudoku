let arreglo = ["", "", "", "", ""];

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    if (arreglo[parseInt(ev.target.id)] === "") {
        var data = ev.dataTransfer.getData("text");
        arreglo[parseInt(ev.target.id)] = data;
        ev.target.appendChild(document.getElementById(data));
    }
    if (arreglo[0] != "" && arreglo[1] != "" && arreglo[2] != "" && arreglo[3] != "" && arreglo[4] != "") {
        if (arreglo[0] == "g" && arreglo[1] == "f" && arreglo[2] == "c" && arreglo[3] == "d" && arreglo[4] == "b") {
            document.querySelector("h2").innerHTML = "¡Excelente!";
        } else {
            document.querySelector("h2").innerHTML = "¡Qué mal, inténtalo de nuevo!";
        }
    }
}