<?php
phpinfo();
include("con_db.php");
var_dump($_SERVER['REQUEST_METHOD']);
var_dump($_POST);
die;
/*
if (isset($_POST['summaryButton'])){

    if (strlen($_POST['firstName']) >= 1 &&
    strlen($_POST['lastName']) >= 1 &&
    strlen($_POST['email']) >= 1 &&
    strlen($_POST['quantity']) >= 1 &&
    strlen($_POST['category']) >= 1 &&
    strlen($_POST['discount']) >= 1 &&
    strlen($_POST['totalPrice']) >= 1){
       /* $firstName = trim $_POST['firstName'];
        $lastName = trim $_POST['lastName'];
        $email = trim $_POST['email'];
        $quantity = trim $_POST['quantity'];
        $category = trim $_POST['category'];
        $discount = trim $_POST['discount'];
        $totalPrice = trim $_POST['totalPrice'];
        $consulta = INSERT INTO `registros`(`nombre`, `apellido`, `correo`, `cantidad`, `categoria`, `descuento`, `total`) VALUES ('$firstName','$lastName','$email','$quantity','$category','$discount','$totalPrice');
        $resultado = mysql_query($conex, $consulta);
        if ($resultado){
            ?>
            <h3 class="ok"> Tu consulta ha sido guardada eitosamente!</h3>
            <?php
        } else {
            ?>
            <h3 class="bad"> Upps a ocurrido un error!</h3>
            <?php
        
        }

    }

}



?>