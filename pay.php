<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paypal Integration Test</title>
</head>
<body>
<div style="margin: auto; width:600px; padding:20px; background-color:#fff; text-align: center; margin-top: 50px;">
            <img src="assets/images/logo_star.jpg" style="width:300px;">
            <h2>StarsandBloom Paypal Secure Payment Page</h2>
            You are about to pay the sum of <strong>£<?php echo number_format($price); ?> </strong><br><br>
            -- Kindly click on the button below to proceed -- <br><br>
       

    <form class="paypal" action="payments.php" method="post" id="paypal_form">
        <input type="hidden" name="cmd" value="_xclick" />
        <input type="hidden" name="no_note" value="1" />
        <input type="hidden" name="lc" value="UK" />
        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
        <input type="hidden" name="first_name" value="<?php echo $firstname; ?>" />
        <input type="hidden" name="last_name" value="<?php echo $lastname; ?>" />
        <input type="hidden" name="payer_email" value="<?php echo $email; ?>" />
        <input type="hidden" name="item_number" value="<?php echo date('U'); ?>" />
        <input type="hidden" name="price" value="<?php echo $price; ?>" />
        <input type="hidden" name="course" value="<?php echo $courses; ?>" />
        <input type="submit" name="submit" value="Pay Now" style="background-color:#006086; color:#fff; padding:15px;"/>
    </form>
</div>
</body>
</html>