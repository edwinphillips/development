<?php
include_once("config.php");
?>
<html>
<head>Paypal Express Checkout</head>
<body>

    <form method="post" action="process.php">
        <input type="hidden" name="itemname" value="Product One" />
        <input type="hidden" name="itemnumber" value="1" />
        <input type="hidden" name="itemprice" value="10" />
        <input type="hidden" name="itemQty" value="1" />
        <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" name="submitbutt" value="PayPal Express" />
    </form>

</body>
</html>
