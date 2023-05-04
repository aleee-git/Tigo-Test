<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Validar</title>

    <?php 

    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $jamon = $_POST['jamon'];
    $num1 = $_POST['num1'];
    $napolitana = $_POST['napolitana'];
    $num2 = $_POST['num2'];
    $mozzarella = $_POST['mozarella'];
    $num3 = $_POST['num3'];

    $contenido = "
    ........................................................
    DATOS DEL PEDIDO
    Nombre del Cliente: $nombre
    Dirección: $direccion
    Especialidad:
    Cantidad: $num1
    Cantidad: $num2
    Cantidad: $num3

    if($jamon){
        Pizza de Jamon y Queso
        Cantidad: $num1
    }

    if($napolitana){
        Pizza Napolitana
        Cantidad: $num2
    }

    if($mozzarella){
        Pizza de Mozzarella
        Cantidad: $num3
    }

    ";

    $pedido = fopen("archivos/$datos.txt", "w");
    fwrite($pedido, $contenido);

    ?>

</head>

<style>

    @media (min-width: 768px) {
        .container {
            max-width: 700px;
        }
    }

    .container {
        background-color: #658864;
        color: #EEEEEE;
        margin-top: 60px;
        padding: 30px;
        border-radius: 20px;
    }

    body {
        background-color: #EEEEEE;
    }

</style>

<body>
    <div class="container text-center">
        <h1>Pedido Enviado!</h1>
    </div>
</body>
</html>