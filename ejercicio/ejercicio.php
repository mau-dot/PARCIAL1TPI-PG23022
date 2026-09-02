<?php
//termina esto solo para copiar y pegar sin comentarios


//array multidimencional de espacios
$espacios = [
 "espacio 1"=> ["nombre" => "Espacio 1", "diciplina" => "Futbol", "capacidadmax" => 32, "costo" => 2.5, "estado" => "disponible" ],
 "espacio 2"=> ["nombre" => "Espacio 2", "diciplina" => "basquet", "capacidadmax" => 12, "costo" => 3.5, "estado" => "disponible" ],
 "espacio 3"=> ["nombre" => "Espacio 3", "diciplina" => "criket", "capacidadmax" => 40, "costo" => 10.5, "estado" => "disponible" ],
];

const TARIFA = 0;

//funciones para validad informacion correcta, cantidad de participantes y de horas > 0,
function cantidadParticipantes($cantidad){
    if($cantidad =< 0) return echo "can";
}
function cantidadHoras($cantidad){
    if($cantidad =< 0) return false;
}

//tarifas : estudiantes 20%, docente 10%, visitantes tarifa completa

//recuperar informacion
session_start();
$_SESSION["usuarios"] ??= [];
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
if(isset($_POST["nombre"]) && isset($_POST["correo"]) && isset($_POST["tipousuario"]) && isset($_POST["diciplina"]) && isset($_POST["id-espacio"]) &&  isset($_POST["participantes"]) && isset($_POST["horas"])){
       //guardando en el usuarios
       $_SESSION["usuarios"] []= [


       ];

}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTION</title>
</head>
<body>
    <form action="" method="post">
        <h3>Formulario de Gestion de reservas</h3>
        <input type="text" name="nombre" placeholder="Ingrese su nombre">
        <input type="email" name="correo" placeholder = "Ingrese su correo">
        <input type="text" name="tipousuario" placeholder="ingrese su tipo de usuario">
        <input type="text" name="diciplina" placeholder="Igrese su diciplina deportiva">
        <select name="id-espacio">
            <option value="espacio 1">Espacio 1</option>
            <option value="espacio 2">Espacio 2</option>
            <option value="espacio 3">Espacio 3</option>
        </select>
        <input type="number" name="participantes" placeholder="cantidad de participantes">
        <input type="number" name="horas" placeholder="cantidad de horas">
    </form>

    <div>
        
    </div>
</body>
</html>

