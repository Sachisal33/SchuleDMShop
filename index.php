<?php
session_start();

include('dbcontext.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$category = $row['category'];
$description = $row['description'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
    'category'=>$category,
    'description'=>$description,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>
<!DOCTYPE html>
<html lang="de">

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
    <div class="mainContainer">
      <div style="position: absolute; left:20px">
            <a href="index.php">
                <svg viewBox="0 0 20 13.54" width="70" height="100%" role="img" data-designsystem="true">
                <path fill="#FFFFFF" d="M19.88,7.95l-0.99,0.17c-0.1-0.22-0.51-0.87-0.51-0.87s-0.82,0.13-0.95,0.15l0.43-2.62 c0.28-1.36-0.16-2.59-1.68-2.59c-0.59,0-1.07,0.28-1.35,0.45c-0.22-0.26-0.63-0.45-1.05-0.45c-0.27,0-0.89,0.05-1.46,0.47l0.07-0.39 c-0.33-0.03-1.61,0-1.95,0.03l0.43-2.25C10.26,0,8.68-0.08,6.96,0.17L6.52,2.34c-1.7,0.48-2.78,2.05-2.78,4.2 c0,0.42,0.06,0.79,0.16,1.1C2.94,7.76,1.2,8.07,0.03,8.71c0.26,0.25,0.66,0.62,0.94,0.96L0,10.02c0.89,1.04,1.58,2,2.17,3.52 c1.26-0.66,3.01-1.64,6.18-1.64c1.49,0,5.88,1.13,8.93,1.13c0.96,0,1.72-0.09,2.47-0.47C19.91,11.58,20.14,9.57,19.88,7.95"></path>
                <path fill="#E30613" d="M18.5,9.73c-0.78,0.53-2.33,1.2-4.74,0.6c-0.23-0.06-0.45-0.12-0.66-0.18c-1.52-0.66-3.06-1.36-3.68-1.83 c1.74,0.27,4.34,0.54,8.54-0.14C17.96,8.18,18.36,8.81,18.5,9.73 M2.19,10.16l-0.73,0.26c0,0,0.84,1,0.98,1.32l0.21,0.57 c0,0,2.65-1.46,6.5-1.24c0.87,0.05,1.64,0.3,1.64,0.3s-1.57-1.02-1.88-1.12C7.4,9.88,5.96,9.76,5.11,9.73 c-1.46,0.39-2.71,1.05-2.71,1.05S2.29,10.47,2.19,10.16"></path>
                <path fill="#FEC700" d="M19.09,9.24c0,0-0.19,0.23-0.59,0.49c-0.78,0.53-2.33,1.2-4.74,0.6c-0.23-0.06-0.45-0.12-0.66-0.18 c-2.2-0.64-3.5-1.47-6.43-1.83C4.68,8.37,2.66,8.6,1.55,9.04c0,0,0.3,0.31,0.39,0.44c0.05,0.1,0.15,0.39,0.25,0.69 c0.11,0.32,0.21,0.62,0.21,0.62s1.25-0.66,2.71-1.05C5.8,9.55,6.53,9.44,7.2,9.48c2.24,0.14,4.05,1.3,6.06,2.24 c1.39,0.39,4.79,0.69,5.75,0.26C19,11.96,19.19,11.03,19.09,9.24"></path>
                <path fill="#1F3685" d="M7.42,4.14c-0.91,0-1.43,1.27-1.43,2.17c0,0.37,0.09,0.53,0.28,0.53c0.51,0,1.38-1.48,1.56-2.4L7.88,4.2 C7.75,4.17,7.61,4.14,7.42,4.14 M8.5,7.96H7.17c0.06-0.35,0.17-0.73,0.36-1.25H7.51C7.09,7.41,6.5,8.08,5.75,8.08 c-0.77,0-1.16-0.5-1.16-1.54c0-1.83,0.95-3.5,3.07-3.5c0.12,0,0.24,0.01,0.42,0.04L8.3,1.97V1.96c-0.21-0.04-0.53-0.08-0.82-0.1 l0.19-0.91c0.67-0.07,1.36-0.12,2.17-0.09L8.5,7.96z M16.47,7.96h-1.32L15.63,5c0.1-0.48,0.03-0.67-0.19-0.67 c-0.45,0-1.25,1.18-1.44,2.34l-0.21,1.29h-1.32L12.96,5c0.1-0.48,0.03-0.67-0.19-0.67c-0.45,0-1.23,1.17-1.45,2.31l-0.25,1.32H9.75 l0.71-3.72V4.21c-0.21-0.04-0.53-0.08-0.82-0.1L9.83,3.2c0.7-0.08,1.36-0.12,2.09-0.09c-0.08,0.38-0.21,0.82-0.37,1.25h0.02 c0.44-0.75,0.91-1.32,1.76-1.32c0.57,0,0.95,0.3,0.95,0.96c0,0.12-0.03,0.24-0.08,0.44l0.01,0.01c0.44-0.8,0.99-1.4,1.84-1.4 c0.94,0,1.14,0.68,0.96,1.59L16.47,7.96z"></path>
            </svg>
        </a>
        </div>
        <div style="display:flex; position: absolute; left: 50%; transform: translateX(-50%);">
            <form name="searchbar" style="margin-top: -26px;" method="post">                
                <input id="search-field" name="search-field" onblur="search(this.value);" placeholder="Suchen und finden" type="search" value="" style="line-height: 44px; border: 2px solid transparent; border-radius: 30px; background-color: rgb(229, 233, 241); appearance: none; height: 44px; padding-left: 1.25rem; font-size: 1rem; outline: none; color: rgb(0, 40, 120); appearance: none; font-weight: 400; font-family: dmbrand, Arial, Helvetica, sans-serif; box-sizing: border-box; width: 23vw;">
                <button type="submit" value="submitsearch" class="button" style="top: 16px;left: 8%;"><svg viewBox="0 0 24 24" width="24" height="24" role="img" data-designsystem="true" style="margin:9px;">
                    <path fill="currentColor" d="M18.5097399,15.9620127 L21.4723484,18.9246212 C22.1758839,19.6281566 22.1758839,20.768813 21.4723484,21.4723484 C20.768813,22.1758839 19.6281566,22.1758839 18.9246212,21.4723484 L15.9620127,18.5097399 C14.5394918,19.4515532 12.8337942,20 11,20 C6.02943725,20 2,15.9705627 2,11 C2,6.02943725 6.02943725,2 11,2 C15.9705627,2 20,6.02943725 20,11 C20,12.8337942 19.4515532,14.5394918 18.5097399,15.9620127 Z M11,16.4 C13.9823376,16.4 16.4,13.9823376 16.4,11 C16.4,8.01766235 13.9823376,5.6 11,5.6 C8.01766235,5.6 5.6,8.01766235 5.6,11 C5.6,13.9823376 8.01766235,16.4 11,16.4 Z"></path>
                </svg></button>
            </form>
                
        </div>
                    <a href="cart.php" style="position: absolute; right: 20px;">
                        <svg viewBox="0 0 24 24" width="24" height="24" role="img" data-designsystem="true">
                           <path fill="#FFFFFF" d="M10.1206428,17.0629454 C11.1937188,17.0629454 12.0636187,17.9442851 12.0636187,19.0314727 C12.0636187,20.1186603 11.1937188,21 10.1206428,21 C9.04756688,21 8.17766694,20.1186603 8.17766694,19.0314727 C8.17766694,17.9442851 9.04756688,17.0629454 10.1206428,17.0629454 Z M16.9260404,17.0629454 C17.9991164,17.0629454 18.8690163,17.9442851 18.8690163,19.0314727 C18.8690163,20.1186603 17.9991164,21 16.9260404,21 C15.8529645,21 14.9830646,20.1186603 14.9830646,19.0314727 C14.9830646,17.9442851 15.8529645,17.0629454 16.9260404,17.0629454 Z M4.68250234,4.00019906 C4.81805312,4.00305343 6.04925033,4.04542755 6.45389858,4.64608076 C6.88234968,5.28206651 6.80263785,5.58491686 7.12148517,6.07957245 C7.29885482,6.35289764 7.59594594,6.52220905 7.91860349,6.53384798 L7.91860349,6.53384798 L21.1507675,6.53384798 C21.4308548,6.53384798 21.670625,6.62101216 21.8337144,6.83112471 C21.9968038,7.04123727 22.0435467,7.32082751 21.9578498,7.5736342 L21.9578498,7.5736342 L20.1344417,13.5296912 C19.8182354,14.4890106 18.9672885,15.1644178 17.9722582,15.2458432 L17.9722582,15.2458432 L9.22388473,15.2458432 C8.27336536,15.155352 7.4514576,14.5366515 7.09159324,13.6407363 C7.08162926,13.6003563 7.0118814,13.4691211 7.0118814,13.378266 C6.72292602,12.3990499 5.41764477,7.02850356 5.12868939,6.53384798 C4.96316485,6.23794413 4.64690714,6.06210569 4.31164311,6.07957245 L4.31164311,6.07957245 L3.02628983,6.07957245 C2.45948561,6.07957245 2,5.6140443 2,5.03978622 C2,4.46552815 2.45948561,4 3.02628983,4 L3.02628983,4 Z"></path>
                        </svg>
                    </a>
        <nav>
            <a href="?alle">Alle</a>
            <a href="?ernaehrung">Ern??hrung</a>
            <a href="?gesundheit">Gesundheit</a>
            <a href="?haare">Haare</a>
            <a href="?make-up">Make-Up</a>
            <a href="?maenerpflege">M??nnerpflege</a>
            <a href="?pflege-und-parfum">Pflege & Parfum</a>
            <a href="?tier">Tier</a>
            <div class="animation start-home"></div>
        </nav>
        <div style="margin-top:57px; left: 50%; transform: translateX(-50%); position: relative;">
        <div class="grid-container">
        <?php
            $sql = "SELECT * FROM products"; 
            
            if(!empty($_SESSION["shopping_cart"])) {
            $cart_count = count(array_keys($_SESSION["shopping_cart"]));

            }            

            if(isset($_POST['search-field'])) search($_POST['search-field']);
            else{
                if (isset($_GET['alle'])) loadItems('1');
                if (isset($_GET['ernaehrung'])) loadItems('2');
                if (isset($_GET['gesundheit'])) loadItems('3');
                if (isset($_GET['haare'])) loadItems('4');
                if (isset($_GET['make-up'])) loadItems('5');
                if (isset($_GET['maenerpflege'])) loadItems('6');
                if (isset($_GET['pflege-und-parfum'])) loadItems('7');
                if (isset($_GET['tier'])) loadItems('8');
            }

            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result)){

                echo '<div class="object">';
                echo "<form method='post' action=''>
                <input type='hidden' name='code' value=".$row['code']." />";
                echo '<div class="image-container"> 
                <div class="image" style="background-image: url('. $row["image"].')">';
                echo '</div>';
                echo '</div>';
                echo '<div style="text-align: center"><b>'. substrwords($row["name"],30).
               '</b><br>'. substrwords($row["description"],60). 
                '<br><b>' . $row["price"]. 
                '??? </b>
                </div>';
                echo "<button type='submit' class='buy button'>";
                echo '<svg data-dmid="dm-cart" viewBox="0 0 24 24" width="24" height="24" role="img" ><path fill="currentColor" d="M10.1206428,17.0629454 C11.1937188,17.0629454 12.0636187,17.9442851 12.0636187,19.0314727 C12.0636187,20.1186603 11.1937188,21 10.1206428,21 C9.04756688,21 8.17766694,20.1186603 8.17766694,19.0314727 C8.17766694,17.9442851 9.04756688,17.0629454 10.1206428,17.0629454 Z M16.9260404,17.0629454 C17.9991164,17.0629454 18.8690163,17.9442851 18.8690163,19.0314727 C18.8690163,20.1186603 17.9991164,21 16.9260404,21 C15.8529645,21 14.9830646,20.1186603 14.9830646,19.0314727 C14.9830646,17.9442851 15.8529645,17.0629454 16.9260404,17.0629454 Z M4.68250234,4.00019906 C4.81805312,4.00305343 6.04925033,4.04542755 6.45389858,4.64608076 C6.88234968,5.28206651 6.80263785,5.58491686 7.12148517,6.07957245 C7.29885482,6.35289764 7.59594594,6.52220905 7.91860349,6.53384798 L7.91860349,6.53384798 L21.1507675,6.53384798 C21.4308548,6.53384798 21.670625,6.62101216 21.8337144,6.83112471 C21.9968038,7.04123727 22.0435467,7.32082751 21.9578498,7.5736342 L21.9578498,7.5736342 L20.1344417,13.5296912 C19.8182354,14.4890106 18.9672885,15.1644178 17.9722582,15.2458432 L17.9722582,15.2458432 L9.22388473,15.2458432 C8.27336536,15.155352 7.4514576,14.5366515 7.09159324,13.6407363 C7.08162926,13.6003563 7.0118814,13.4691211 7.0118814,13.378266 C6.72292602,12.3990499 5.41764477,7.02850356 5.12868939,6.53384798 C4.96316485,6.23794413 4.64690714,6.06210569 4.31164311,6.07957245 L4.31164311,6.07957245 L3.02628983,6.07957245 C2.45948561,6.07957245 2,5.6140443 2,5.03978622 C2,4.46552815 2.45948561,4 3.02628983,4 L3.02628983,4 Z"></path></svg>';
                echo "</button>";
                echo "</form>";
                echo '</div>';
            }

            mysqli_close($con);

            function loadItems($id){
                //lade die items neu, je nach category
                switch($id)
                {
                    case 1:
                        global $sql;
                        $sql = "SELECT * FROM products";
                        break;
                    case 2:
                        global $sql;
                        $sql = "SELECT * FROM products WHERE category='Ernaehrung';";
                        break;
                    case 3:
                        global $sql;
                        $sql = "SELECT * FROM products WHERE category='Gesundheit';";
                        break;
                    case 4:
                        global $sql;
                        $sql = "SELECT * FROM products WHERE category='haare';";
                        break;
                    case 5:
                        global $sql;
                        $sql = "SELECT * FROM products WHERE category='makeup';";
                        break;
                    case 6:
                        global $sql;
                        $sql = "SELECT * FROM products WHERE category='Maennerpflege';";
                        break;
                    case 7:
                        global $sql;
                        $sql = "SELECT * FROM products WHERE category='pflegeundparfum';";
                        break;
                    case 8:
                        global $sql;
                        $sql = "SELECT * FROM products WHERE category='tier';";
                        break;
                }
            }

            function search($val){
                if($val!= ""){
                    global $sql;
                    $sql = "SELECT * FROM products WHERE name LIKE '%$val%';";
                }
            }

            function substrwords($text, $maxchar, $end='...') {
                if (strlen($text) > $maxchar || $text == '') {
                    $words = preg_split('/\s/', $text);      
                    $output = '';
                    $i      = 0;
                    while (1) {
                        $length = strlen($output)+strlen($words[$i]);
                        if ($length > $maxchar) {
                            break;
                        } 
                        else {
                            $output .= " " . $words[$i];
                            ++$i;
                        }
                    }
                    $output .= $end;
                } 
                else {
                    $output = $text;
                }
                return $output;
            }
            ?>

            <div style="clear:both;"></div>

            <div class="message_box" style="margin:10px 0px;">
            <?php echo $status; ?>
            </div>
        </div>

</body>

</html>