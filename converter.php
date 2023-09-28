<!DOCTYPE html>
<html>

<head>
    <title>Resultado</title>
</head>

<body>
    <h1>Resultado</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperaturaFahrenheit = $_POST["tempFahrenheit"];
        $temperaturaCelsius = ($temperaturaFahrenheit - 32) * 5 / 9;

        echo "<p>Temperatura em Celsius: $temperaturaCelsius °C</p>";

        if ($temperaturaCelsius <= 0) {
            echo "Frio ártico!";
        } elseif ($temperaturaCelsius >= 1 && $temperaturaCelsius <= 12) {
            echo "Muito frio!";
        } elseif ($temperaturaCelsius >= 12 && $temperaturaCelsius <= 23) {
            echo "Clima ameno!";
        } elseif ($temperaturaCelsius >= 23 && $temperaturaCelsius <= 32) {
            echo "Calor!";
        } elseif ($temperaturaCelsius >= 32 && $temperaturaCelsius <= 40) {
            echo "Calor tórrido!";
        } else {
            echo "Sem registro!";
        }
    }
    ?>
</body>

</html>