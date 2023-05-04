<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Item 2</title>
</head>

<style>

    @media (min-width: 768px) {
        .container {
            max-width: 700px;
        }
    }

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

    a {
        text-decoration: none;
        text-transform: uppercase;
        background-color: #658864;
        padding: 15px;
        color: white;
        margin-left: 50px;
    }

    a:hover {
        color: #DDDDDD;
    }

</style>

<body>
    <br>
    <a href="./index.php">Regresa</a>

    <div class="container">
        <form class="formulario" method="POST" action="./validar.php">
            
            <h1 class="text-center">🍕 Datos del Pedido 🍕</h1>
            
            <div class="item">
                <label>Ingrese su nombre</label>
                <input type="text" name="nombre">
            </div>

            <div class="item">
                <label>Ingrese la direccion</label>
                <input type="text" name="direccion">
            </div>
            
            <div class="item">
                <h5> Especialidad </h5>                
            </div>

            <div class="item">
                <label>Jamón y Queso</label>
                <input type="checkbox" name="jamon"> 
                <br>
                <label>Cantidad</label>
                <input type="number" name="num1">           
            </div>

            <div class="item">
                <label>Napolitana</label>
                <input type="checkbox" name="napolitana">
                <br>
                <label>Cantidad</label>
                <input type="number" name="num2"> 
            </div>

            <div class="item">
                <label>Mozzarella</label>
                <input type="checkbox" name="mozzarella">
                <br>
                <label>Cantidad</label>
                <input type="number" name="num3"> 
            </div>

            <div class="container text-center">
                <button class="boton">Confirmar Orden </button>
            </div>

        </form>
    </div>
    
</body>
</html>
