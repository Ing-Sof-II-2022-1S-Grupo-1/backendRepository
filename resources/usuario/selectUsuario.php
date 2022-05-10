<?php
require_once "/Proyecto IngeSoft II/backendRepository/resources/dbSelect.php";
$query = "SELECT * FROM Usuario";
$result = $conn->query($query);
$numfilas = $result->num_rows;
if ($numfilas > 0) {
    echo "Funciona";
} else {
    echo "Upps";
}
