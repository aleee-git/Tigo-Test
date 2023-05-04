<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <title>Item 1</title>
</head>

<style>

    body {
        background-color: #EEEEEE;
    }

    .formulario {
        background-color: #DDDDDD;
        margin-top: 40px;
        padding-top: 30px;
    }

    .item {
        padding-top: 20px;
        padding-left: 40px;
    }

    input {
        border: none;
    }

    .boton {
        padding: 10px;
        margin: 40px;
        background-color: #658864;
        border: none;
        border-radius: 10px;
        color: white;
    }

</style>

<body>

    <div class="container">
        <form class="formulario">
            
            <h1 class="text-center">Formulario de Datos</h1>
            
            <div class="item">
                <label>Ingrese su nombre</label>
                <input type="text" id="nombre">
            </div>

            <div class="item">
                <label>No tiene estudios</label>
                <input type="radio" name="estudios" value="No Tiene Estudios">            
            </div>

            <div class="item">
                <label>Estudios primarios</label>
                <input type="radio" name="estudios" value="Estudios Primarios">
            </div>

            <div class="item">
                <label>Estudios secundarios</label>
                <input type="radio" name="estudios" value="Estudios Secundarios">
            </div>

            <div class="container text-center">
                <button class="boton" onclick="Mensaje()" >Enviar </button>
            </div>

        </form>
    </div>


    <script>

        function Mensaje() {
            let nombre = document.getElementById("nombre").value;
            
            let seleccionado = document.querySelector('input[name="estudios"]:checked');

            if(seleccionado) {            
                alert("Hola " + nombre + " :) tu nivel de estudios es: " + seleccionado.value);
            } else {
                alert(nombre + " no has ingresado un nivel de estudios :(");
            }

        }

    </script>
    
</body>
</html>