<?php

// Variables
$name = "Antonio";
$age = 50;
$isOld = $age < 30;

// Constantes : 3 formas
$constant_Logo = 'https://estaticos-cdn.prensaiberica.es/clip/c8717efc-31eb-48fb-b01b-bdd1a43dfde1_alta-libre-aspect-ratio_default_0.jpg';
define('Logo', 'https://estaticos-cdn.prensaiberica.es/clip/c8717efc-31eb-48fb-b01b-bdd1a43dfde1_alta-libre-aspect-ratio_default_0.jpg');
const LOGO = 'https://estaticos-cdn.prensaiberica.es/clip/c8717efc-31eb-48fb-b01b-bdd1a43dfde1_alta-libre-aspect-ratio_default_0.jpg';
?>

<img src="<?= $constant_Logo ?>" alt="Escudo RM" width="200">
<img src="<?= Logo ?>" alt="Escudo RM" width="200">
<img src="<?= LOGO ?>" alt="Escudo RM" width="200">

<?php
echo "Hola " . $name . ", ¿cómo estás? <br>"; // al utilizar el punto (.) se concatena uno detrás de otro
?>

<?= "¿Tienes $age años? <br>";  // esto es otra forma de utilizar php sin el echo
?> 

<?= "Necesito: <br>"
. "DNI <br>"
. "Teléfono <br>"
. "Dirección <br>"
?>

<!-- <?= $outputAge;?> -->

<?php 
// Match
$outputAge = match (true) {
    $age < 2    => "Eres un bebé, $name",
    $age < 10   => "Eres un niñe, $name",
    $age < 18   => "Eres un adolescente, $name",
    $age === 18 => "Eres mayor de edad, $name",
    $age < 40   => "Eres un adulto joven, $name",
    $age >= 40  => "Eres un adulto viejo, $name",
    default     => "Estás a puntito, $name",
};

// Arrays
$bestCars = ["BMW", "Audi", "Mercedes", "Peugeot"];
$bestCars[] = "Nissan"; // Añade el objeto al array $bestCars en la última posición
// Añade el objeto al array $bestCars en la posición 3 --> $bestCars[] = "Nissan";
?>

<?= $outputAge . "<br>" ?>

<h3> <!-- Mostrar array -->
    La mejor marca de coche es <?= $bestCars[0] ?>
</h3>

<!-- Iterar Arrays -->
<ul>
    <?php foreach ($bestCars as $cars) : ?>
        <li><?= $cars ?></li>
    <?php endforeach; ?>
</ul>

<!-- Iterar Arrays con índice -->
<ul>
    <?php foreach ($bestCars as $key => $cars) : ?>
        <li><?= $key . "" . $cars ?></li>
    <?php endforeach; ?>
</ul>

<?php
// Array de objetos
$person = [
    "name" => "Antonio",
    "age" => "32",
    "city" => "Antequera",
    "car" => "BMW",
]
?>


<?php if ($isOld) : ?>
    "Todavía eres joven, ¡enhorabuena!"
<?php else : ?>
    "Eres viejuno de cojones..."
<?php endif; ?>