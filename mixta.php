<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sodoku Matematico</title>
    <link rel="stylesheet" href="estilo_sumar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<head>
<header>
    <?php include "header.php";?>
</header>
<body>
    <div class="contenedor">
        <h1>Sodoku Mixto</h1>
        <table>
            <tr>
                <td class="contiene">12</td>
                <td class="contiene">/</td>
                <td class="no_contiene" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td class="contiene">=</td>
                <td class="no_contiene" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td class="contiene">+</td>
                <td class="no_contiene" id="2" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            </tr>
            <tr>
                <td class="contiene">+</td>
                <td></td>
                <td></td>
                <td></td>
                <td class="contiene">-</td>
                <td></td>
                <td class="contiene">=</td>
            </tr>
            <tr>
                <td class="contiene">5</td>
                <td></td>
                <td></td>
                <td></td>
                <td class="no_contiene" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td></td>
                <td class="no_contiene" id="4" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            </tr>
            <tr>
                <td class="contiene">=</td>
                <td></td>
                <td></td>
                <td></td>
                <td class="contiene">=</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="contiene">17</td>
                <td class="contiene">-</td>
                <td class="contiene">15</td>
                <td class="contiene">=</td>
                <td class="no_contiene" id="5" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="contiene">X</td>
                <td></td>
                <td></td>
                <td></td>
                <td class="contiene">/</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="no_contiene" id="6" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td class="contiene">=</td>
                <td class="contiene">136</td>
                <td></td>
                <td class="contiene">2</td>
                <td class="contiene">=</td>
                <td class="no_contiene" id="7" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            </tr>
        </table>
        <br>
        <div class="contenedor_alternativa">
            <div class="caja" draggable="true" ondragstart="drag(event)" id="a">1</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="b">2</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="c">8</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="d">6</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="e">8</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="f">4</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="g">14</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="h">2</div>
        </div>
        <br>
        <br>
        <div class="marco">
            <div class="tiempo" id="tiempo">00:00:00.000</div>
            <div class="botones-contenedor">
                <div class="btn"  onclick="iniciar()">
            <i class="fas fa-play"></i>
        </div>
        <div class="btn" onclick="pausar()">
        <i class="fas fa-pause"></i>
        </div>
        <div class="btn" onclick="reiniciar()">
        <i class="fas fa-undo-alt"></i>
        </div>
    </div>
</div>
<br>
    <div class="resultado">
        <h2></h2>
        </div>
    </div>
    <script src="tiempo.js"></script>
    <script src="mixta.js"></script>
</body>