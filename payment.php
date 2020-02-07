<?php
session_start();
setlocale(LC_MONETARY, "es_ES");
var_dump($_SESSION);
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>
    <link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form class="form-horizontal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">
        <input type='hidden' name='business' value='patpatparra@business.example.com'>
        <input type='hidden' name='item_name' value='<?php echo $_SESSION["cartItems"]; ?>'>
        <input type='hidden' name='item_number' value="<?php echo $order_id; ?>">
        <input type='hidden' name='amount' value='<?php echo $_SESSION["payableAmount"]; ?>'>
        <input type='hidden' name='currency_code' value='EUR'>
        <input type='hidden' name='notify_url' value='http://localhost/shopping-cart-with-paypal-integration/notify.php'>
        <input type='hidden' name='return' value='http://localhost/shopping-cart-with-paypal-integration/success.php'>
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="order" value="<?php echo $_SESSION["orderNumber"]; ?>">
        <br>
        <div class="form-group">
            <div class="col-sm-2">
                <input type="submit" class="btn btn-lg btn-block btn-danger" name="continue_payment" value="Pay Now">
            </div>
        </div>
    </form>
</body>
</html>

