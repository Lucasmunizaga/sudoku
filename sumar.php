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
        <h1>Sumar</h1>
        <table>
            <tr>
                <td class="contiene">26</td>
                <td class="contiene">+</td>
                <td class="no_contiene" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></td> 
                <td class="contiene">=</td>
                <td class="contiene">42</td>
            </tr>
            <tr>
                <td class="contiene">+</td>
                <td></td>
                <td class="contiene">+</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="no_contiene" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td class="contiene">+</td>
                <td class="no_contiene" id="2" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td class="contiene">=</td>
                <td class="contiene">10</td>
            </tr>
            <tr>
                <td class="contiene">=</td>
                <td></td>
                <td class="contiene">=</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="contiene">35</td>
                <td class="contiene">+</td>
                <td class="no_contiene" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td class="contiene">=</td>
                <td class="no_contiene" id="4" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            </tr>
        </table>
        <br>
        <div class="contenedor_alternativa">
            <div class="caja" draggable="true" ondragstart="drag(event)" id="b">52</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="c">1</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="d">17</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="f">16</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="g">9</div>
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
    <script src="sumar.js"></script>
</body>