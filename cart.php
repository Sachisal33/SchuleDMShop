<?php
session_start();
$status = "";
if (isset($_POST['action']) && $_POST['action'] == "remove") {
    if (!empty($_SESSION["shopping_cart"])) {
        foreach ($_SESSION["shopping_cart"] as $key => $value) {
            if ($_POST["code"] == $key) {
                unset($_SESSION["shopping_cart"][$key]);
                $status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
            }
            if (empty($_SESSION["shopping_cart"]))
                unset($_SESSION["shopping_cart"]);
        }
    }
}

if (isset($_POST['action']) && $_POST['action'] == "change") {
    foreach ($_SESSION["shopping_cart"] as &$value) {
        if ($value['code'] === $_POST["code"]) {
            $value['quantity'] = $_POST["quantity"];
            break; 
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="stylesheet.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dm-drogerie markt</title>

    <script>
    </script>
</head>

<body>
    <!--Navigation-->
    <div class="searchInput">
        <div style="position: absolute;">
            <a href="index.php">
                <svg viewBox="0 0 20 13.54" width="70" height="100%" role="img" data-designsystem="true">
                    <path fill="#FFFFFF" d="M19.88,7.95l-0.99,0.17c-0.1-0.22-0.51-0.87-0.51-0.87s-0.82,0.13-0.95,0.15l0.43-2.62 c0.28-1.36-0.16-2.59-1.68-2.59c-0.59,0-1.07,0.28-1.35,0.45c-0.22-0.26-0.63-0.45-1.05-0.45c-0.27,0-0.89,0.05-1.46,0.47l0.07-0.39 c-0.33-0.03-1.61,0-1.95,0.03l0.43-2.25C10.26,0,8.68-0.08,6.96,0.17L6.52,2.34c-1.7,0.48-2.78,2.05-2.78,4.2 c0,0.42,0.06,0.79,0.16,1.1C2.94,7.76,1.2,8.07,0.03,8.71c0.26,0.25,0.66,0.62,0.94,0.96L0,10.02c0.89,1.04,1.58,2,2.17,3.52 c1.26-0.66,3.01-1.64,6.18-1.64c1.49,0,5.88,1.13,8.93,1.13c0.96,0,1.72-0.09,2.47-0.47C19.91,11.58,20.14,9.57,19.88,7.95"></path>
                    <path fill="#E30613" d="M18.5,9.73c-0.78,0.53-2.33,1.2-4.74,0.6c-0.23-0.06-0.45-0.12-0.66-0.18c-1.52-0.66-3.06-1.36-3.68-1.83 c1.74,0.27,4.34,0.54,8.54-0.14C17.96,8.18,18.36,8.81,18.5,9.73 M2.19,10.16l-0.73,0.26c0,0,0.84,1,0.98,1.32l0.21,0.57 c0,0,2.65-1.46,6.5-1.24c0.87,0.05,1.64,0.3,1.64,0.3s-1.57-1.02-1.88-1.12C7.4,9.88,5.96,9.76,5.11,9.73 c-1.46,0.39-2.71,1.05-2.71,1.05S2.29,10.47,2.19,10.16"></path>
                    <path fill="#FEC700" d="M19.09,9.24c0,0-0.19,0.23-0.59,0.49c-0.78,0.53-2.33,1.2-4.74,0.6c-0.23-0.06-0.45-0.12-0.66-0.18 c-2.2-0.64-3.5-1.47-6.43-1.83C4.68,8.37,2.66,8.6,1.55,9.04c0,0,0.3,0.31,0.39,0.44c0.05,0.1,0.15,0.39,0.25,0.69 c0.11,0.32,0.21,0.62,0.21,0.62s1.25-0.66,2.71-1.05C5.8,9.55,6.53,9.44,7.2,9.48c2.24,0.14,4.05,1.3,6.06,2.24 c1.39,0.39,4.79,0.69,5.75,0.26C19,11.96,19.19,11.03,19.09,9.24"></path>
                    <path fill="#1F3685" d="M7.42,4.14c-0.91,0-1.43,1.27-1.43,2.17c0,0.37,0.09,0.53,0.28,0.53c0.51,0,1.38-1.48,1.56-2.4L7.88,4.2 C7.75,4.17,7.61,4.14,7.42,4.14 M8.5,7.96H7.17c0.06-0.35,0.17-0.73,0.36-1.25H7.51C7.09,7.41,6.5,8.08,5.75,8.08 c-0.77,0-1.16-0.5-1.16-1.54c0-1.83,0.95-3.5,3.07-3.5c0.12,0,0.24,0.01,0.42,0.04L8.3,1.97V1.96c-0.21-0.04-0.53-0.08-0.82-0.1 l0.19-0.91c0.67-0.07,1.36-0.12,2.17-0.09L8.5,7.96z M16.47,7.96h-1.32L15.63,5c0.1-0.48,0.03-0.67-0.19-0.67 c-0.45,0-1.25,1.18-1.44,2.34l-0.21,1.29h-1.32L12.96,5c0.1-0.48,0.03-0.67-0.19-0.67c-0.45,0-1.23,1.17-1.45,2.31l-0.25,1.32H9.75 l0.71-3.72V4.21c-0.21-0.04-0.53-0.08-0.82-0.1L9.83,3.2c0.7-0.08,1.36-0.12,2.09-0.09c-0.08,0.38-0.21,0.82-0.37,1.25h0.02 c0.44-0.75,0.91-1.32,1.76-1.32c0.57,0,0.95,0.3,0.95,0.96c0,0.12-0.03,0.24-0.08,0.44l0.01,0.01c0.44-0.8,0.99-1.4,1.84-1.4 c0.94,0,1.14,0.68,0.96,1.59L16.47,7.96z"></path>
                </svg>
            </a>
        </div>


        <?php
        if (!empty($_SESSION["shopping_cart"])) {
            $cart_count = count(array_keys($_SESSION["shopping_cart"]));
        ?>

        <?php
        }
        ?>

        <div class="cart">
            <?php
            if (isset($_SESSION["shopping_cart"])) {
                $total_price = 0;
            ?>

                <div style="margin-top:100px; left: 50%; transform: translateX(-50%); position: relative;">

                <h1 style="font-family: cursive; color: white;">Warenkorb</h1>
                    <hr style="margin-bottom: 20px;">
                    <div>
                        <?php
                        foreach ($_SESSION["shopping_cart"] as $product) {
                        ?>
                            <div class="cart-container">
                                <img class="cart-image" src="<?php echo $product["image"]; ?>">
                                <div style="margin: 20px;position: absolute; padding: 0px 200px 0px 140px;">
                                    <b><?php echo $product["name"]; ?></b></br>
                                    <?php echo $product["description"]; ?></br>
                                    <div style="display: flex; margin-top: 75px">
                                    <div style="margin-right: 20px; ">Anzahl</div>
                                        <form method='post' action='' style='margin-top: -2px;'>
                                            <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                                            <input type='hidden' name='action' value="change" />
                                            <select name='quantity' class='quantity' onchange="this.form.submit()">
                                                <option <?php if ($product["quantity"] == 1) echo "selected"; ?> value="1">1</option>
                                                <option <?php if ($product["quantity"] == 2) echo "selected"; ?> value="2">2</option>
                                                <option <?php if ($product["quantity"] == 3) echo "selected"; ?> value="3">3</option>
                                                <option <?php if ($product["quantity"] == 4) echo "selected"; ?> value="4">4</option>
                                                <option <?php if ($product["quantity"] == 5) echo "selected"; ?> value="5">5</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <div style="right: 40px; margin-top: 20px; position: absolute; text-align: right;">
                                    <form method='post' action=''>
                                        <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                                        <input type='hidden' name='action' value="remove" />
                                        <button type='submit' class='remove button' style="left: 15% !important;"><svg data-dmid="delete" viewBox="0 0 24 24" width="24" height="24" role="img"><path fill="currentColor" d="M 10 2 L 9 3 L 4 3 L 4 5 L 7 5 L 17 5 L 20 5 L 20 3 L 15 3 L 14 2 L 10 2 z M 5 7 L 5 22 L 19 22 L 19 7 L 5 7 z"></path></svg></button>
                                    </form>
                                    <div style="margin-top:63px">ausgerechneter Preis: <?php echo "$" . $product["price"] * $product["quantity"]; ?></div>
                                </div>
                            </div>
                        <?php
                            $total_price += ($product["price"] * $product["quantity"]);
                        }
                        ?>
                    <?php
                } else {
                    echo "<h3>Your cart is empty!</h3>";
                }
                    ?>
                    </div>

                    <div style="clear:both;"></div>

                    <div class="message_box" style="margin:10px 0px;">
                        <?php echo $status; ?>
                    </div>

                </div>
                <hr style="margin: 20px 0px;">
                    <div style="display: flex">
                    <h2 style="color: white; width: 90%;">Summe: <?php if(isset($total_price)){echo "$" . $total_price;}else{echo "$" . 0; }  ?></h2>
                        <button onclick="window.location.href='adressForm.php';" class="normalButton">zur Kasse</button></a>
                    </div>
        </div>
</body>

</html>