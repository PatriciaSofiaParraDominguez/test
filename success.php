<?php
session_start();
include("config.inc.php");

$insertPayment = "INSERT INTO shop_payment(order_id, payment_status, payment_response)VALUES('".$order_id."','".$payment_status."','".$payment_response."')";
$updateOrder = "UPDATE shop_order set order_status = 'PAID' WHERE id = ".$_SESSION["order"];
mysqli_query($msqli_conn, $updateOrder) or die("database error:". mysqli_error($mysqli_conn));
?>