<?php


include("con_db.php");

var_dump($_SERVER['REQUEST_METHOD']);
var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['summaryButton'])) {
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);
    $quantity = trim($_POST['quantity']);
    $category = trim($_POST['category']);
    $discount = trim($_POST['discount']);
    $totalPrice = trim($_POST['totalPrice']);

    if (
        strlen($firstName) >= 1 &&
        strlen($lastName) >= 1 &&
        strlen($email) >= 1 &&
        strlen($quantity) >= 1 &&
        strlen($category) >= 1 &&
        strlen($discount) >= 1 &&
        strlen($totalPrice) >= 1
    ) {
        // Use prepared statements to prevent SQL injection
        $consulta = "INSERT INTO `registros`(`nombre`, `apellido`, `correo`, `cantidad`, `categoria`, `descuento`, `total`) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conex, $consulta);
        mysqli_stmt_bind_param($stmt, 'sssssss', $firstName, $lastName, $email, $quantity, $category, $discount, $totalPrice);
        $resultado = mysqli_stmt_execute($stmt);

        if ($resultado) {
            ?>
            <h3 class="ok">¡Tu consulta ha sido guardada exitosamente!</h3>
            <?php
        } else {
            ?>
            <h3 class="bad">¡Ups, ha ocurrido un error!</h3>
            <?php
        }

        mysqli_stmt_close($stmt);
    }
}
?>