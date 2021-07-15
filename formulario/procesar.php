<?php

// isset($_POST["text"]) ? print $_POST["text"] : "";
echo "<h1>Datos enviados desde el formulario</h1>";

if (isset($_POST["text"])) {
    echo "<p>El texto ingresado es : <b>" . $_POST["text"] . "</b></p>";
}
if (isset($_POST["number"])) {
    echo "<p>El número ingresado es : <b>" . $_POST["number"] . "</b></p>";
}
if (isset($_POST["email"])) {
    echo "<p>El email ingresado es : <b>" . $_POST["email"] . "</b></p>";
}
if (isset($_POST["password"])) {
    echo "<p>La contraseña ingresado es : <b>" . $_POST["password"] . "</b></p>";
}
if (isset($_POST["textarea"])) {
    echo "<p>La textarea ingresada es : <b>" . $_POST["textarea"] . "</b></p>";
}
